<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function logout()
    {
        session()->forget('user');
        session()->forget('student');
        session()->forget('id_invoice');
        session()->forget('submit');
        return redirect('/');
    }
    public function index() {
        return view('index');
    }
    public function login(){
        return view('login');
    }
    public function home() {
        $sessio = session()->get('user');
        if ($sessio != null) {
            $user = DB::table('users')->where('id', $sessio['id'])->first();
            $historyTransaction = DB::table('invoices')->where('invoice_user', $user->id)->get();
            if (count($historyTransaction) > 0)
            {
                return view('home', ['user' => $user, 'history' => $historyTransaction]);
            }
            return view('home', ['user' => $user]);
        }
        return redirect('login');
        
    }
    public function submitStudent(Request $request) {
        session()->forget('error');
        $student = DB::table('users')->where('mssv', $request->mssv)->first();
        $sessio = session()->get('user');
        $user = DB::table('users')->where('id', $sessio['id'])->first();
        if ($student!= null)
        {
            session()->forget('student');
            $request->session()->put('student', [
                'id' => $student->id,
                'mssv' => $student->mssv,
                'name'=>$student->name,
                'username'=>$student->username,
                'address'=>$student->address,
                'email'=> $student->email,
                'numberphone' => $student->numberphone,
                'wallet' => $student->wallet,
                'price_student' => $student->price_student
            ]);
            return view('home', ['user' => $user , 'student' => $student]);
        }else {
            session()->forget('student');
            return view('home', ['user' => $user , 'student' =>null]);

        }
    }
    public function success() { 
        $sessio = session()->get('user');
        if ($sessio != null)
            return view('success');
        return redirect('login');
    }
    public function postLogin(Request $request) {
        $data = $request->all();
        $error = '';
        if (isset($data['username']) && isset($data['password']))
        {
            $user = DB::table('users')->where('username', $data['username'])->first();
            // dd($user);
            if ($user != null)
            {
                if ($user->password == md5($data['password']))
                {
                    $request->session()->put('user', [
                        'id' => $user->id,
                        'mssv' => $user->mssv,
                        'name'=>$user->name,
                        'username'=>$user->username,
                        'address'=>$user->address,
                        'email'=> $user->email,
                        'numberphone' => $user->numberphone,
                        'wallet' => $user->wallet
                    ]);
                    session()->put('submit', 'none');

                    return redirect('home');
                }
                else {
                    session()->put('user_error', $error.'Sai mật khẩu <br>');
                }
            }
            else {
                session()->put('user_error', $error.'Tên đăng nhập không tồn tại <br>');
            }
        }
        else {
            session()->put('user_error', $error.'Thiếu thông tin đăng nhập <br>');
        }
        return redirect('login');
    }
    // public function generateOTP() {
    //     $sess = session()->get('user');
    //     $invoice = DB::table('')
    // }
    public function postPrice(Request $request) {
        session()->forget('error');
        $data = $request->all();
        $error = '';
        if ($data['price_student'] == null)
        {
            $flag = true;
            $error = $error.'Số tiền đóng không được bỏ trống <br>';
        }
        if ($data['mssv_student'] == null)
        {
            $flag = true;
            $error = $error.'Thông tin người được đóng không được bỏ trống. <br>';
        }
        if($data['price_student'] == 0){
            $flag = true;
            $error = $error.'Số tiền đóng không được bằng 0 <br>';
        }
        if($data['wallet'] < $data['price_student']){
            $flag = true;
            $error = $error.'Số dư không khả dụng. <br>';
        }
        
        if (isset($flag)){
            session()->put('error', $error);
            return redirect('home');
        }
        $otp = strtoupper(substr($this->guidv4(),0,8));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $startTime = date("Y-m-d H:i:s");
        $cenvertedTime = date('Y-m-d H:i:s',strtotime('+5 minutes',strtotime($startTime)));
        $invoice = DB::table('invoices')->insertGetId([
            'invoice_number' => 'HD'.strtoupper(substr($this->guidv4(),0,8)),
            'invoice_user' => $data['id'],
            'mssv_student' => $data['mssv_student'],
            'name_student' => $data['name_student'],
            'price_student' => $data['price_student'],
            'invoice_status' => 0,
            'invoice_otp' => $otp,
            'invoice_endotp' => $cenvertedTime,
            'agree' => 'off',
            'created_at' => $startTime
        ]);
        $emails = session()->get('user');
        $email = $emails['email'];
        \Mail::to($email)->send(new \App\Mail\SendMail([
            'emails' => $otp,
        ]));
        $request->session()->put('id_invoice', $invoice);
        $request->session()->put('submit', 'display');
        return redirect('home');
    }
    public function guidv4()
    {
        if (function_exists('com_create_guid') === true)
            return trim(com_create_guid(), '{}');
     
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    public function submitForm(Request $request) {
        $data = $request->all();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $startTime = date("Y-m-d H:i:s");
        $invoi = DB::table('invoices')->where('id', $data['id_invoice'])->first();
        if ($invoi->invoice_endotp >= $startTime && $invoi->invoice_otp == $data['otp']) {
            DB::table('invoices')->where('id',$invoi->id)->update([
                'invoice_status' => 1,
                'updated_at' => $startTime,
                'agree' => $data['agree']
            ]);
            DB::table('users')->where('mssv', $invoi->mssv_student)->update(['price_student' => 0]);
            $user = DB::table('users')->where('id', $invoi->invoice_user)->first();
            DB::table('users')->where('id', $invoi->invoice_user)->update([
                'wallet' => $user->wallet- $invoi->price_student
            ]);
            $data = [
                'transaction' => $invoi->invoice_number,
                'date' => $startTime,
                'price' => $invoi->price_student,
                'mssvnop' => $user->mssv,
                'mssvnhan' => $invoi->mssv_student
            ];
            session()->forget('student');
            session()->forget('id_invoice');
            session()->forget('submit');

            return view('success', ['data'=>$data]);
        }
        elseif($startTime > $invoi->invoice_endotp) {
            session()->put('error', 'Quá thời gian OTP giao dịch, vui lòng gữi lại OTP.');
            session()->forget('submit');
            return redirect('home');
        }
        else {
            session()->put('error', 'OTP Không đúng, Vui lòng thử lại.');
            session()->forget('submit');
            return redirect('home');
        }
       
    }
}

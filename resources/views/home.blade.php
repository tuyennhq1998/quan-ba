<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homescreen.css">
<body>
    <nav class="navbar navbar-expand-md bg-light navbar-dark border-bottom-0-primary">
        <div class="container">
          <img src="./img/image.png" alt="" style="width: 80px;">
            <a class="navbar-brand pl-5" id="title" href="#">HỆ THỐNG THANH TOÁN HỌC PHÍ | TUITION PAYMENT SYSTEM</a>
      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="{{url('home')}}"><i class="fa-solid fa-house-user" style="color: #0067AC;"></i></a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="{{url('logout')}}"><i class="fa-solid fa-right-from-bracket" style="color: #DE412E;"></i></a>
                    </li>
            </div>
            
        </div>
        
    </nav>
    <div class="container">

        <div class="row">
            
            <div class="col-lg-12 col-sm-12 mt-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./img/25-2.jpg" class="d-block w-100" alt="...">
                      </div>
                
                      <div class="carousel-item">
                        <img src="./img/25-12-0.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/25-15.png" class="d-block w-100" alt="...">
                      </div>
                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#preorder">Thanh Toán Học Phí</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#fanmerchandise">Thông Tin Tài Khoản</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#beapartner">Lịch Sử Giao Dịch</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="preorder">
                            <div class="row border g-0 rounded shadow-sm">
                                <div class="col p-4">
                                    <div class="row justify-content-around"> 
                                            <p style="color:red">
                                            <?php if (session()->get('error') != null) echo session()->get('error') ?>        
</p>       
                                            <h1 class="text-center h3" style="background-color: #0067AC; color: white;">Thanh Toán Học Phí</h1>
                                            <div class="form-group">
                                                <h4 class="h5 py-3 mb-1">I. Người nộp tiền</h1>
                                                <label for="hotenNguoiNop">Họ và tên | Full name</label>
                                                <input type="text" class="form-control" id="hotenNguoiNop" name="hotenNguoiNop" value="{{$user->name}}" readonly disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="sdt">Số điện thoại | Phone number</label>
                                                <input type="text" class="form-control" id="sdt" name="sdt" value="{{$user->numberphone}}" disabled readonly/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="email">Địa chỉ email | Email address</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" disabled readonly/>
                                            </div>
                                            <?php
                                                $id_invoice = session()->get('id_invoice');
                                            ?>
                                            <div class="form-group mt-3">
                                                <h4 class="h5 py-3 mb-1">II. Thông tin học phí</h1>
                                                <label for="mssv">Mã số sinh viên | Student ID</label>
                                                <form action="{{url('submitStudent')}}" method="post">@csrf

                                                <input type="text" class="form-control" name="mssv" placeholder="Nhập MSSV cần thanh toán học phí" required/>
                                                <input type="submit" name="sutmit" class="btn btn-primary mt-3" style="width:40%; background-color:#DE412E">
                                                </form>

                                            </div>
                                            
                                            
                                            <?php $student = session()->get('student'); ?>

                                            <div class="form-group mt-2">
                                                <label for="fullnameSV">Họ và tên sinh viên | Student's full name</label>
                                                <input type="text" class="form-control" name="fullnameSV" require readonly value="{{session()->has('student')? $student['name'] : ''}}" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="fees">Số tiền cần nộp | Tuition fees</label>
                                                <input type="text" class="form-control" id="fees" name="fees" require readonly value="{{$student!=null ? number_format($student['price_student'],0) : 0}} VND" disabled/>
                                            </div>
                                            <?php
                                                $wallet = session()->get('user');
                                            ?>
                                           


                                            <div class="form-group mt-3">
                                                <h4 class="h5 py-3 mb-1">III. Thông tin thanh toán</h1>
                                                <label for="available-balances">Số dư khả dụng | Student ID</label>
                                                <input type="text" class="form-control" id="available-balances" name="wallet" value="{{number_format($user->wallet,0)}} VND" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="fees">Số tiền học phí cần thanh toán | Tuition fees</label>
                                                <input type="text" class="form-control" id="fees" name="fees" value="{{is_null($student) ? 0 : number_format($student['price_student'],0)}} VND" disabled/>
                                            </div>

                                            <div class="form-group mt-3">  
                                                <label for="notes">Một số lưu ý | Some notes</label>
                                                <div class="form-group" style="border: 2px solid white">
                                                    <p id="note1">Khách hàng phải thanh toán toàn bộ số tiền học phí trong 1 kỳ (không cho phép tách hóa đơn
                                                        học phí ra thành nhiều phần).</p>
                                                    <p id="note2">Thông tin thanh toán của khách hàng sẽ được hệ thống cập nhật từ 2-3 ngày
                                                        ngay sau khi khách hàng thực hiện giao dịch thành công. </p>
                                                </div>
                                                
                                            </div>
                                            <form action="{{url('postPrice')}}" method="post">
                                                @csrf
                                                <?php $ss = is_null(session()->get('student')) ? null : session()->get('student'); ?>
                                            <input type="hidden" name="mssv_student" value="{{is_null(session()->get('student'))? '' : $ss['mssv']}}">
                                            <input type="hidden" name="name_student" value="{{is_null(session()->get('student'))? '' : $ss['name']}}">
                                            <input type="hidden" name="price_student" value="{{is_null(session()->get('student'))? '' : $ss['price_student']}}">
                                            <input type="hidden" name="id" value="{{$wallet['id']}}">
                                            <input type="hidden" name="wallet" value="{{$wallet['wallet']}}">
                                            <button type="submit" id="otp-click" class="btn btn-primary" style="width: 100%; background-color:#DE412E">
                                                        Gữi OTP
                                                      </button>
                                            </form>
                                            
                                            
                                            <div class=" mt-2">
                                                <form action="{{url('submitForm')}}" method="post">
                                                <div class="form-check mb-5 mt-3">
                                                
                                                <input type="checkbox" id="agree" name="agree" class="form-check-input" require />
                                                <label class="form-check-label" for="agree" >Tôi đồng ý với điều khoản và điều kiện này.</label>
                                                </div>
                                                
                                                    @csrf
                                                <label for="fees">Nhập OTP</label>
                                                <input type="text" class="form-control" id="otp" name="otp"/>
                                                <?php $id = session()->get('id_invoice');?>
                                                <input type="hidden" name="id_invoice" value="{{session()->get('id_invoice')}}">
                                                <input type="submit" id="submit-click" class="btn btn-primary" value="Thực hiện" style="display: {{session()->get('submit')}}">
                                                
                                                </form>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="fanmerchandise">
                            <div class="row border g-0 rounded shadow-sm">
                                <div class="col p-4">
                                    <div class="row justify-content-around">                
                                        <!-- <form action="/login_check" method="post" class="col-md-5 p-5 my-3 mt-5"> -->
                                            <h1 class="text-center h3" style="background-color: #0067AC; color: white;">Thông Tin Tài Khoản</h1>
                                            <div class="form-group mt-5">
                                                <label for="mssv">Mã số sinh viên | Student ID</label>
                                                <input type="text" class="form-control" id="mssv" name="mssv" value="{{$user->mssv}}" disabled/>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="hotenNguoiNop">Họ và tên | Full name</label>
                                                <input type="text" class="form-control" id="hotenNguoiNop" name="hotenNguoiNop" value="{{$user->name}}" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="sdt">Số điện thoại | Phone number</label>
                                                <input type="text" class="form-control" id="sdt" name="sdt" value="{{$user->numberphone}}" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="email">Địa chỉ email | Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" disabled/>
                                            </div>
                    
                                            <div class="form-group mt-3">
                                                <label for="available-balances">Số dư khả dụng | Available balances</label>
                                                <input type="text" class="form-control" id="available-balances" name="available-balances" value="{{number_format($user->wallet,0)}} VND" disabled/>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="">Số tiền học phí còn nợ | Tuition Debt</label>
                                                <input type="text" class="form-control" id="tuition-debt" name="tuition-debt" value="{{number_format($user->price_student,0)}} VND" disabled/>
                                            </div>
                                        <!-- </form> -->
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="beapartner">
                            <div class="row border g-0 rounded shadow-sm">
                                
                                <div class="col p-4">
                                    <div class="row justify-content-center">
                                        <div class="col-md-9" style="background-color: #0067AC;">
                                            <h4 class="mt-3 mb-4" style="text-align: center; color: white">LỊCH SỬ GIAO DỊCH</h4>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr style="background-color: #0067AC; color: white;">
                                                        <th>Mã giao dịch</th>
                                                        <th>Ngày</th>
                                                        <th>Số tiền đã nộp</th>
                                                        <th>Mã số sinh viên được thanh toán</th>
                                                        <th>Mã số sinh viên nộp tiền</th>
                                                        <th>Trạng thái giao dịch</th>

                                                    </tr>
                                                    <?php
                                                    if (isset($history)):?>
                                                    <?php foreach ($history as $data): ?>
                                                    <tr style="background-color: #0067AC; color: white;">
                                                        <th>{{$data->invoice_number}}</th>
                                                        <th>{{$data->updated_at ==  null ? $data->created_at : $data->updated_at}}</th>
                                                        <th>{{number_format($data->price_student,0)}}VND</th>
                                                        <th>{{$data->mssv_student}}</th>
                                                        <th><?php
                                                            $u = session()->get('user');
                                                            echo $u['mssv'];
                                                        ?></th>
                                                        <th>
                                                            <p style="color:green">{{$data->invoice_status == 1 ? "Giao dịch hoàn tất" : ''}}</p>
                                                            <p style="color:yellow">{{$data->invoice_status == 0 ? "Chờ xử lý" : ''}}</p>
                                                            <p style="color:red">{{$data->invoice_status == -1 ? "Giao dịch thất bại" : ''}}</p>
                                                    </tr>
                                                    <?php endforeach?>
                                                    <?php endif ?>
                                                </thead>
                                                <tbody id="table-body">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

        
                
            
            
        
        
    </div>

    <div class="footer" align="center">
      <div style="padding: 10px 0px 10px 0px;">
        ©2022 Đại học Tôn Đức Thắng<br>
        Ứng dụng được phát triển bởi Nhóm 22 - TC - 2022-2023
      </div>
    </div>
    
</body>
</html>

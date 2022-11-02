<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao dịch thành công</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/paymentsuccess.css">
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
        <div class="row justify-content-around">                
            <form action="/login_check" method="post" class="col-md-5 p-5 my-3 mt-5">
                <h1 class="text-center h3" style="background-color: #54B435; color: white;">GIAO DỊCH THÀNH CÔNG</h1>
                <div class="form-group">
                    <h4 class="h5 py-3 mb-1">Chi tiết giao dịch</h1>
                    <label for="magiaodich">Mã giao dịch</label>
                    <input type="text" class="form-control" id="magiaodich" name="magiaodich" value="{{$data['transaction']}}" disabled/>
                </div>
                <div class="form-group mt-2">
                    <label for="date">Ngày</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{$data['date']}}" disabled/>
                </div>
                <div class="form-group mt-2">
                    <label for="fees">Số tiền đã nộp</label>
                    <input type="text" class="form-control" id="fees" name="fees" value="{{number_format($data['price'],0)}}VND" disabled/>
                </div>

                <div class="form-group mt-2">
                    <label for="mssv">Mã số sinh viên được thanh toán</label>
                    <input type="text" class="form-control" id="mssv" name="mssv" value="{{$data['mssvnhan']}}"  disabled/>
                </div>
                <div class="form-group mt-2">
                    <label for="mssvnop">Mã số sinh viên nộp tiền</label>
                    <input type="text" class="form-control" id="mssvnop" name="mssvnop" value="{{$data['mssvnop']}}" disabled/>
                </div>


        <!-- <div class="row mt-3">
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
                                        <form action="/login_check" method="post" class="col-md-5 p-5 my-3 mt-5">
                                            <h1 class="text-center h3" style="background-color: #0067AC; color: white;">Thanh Toán Học Phí</h1>
                                            <div class="form-group">
                                                <h4 class="h5 py-3 mb-1">I. Người nộp tiền</h1>
                                                <label for="hotenNguoiNop">Họ và tên | Full name</label>
                                                <input type="text" class="form-control" id="hotenNguoiNop" name="hotenNguoiNop" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="sdt">Số điện thoại | Phone number</label>
                                                <input type="text" class="form-control" id="sdt" name="sdt" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="email">Địa chỉ email | Email address</label>
                                                <input type="text" class="form-control" id="email" name="email" disabled/>
                                            </div>
                    
                                            <div class="form-group mt-3">
                                                <h4 class="h5 py-3 mb-1">II. Thông tin học phí</h1>
                                                <label for="mssv">Mã số sinh viên | Student ID</label>
                                                <input type="text" class="form-control" id="mssv" name="mssv" value="" placeholder="Nhập MSSV cần thanh toán học phí" required/>
                                                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 40%; background-color:#DE412E">
                                                    Xác nhận MSSV
                                                  </button>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="fullnameSV">Họ và tên sinh viên | Student's full name</label>
                                                <input type="text" class="form-control" id="fullnameSV" name="fullnameSV" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="fees">Số tiền cần nộp | Tuition fees</label>
                                                <input type="text" class="form-control" id="fees" name="fees" disabled/>
                                            </div>
                    
                                            <div class="form-group mt-3">
                                                <h4 class="h5 py-3 mb-1">III. Thông tin thanh toán</h1>
                                                <label for="available-balances">Số dư khả dụng | Student ID</label>
                                                <input type="text" class="form-control" id="available-balances" name="available-balances" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="fullnameSV">Số tiền học phí cần thanh toán | Tuition fees</label>
                                                <input type="text" class="form-control" id="fees" name="fees" value="" disabled/>
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
                                            <div class="form-check mb-5 mt-3">
                                                <input type="checkbox" id="agree" name="_agree" class="form-check-input" />
                                                <label class="form-check-label" for="agree" >Tôi đồng ý với điều khoản và điều kiện này.</label>
                                            </div>
                    
                                            <div class="form-row">
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 100%; background-color:#DE412E">
                                                        Xác nhận thanh toán
                                                      </button>
                                                      
                                                      
                                                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">[BE A PARTNER] Genshin Impact Partner</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                
                                                                <form action="/login_check" method="post" class="col-md-5 p-5 my-3 mt-5">
                                                                    <h1 class="text-center h3" style="color: black;">Xác Nhận Mã OTP</h1>
                                                                    <p style="color: black">Mã OTP đã được gửi đến gmail của bạn, vui lòng nhập mã otp để xác nhận thanh toán!</p>
                                                                    <div class="form-group mb-3">
                                                                        <input type="text" class="form-control" id="hotenNguoiNop" name="hotenNguoiNop" value="" placeholder="######" style="font-size: 20px;"/>
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="text-center">
                                                                            
                                                                            
                                                                        </div>
                                            
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác nhận mã</button>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </div>
                    
                                                  
                                            </div>
                                        </form>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="fanmerchandise">
                            <div class="row border g-0 rounded shadow-sm">
                                <div class="col p-4">
                                    <div class="row justify-content-around">                
                                        <form action="/login_check" method="post" class="col-md-5 p-5 my-3 mt-5">
                                            <h1 class="text-center h3" style="background-color: #0067AC; color: white;">Thông Tin Tài Khoản</h1>
                                            <div class="form-group mt-5">
                                                <label for="mssv">Mã số sinh viên | Student ID</label>
                                                <input type="text" class="form-control" id="mssv" name="mssv" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="hotenNguoiNop">Họ và tên | Full name</label>
                                                <input type="text" class="form-control" id="hotenNguoiNop" name="hotenNguoiNop" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="sdt">Số điện thoại | Phone number</label>
                                                <input type="text" class="form-control" id="sdt" name="sdt" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="email">Địa chỉ email | Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" disabled/>
                                            </div>
                    
                                            <div class="form-group mt-3">
                                                <label for="available-balances">Số dư khả dụng | Available balances</label>
                                                <input type="text" class="form-control" id="available-balances" name="available-balances" value="" disabled/>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="">Số tiền học phí còn nợ | Tuition Debt</label>
                                                <input type="text" class="form-control" id="tuition-debt" name="tuition-debt" value="" disabled/>
                                            </div>
                                        </form>
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
                                                    </tr>
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
                
            </div> -->
            
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
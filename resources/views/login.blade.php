<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                <img src="../img/tdt_logo_white.png" alt="" class="logo">
                <a href="" class="title">HỆ THỐNG THANH TOÁN HỌC PHÍ | TUITION PAYMENT SYSTEM</a>
                <ul>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div id="login-form"class="login-page">
            <div class="form-box">
            <p style="color:red">
                <?php if (session()->get('user_error') != null) echo session()->get('user_error') ?>        
            </p>       
                <h3>Đăng Nhập</h3>
                <form id="login" class="input-group-login" action="{{url('postLogin')}}" method="post">
                    @csrf
                    <input type="text" class="input-field" name="username" value="" placeholder="Nhập tên người dùng" required >
                    <input type="password" class="input-field" name="password" value="" placeholder="Nhập mật khẩu" required>
                    <button type="submit" class="submit-btn">Đăng nhập</button>
		        </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
		var y=document.getElementById("register");
		var z=document.getElementById("btn");
		function register()
		{
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}
		function login()
		{
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";
		}
	</script>
	
</body>
</html>

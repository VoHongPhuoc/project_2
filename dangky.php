<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký</title>
</head>
<style type="text/css">
	.shadow {
		border: 10px solid #fff;
	    border-radius: 20px;
	    -webkit-box-shadow: 0px 0px 11px 6px rgba(0,0,0,0.71);
	    -moz-box-shadow: 0px 0px 11px 6px rgba(0,0,0,0.71);
	    box-shadow: 0px 0px 11px 6px rgba(0,0,0,0.71);
	}
</style>
<body style="background-image: url(./img/anhdong111.gif);background-size:cover;width: 99%;height: 100%;background-repeat: no-repeat;">
	<div class="shadow" style="padding-top: 50px; padding-bottom: 50px; width: 600px;height: 250px; margin: auto; margin-top: 100px;">
		
	<form action="" method="post">
			<h1 style="color: #FFFFFF; text-align: center;margin-top: -10px;line-height: 20px; color: red">ĐĂNG KÝ</h1>
			<span style="color: white;margin-left: 140px; font-size: 25px;">Có thể sử dụng tài khoản <a style="text-decoration: none;" href="https://vi-vn.facebook.com/login/"><b style="color: red">Facebook</b></a></span><br><br>
			<div style="width: 80%;height: 200px;float: left; font-size: 25px;">
				<span style="color: #FFFFFF;margin-left: 150px;"><b>Username</b></span> <input type="text" name="name" placeholder=" Tên tài khoản" style="border-radius: 5px;"><br><br>
			
			<span style="color: #FFFFFF;margin-left: 150px;"><b>Password</b> <input type="password" name="password" placeholder="●●●●●●●●●" style="border-radius: 5px;"><br><br>
				
			<a href="dangnhap.php" style="color: #FFFFFF;margin-left: 110px;text-decoration: none;float: left;">Đăng nhập ngay	|</a>
			<a href="trangchu.php" style="color: #FFFFFF; text-decoration: none;float: left;">	Quay lại trang chủ</a>
			</div>
			<div style="width: 20%;height: 200px;float: left;">
				<input type="submit" name="submit" value="" style="background-image: url(./imga/anhok1.png);background-size: 59px 60px;width: 60px;height: 60px;margin-left: -30px;border: solid 0px black;">
			</div>
			
	</form>
	</div>
	<?php
	include './connect/connect.php';
	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$sql = "INSERT INTO dangnhap(name,password) values('$name','$password')";
		$sql = mysqli_query($con,$sql);
		if($sql != 0){
			echo '<script>alert( "Đăng ký thành công")</script>';
				
		}else{
			echo '<script>alert( "Đăng ký không thành công")</script>';
		}
	}
	?>
</body>
</html>
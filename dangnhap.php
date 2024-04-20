<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
</head>
<style type="text/css">
	.shadow {
		border: 10px solid #FFFF00;
	    border-radius: 20px;
	    -webkit-box-shadow: 0px 0px 11px 6px rgba(0,0,0,0.71);
	    -moz-box-shadow: 0px 0px 11px 6px rgba(0,0,0,0.71);
	    box-shadow: 0px 0px 11px 6px rgba(0,0,0,0.71);
	}
</style>
<body style="background-image: url(./img/hongphuoc.jpg);background-size:cover;width: 99%;height: 100%;background-repeat: no-repeat; ">
	<div class="shadow" style="padding-top: 50px; padding-bottom: 50px; width: 600px;height: 250px; margin: auto; margin-top: 100px;">
		
	<form action="" method="post" name="">
			<h1 style="color: #FFFFFF; text-align: center;margin-top: -10px;line-height: 20px;color: #00FF00;">ĐĂNG NHẬP</h1>
			<span style="color: white;margin-left: 140px; font-size: 25px;">Có thể sử dụng tài khoản <a style="text-decoration: none;" href="https://vi-vn.facebook.com/login/"><b style="color: red">Facebook</b></a></span><br><br>
			<div style="width: 80%;height: 200px;float: left; font-size: 25px;">
				<span style="color: #FFFFFF;margin-left: 150px;"><b>Username</b></span> <input type="text" name="name" placeholder=" Tên tài khoản" style="border-radius: 5px;"><br><br>
			
			<span style="color: #FFFFFF;margin-left: 150px;"><b>Password</b> <input type="password" name="password" placeholder="●●●●●●●●●" style="border-radius: 5px;"><br><br>
			
			<a href="dangky.php" style="color: #FFFFFF;margin-left: 130px; text-decoration: none;float: left;">Đăng ký ngay	|</a>
			<a href="trangchu.php" style="color: #FFFFFF; text-decoration: none;float: left;margin-left: 4px;">Quay lại trang chủ</a>	
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
		$sql = "select * from dangnhap where name='$name' and password='$password'";
		$query =  mysqli_query($con,$sql);
		$num_row = mysqli_num_rows($query);
		if($num_row != 0){
				
			echo '<script>alert( "Đăng nhập thành công")</script>';
				header('location: trangchuadmin.php');
		}else{
			echo '<script>alert( "Tên hoặc mật khẩu không đúng")</script>';
		}

	}
	?>
</body>
</html>
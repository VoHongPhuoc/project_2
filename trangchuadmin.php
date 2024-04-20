<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<title>Trang chủ admin</title>
</head>
<body>
	<div class="wrapper">
		<div class="banner">
			<img src="./img/banneradmin2.gif">
		</div>
		<div class="menu">
			<ul style="margin-left: 1030px;">
				<li style="line-height: 40px; color: red;margin-left: 10px">Xin chào Admin</li>
				<li style="line-height: 40px;margin-left: 10px;">|</li>
				<li style="float: right;margin-right: 25px;"><span><a style="text-decoration: none;color: #ffffff;" href="dangnhap.php">Thoát</a></span></li>
			</ul>
		</div>
		<div class="body">
			<div class="left">
				<div class="lefttren" style="text-align: center; font-size: 24px;line-height: 35px; color: red"><b>😂 QUẢN LÝ 😂</b></div>
				<ul>
					<li><a href="trangchuadmin.php?nc=sp">❤ Quản lý laptop</a></li>
					<li><a href="trangchuadmin.php?nc=dt">❤ Quản lý điện thoại</a></li>
					<li><a href="trangchuadmin.php?nc=km">❤ Quản lý khuyến mãi</a></li>
					<li><a href="trangchuadmin.php?nc=tt">❤ Quản lý tin tức</a></li>
					<li><a href="trangchuadmin.php?nc=nd">❤ Quản lý người dùng</a></li>
				</ul>
			</div>
			<div class="right">
				<?php
					if (isset($_GET['nc'])) {
			          if ($_GET['nc'] == 'sp') {
			            require('sanphamlaptop.php');
			          }
			          if ($_GET['nc'] == 'themsp') {
			            require('sanpham.php');
			          }
			          if ($_GET['nc'] == 'suasp') {
			            require('suasanpham.php');
			          }
			          if ($_GET['nc'] == 'dt') {
			            require('sanphamdienthoai.php');
			          }
			          if ($_GET['nc'] == 'themdt') {
			            require('sanphamdt.php');
			          }
			          if($_GET['nc']=='suadt'){
			          	require('suasanpham2.php');
			          }
			          if($_GET['nc']=='nd'){
			          	require('quanlynguoidung.php');
			          }
			          if($_GET['nc']=='themnd'){
			          	require('themnguoidung.php');
			          }
			          if($_GET['nc']=='suand'){
			          	require('suanguoidung.php');
			          }
			          if($_GET['nc']=='km'){
			          	require('quanlykhuyenmai.php');
			          }
			          if ($_GET['nc']=='themttkm') {
			          	require('themkhuyenmai.php');
			          }
			          if ($_GET['nc']=='suattkm') {
			          	require('suakhuyenmai.php');
			          }
			          if($_GET['nc']=='tt'){
			          	require('quanlytintuc.php');
			          }
			          if ($_GET['nc']=='themtt') {
			          	require('themtintuc.php');
			          }
			          if ($_GET['nc']=='suatt') {
			          	require('suatintuc.php');
			          }
			        }
				?>
			</div>
		</div>
		<div style="width: 100%;height: 3px;background-color: white;margin-top: 4px;"></div>
		
		<div class="footer">
			<div class="footerleft" style="line-height: 15px;margin-left:-10px;">
				<ul>
					<li><img src="img/footer.png" style="width: 200px;height: 80px;margin-top: -20px;"></li>
					<li><strong>Công ty TNHH Hồng Phước</strong></li><br>
					<img src="img/ic_dc.png" style="width: 20px;height: 20px;margin-left: -20px;margin-top: -2px;float: left;"><li style="float: left;margin-left: 2px"><b>Địa chỉ CS1:</b> 03 Lạc Long Quân,Hòa Khánh Bắc , Liên Chiểu, Đà Nẵng</li><br><br>
					<img src="img/ic_dc.png" style="width: 20px;height: 20px;margin-left: -20px;margin-top: -2px;float: left;"><li style="float: left;margin-left: 2px"><b>Địa chỉ CS2:</b> Ngãi An, Phù Cát, Bình Định</li><br><br>
					<img src="img/ic_dt.png" style="width: 25px;height: 25px;margin-left: -22px;margin-top: -6px;float: left;"><li style="margin-left: -1px;float: left;"><b>Địa thoại:</b> 0971418798</li><br><br>
					<img src="img/email.png" style="width: 14px;height: 14px;margin-left: -18px;margin-top: 0px;float: left;"><li style="margin-left: 2px;"><b>Email:</b> <a href="https://mail.google.com/mail/u/0/?pli=1#inbox" style="text-decoration: none;"> hphuoc370@gmail.com</a></li><br><br>
					<img src="img/dh.png" style="width: 25px;height: 25px;margin-left: -24px;margin-top: -20px;float: left;"><li style="float: left;margin-top: -14px;"><b>Giờ đóng cửa:</b> 08:00 AM - 10:00 PM các ngày tuần</li><br>
					<li><b>Fanpage:</b> <a href="www.Laptopdienthoai.com" style="text-decoration: none;">www.Laptopdienthoai.com</a></li>
					<li><a href="https://www.facebook.com/"><img src="img/ic_fb.png" style="width: 100px;height: 100px;margin-top: 20px;float: left;"></a></li>
					<li><a href="https://www.youtube.com/">	 <img src="img/ytb.png" style="width: 130px;height: 130px;margin-top: 8px;float: left;"></a></li>
				</ul>
			</div>
			
			<div class="footerright">
				<h2></h2>
				<div style="margin-left: 120px;margin-top: 10px; ">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7937692197766!2d108.14637831433684!3d16.076188143522753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218d3ff053701%3A0xe7416d34da33f12d!2zMTQzIE5ndXnhu4VuIEzGsMahbmcgQuG6sW5n!5e0!3m2!1svi!2s!4v1602157443126!5m2!1svi!2s" width="470" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div style="font-size: 21px;color: red;margin-top: 5px;">
					<span style="margin-left: 230px;"><b>NHẬN TIN KHUYẾN MÃI</b></span>
					<form style="float: left;margin-top: 20px;margin-left: 150px;">
						Email: <input type="" name="" placeholder=" Nhập email để nhận tin khuyến mãi" style="width: 220px;height: 30px;border: solid 1px;border-radius: 5px;">
						<input type="submit" name="" value="Gửi" style="border-radius: 5px;background: yellow;border: solid 1px; width: 50px;height: 25px;">
					</form>
				</div>
			</div>
		</div>
		<div class="footer1">
				<marquee><span style="font-size: 14px;color: #31B404"><h3>😂😂😂Chân Thành Cảm Ơn😂😂😂 </h3> </span></marquee>
			</div>
		<div style="width: 100%;height: 60px;background: white;text-align: center;font-size: 15px;line-height: 20px; color: red; font-weight: bold;">
			<span>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span><br>
			<span>Copyright 2020 © - Bản quyền thuộc về công ty TNHH Hồng Phước</span><br>
			<span>Địa chỉ: Số 03 Lạc Long Quân, Liên Chiểu, Đà Nẵng - GPKD số: 0123456789 do Sở Kế Hoạch và Đầu Tư Thành Phố Đà Nẵng cấp</span>
		</div>
	</div>
</body>
</html>
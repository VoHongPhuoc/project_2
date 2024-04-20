<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/muahang.css">
	<title>Mua Hàng</title>
</head>
<body>
	<div class="wrapper">
		<div class="menu">
			<div class="otimkiem">	
				<ul>
				<li>
					<a href="trangchu.php" ><img src="./imga/111.gif" style="border-radius: 20px;"></a>
				</li>
			</div>
			<div class="menuright">
				<ul>
					<li><a href="laptop.php"><img src="./imga/Untitled-1.jpg"></a></li>
					<li><a href="dienthoai.php"><img src="./imga/anh7.jpg"></a></li>
					<li><a href="khuyenmai.php"><img src="./imga/anh3.jpg"></a></li>
					<li><a href="tintuc.php"><img src="./imga/anh4.jpg"></a></li>
					<li><a href="muahang.php"><img src="./imga/hongphuoc11.png"></a></li>
				</ul>
			</div>
			<div class="menuright1">
				<a href="dangnhap.php"><img src="./imga/hongphuoc1.png"></a>
			</div>
		</div>
		<div class="chen1"></div>
		<div class="banner">
			<div class="banner1">
				<div class="slideshow-container">
					<div class="slideshow-container">
	  					<div class="mySlides fade">
	    					<img src="./img/bannermuahang1.jpg">
						</div>
					 
						<div class="mySlides fade">
							<img src="./img/bannermuahang2.jpg">
						</div>
						 
						<div class="mySlides fade">
						    <img src="./img/bannermuahang3.png">
						</div>
					</div>
					 
					<div style="text-align:center; margin-top: 5px;">
					  <span class="dot" onclick="currentSlide(0)"></span> 
					  <span class="dot" onclick="currentSlide(1)"></span> 
					  <span class="dot" onclick="currentSlide(2)"></span>
					  <span class="dot" onclick="currentSlide(3)"></span>
					</div>
				</div>
			</div>
					
		</div>
		<div class="chen2"></div>
		<div class="xinchao">
			<div class="xinchao1">
				<marquee><span style="font-size: 14px;">Hồng Phước xin chào tất cả quý khách hàng ghé thăm chúc một ngày vui vẻ nhé</span></marquee>
			</div>
		</div>
		<div class="chen2"></div>
		<div class="body">
			<center>
				<div style="width: 100%;height: 600px;font-size: 22px;color: black;">
					<span style="color: red;"><h4>CHÀO QUÝ KHÁCH MUỐN ĐẶT HÀNG XIN ĐIỀN THÔNG TIN</h4></span>
					<div style="width: 50%;height: 575px;float: left;">
						<form action="" method="POST" enctype="multipart/form-data" style="font-size: 16px;">
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><h4><font color="red">THÔNG TIN KHÁCH HÀNG</font></h4></td>
								</tr>
								<tr>
									<td>Tên khách hàng</td>
									<td><input type="text" name="" style="width: 198px;" value="" /></td>
								</tr>
								<tr>
									<td>Số điện thoại</td>
									<td><input type="text" name="" style="width: 198px" /></td>
								</tr>
								<tr>
									<td>Địa chỉ</td>
									<td><input type="textarea" name="" style="width: 198px;height: 40px;"/></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="" style="width: 198px;"/></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: center;"><h4><font color="red">CÁCH THỨC GIAO HÀNG</font></h4></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: center;">Phương thức vận chuyển</td>
								</tr>
								<tr>
									<td><input type="radio" name="">Giao tận nơi</td>
								</tr>
									<td>Tỉnh</td>
									<td><select style="width: 158px;">
										<option>---Chọn tỉnh/ thành---</option>
									</select></td>
								</tr>
								<tr>
									<td>Quận</td>
									<td><select style="width: 158px;">
										<option>---Chọn quận/ huyện---</option>
									</select></td>
								</tr>
							</table>
						</form>
					</div>
				<div style="width: 50%;height: 575px;float: left;">
					<form action="" method="POST" enctype="multipart/form-data" style="font-size: 16px;">
						<table>
							<tr>
								<td colspan="2" style="text-align: center;"><h4><font color="red">THÔNG TIN SẢN PHẨM</font></h4></td>
							</tr>
							<tr>
								<td>Mã sản phẩm</td>
								<td><input type="text" name="" style="width: 198px;" value="" /></td>
							</tr>
							<tr>
								<td>Tên sản phẩm</td>
								<td><input type="text" name="" style="width: 198px" /></td>
							</tr>
							<tr>
								<td>Số lượng</td>
								<td><input type="number" name="" style="width: 198px;"/></td>
							</tr>
							<tr>
								<td>Giá</td>
								<td><input type="text" name="" style="width: 198px;"/></td>
							</tr>
							<tr>
								<td>Hình ảnh SP</td>
								<td><input type="file" name=""></td>
							</tr>
							<tr>
								<td colspan="2" style="text-align: center;"><h4><font color="red">CÁCH THỨC THANH TOÁN</font></h4></td>
							</tr>
							<tr>
								<td colspan="2"><input type="radio" name="1">Thanh toán khi giao hàng(COD)</td>
							</tr>
							<tr>
								<td colspan="2"><input type="radio" name="1">Chuyển hkoarn qua ngân hàng</td>
							</tr>
							<tr>
								<td colspan="2"><input type="radio" name="1">Thanh toán online bằng thẻ ATM</td>
							</tr>
							<tr>
								<td colspan="2"><input type="radio" name="1">Ứng dụng Mobile Banking qua cổng VNPAY</td>
							</tr>
							<tr>
								<td colspan="2"><input type="radio" name="1">Thanh toán bằng thẻ Visa/ Master Card</td>
							</tr>
						</table>
					</form><br>
					<div style="width: 100px;height: 40px;background-color: blue;border-radius: 5px;margin-left: -600px;"><a href="" style="text-decoration: none;color: white;font-size: 20px;line-height: 40px;">Hoàn tất</a></div>
				</div>
				</div>
			</center>
			<div style="width: 40%; height: 20px; margin-left: 350px; color: red;"><h2><marquee>HỒNG PHƯỚC CHÂN THÀNH </marquee></h2></div>
			<div style="width: 80%; height: 300px; background-color: white; margin-left: 250px;">
				<img src="./imga/1111.gif" width="80%" height="300px">
			</div>			
		</div>
		<div class="chen2"></div>
		<div class="xinchao2">
				<marquee><span style="font-size: 14px;">Shop chất lượng đảm bảo phục vụ nhiệt tình cho quý khách không phù hợp xin hoàn tiền </span></marquee>
			</div>
		<div class="chen3"></div>
		<div class="chen2"></div>

		
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
<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 2000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
</html>
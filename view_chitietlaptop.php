<?php
include './connect/connect.php';
$matt = $_GET['matt'];
$sql = "select * from chitiet1_laptop where id=".$matt."";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
	?>		
		<div style="width: 100%; height: 670px; background: #FFFFFF;">			
			<center>
				<div style="width: 50%; height: 670px; float: left;background: #FFFFFF;">
					<div>
						<img src="<?php echo $row['hinhanh']?>" width="90%" height="400">
					</div>
					<div>
						<img src="<?php echo $row['anh1']?>" width="160" height="130">
						<img src="<?php echo $row['anh2']?>" width="160" height="130">
						<img src="<?php echo $row['anh3']?>" width="160" height="130">
					</div>
				</div>
			</center>
			<div style="width: 50%; height: 670px;background: #FFFFFF;float: left;"><br>
				<span style="text-decoration: none;font-size: 24px;color: red;">
					<?php echo $row['tenloai'];?>
				</span><br><br>
			<?php echo $row['mota'];?><br>
			<p style="color: red; font-size: 24px;">
				Giá: <?php echo $row['gia'];?>	VNĐ
			</p>
			<b style="color: #FF0000">CPU: </b>
				<?php echo $row['cpu'];?><br>
			<b style="color: #FF0000">RAM:</b>
				<?php echo $row['ram'];?><br>
			<b style="color: #FF0000">Ổ cứng:</b>
				<?php echo $row['ocung'];?><br>
			<b style="color: #FF0000">Card màn hình:</b>
				<?php echo $row['carddohoa'];?><br>
			<b style="color: #FF0000">Màn hình:</b>
				<?php echo $row['manhinh'];?><br>
			<b style="color: #FF0000">Pin:</b>
				<?php echo $row['pin'];?><br>
			<b style="color: #FF0000">Trọng lượng:</b>
				<?php echo $row['trongluong'];?><br>
			<b style="color: #FF0000">Bảo hành:</b>
				<?php echo $row['baohanh'];?><br><br>
			<span style="color:#FF0000">
				<b>Khuyến mãi:</b>
			</span> Balo Pubg, chuột quang không dây, tấm lót chuột, tai nghe game thủ<br></br>
			<div style="width: 230px;height: 50px;background: #00FF00;border-radius: 8px;line-height: 10px;margin-left: 80px;">
				<center>
					<a href="#" style="color: #FFFFFF;text-decoration: none;"><br>
						<b><center>MUA NGAY</center></b><br>
					<span style="font-size: 13px;">Giao tận nơi hoặc nhận tại siêu thị</span>
					</a>
				</center>
			</div><br>
			<center>
				<div style="width: 160px;height: 50px;background: #FF33FF;border-radius: 8px;line-height: 10px;float: left;margin: 0 20px;">
					<a href="#" style="color: #FFFFFF;text-decoration: none;"><br>
						<b>
							<center>Mua Trả Góp</center>
						</b><br>
						<span style="font-size: 13px;">Các Bước Đơn Giản</span>
					</a>
				</div>
			</center>
			<center>
				<div style="width: 160px;height: 50px;background: #FF33FF;border-radius: 8px;line-height: 10px;float: left;">
					<a href="#" style="color: #FFFFFF;text-decoration: none;"><br>
						<b>
							<center>Trả Qua Thẻ</center>
						</b><br>
					<span style="font-size: 13px;">Visa, Master, JCB</span>
					</a>
				</div>
			</center>
			</div>
		</div>
	<?php
}
?>
<?php
include './connect/connect.php';
$id = $_GET['id'];
$sql = "select * from chitiet_dienthoai where id=".$id."";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
	?>		
		<div style="width: 100%; height: 670px; background: #FFFFFF;">			
			<center>
				<div style="width: 50%; height: 670px; float: left;background: #FFFFFF;">
					<div>
						<img src="<?php echo $row['hinhanh']?>" width="90%" height="400">
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
			<b style="color: #FF0000">Bảo hành:</b>
				<?php echo $row['baohanh'];?><br><br>
			<span style="color:#FF0000">
				<b>Khuyến mãi:</b>
			</span> Dây sạc, kính cường lực, ốp lưng, tai phone xịn<br></br>
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
							<center>MUA TRẢ GÓP </center>
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
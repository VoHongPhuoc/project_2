<?php
	include './connect/connect.php';
	$sql = "select * from khuyenmai";
	$ketqua = mysqli_query($con,$sql);
	if(mysqli_num_rows($ketqua) > 0){
		while($rows = mysqli_fetch_array($ketqua)){
?>
	<div style="width: 100%;height: 155px;background-color: white;">
		<div style="width: 100%;height: 1px;background-color: #8e8e8d;"></div><br>
		<div style="float: left;width: 20%;height: 100px">
			<img style="width: 200px;height: 120px;" src="<?php echo $rows["hinhanh"]; ?>">
		</div>
		<div style="float: left;width: 80%;height: 100px">
			<a style="text-decoration: none;" href=""><?php echo $rows["ten"]; ?></a><br><br>
			<?php echo $rows["mota"]; ?><br><br>
		</div>
	</div>
<?php 
	}
}else{
	echo "không có dữ liệu";
}
mysqli_close($con);

?>
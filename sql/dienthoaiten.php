<?php
	include './connect/connect.php';
	$sql = "select * from dienthoai";
	$ketqua = mysqli_query($con,$sql);
	if(mysqli_num_rows($ketqua) > 0){
		while($rows = mysqli_fetch_array($ketqua)){
?>
	<a href="dienthoai.php?tt=hangsx&id=<?php echo $rows['id']; ?>">❤❤<?php echo $rows["tenloai"]; ?></a><br>
<?php 
	}
}else{
	echo "không có dữ liệu";
}
mysqli_close($con);

?>
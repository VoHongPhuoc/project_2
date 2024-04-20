<?php
	include './connect/connect.php';
	$sql = "select * from laptop";
	$ketqua = mysqli_query($con,$sql);
	if(mysqli_num_rows($ketqua) > 0){
		while($rows = mysqli_fetch_array($ketqua)){
?>
	<a href="laptop.php?action=hangsx&id=<?php echo $rows['id']; ?>">❤❤<?php echo $rows["tenloai"]; ?></a><br>
<?php 
	}
}else{
	echo "không có dữ liệu";
}
mysqli_close($con);


?>
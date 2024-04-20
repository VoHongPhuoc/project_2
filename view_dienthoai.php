<?php
		$conn = mysqli_connect('localhost', 'root', '', 'baocaothi');
		$id_hang = $_GET['id'];
		$result = mysqli_query($conn, "select count(id) as total from chitiet_dienthoai where id_loai=$id_hang");
		$row = mysqli_fetch_assoc($result);
		$total_records = $row['total'];
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 10;
		$total_page = ceil($total_records / $limit);
		if ($current_page > $total_page){
			$current_page = $total_page;
		}
		else if ($current_page < 1){
			$current_page = 1;
		}
		$start = ($current_page - 1) * $limit;
		$result = mysqli_query($conn, "SELECT * FROM chitiet_dienthoai where id_loai=$id_hang LIMIT $start, $limit");
?>
<?php
	include './connect/connect.php';
	$ketqua = mysqli_query($con, "select * from chitiet_dienthoai where id_loai=$id_hang");
	if(mysqli_num_rows($ketqua) > 0){
		while($rows = mysqli_fetch_array($result)){
?>
	<div style="width: 210px;height: 278px;margin: 0 20px;margin-left: 0px;float: left;"><center>
		<ul>
			<li>
			<a style="margin-left: 10px" href="dienthoai.php?tt=chitiet&id=<?php echo $rows['id'];?>">	
			<img src="<?php echo $rows['hinhanh'];?>" width="250" height="200"><br>
			<span style="color: #3A01DF"><?php echo $rows['tenloai'];?></span><br></a>
			Giá: <span style="color: red;"><b><?php echo $rows['gia'];?> Đ</b></span><br>
			Số lượng: <input type="number" name="" style="border: 1px solid;background: white;width: 35px;height: 20px;border-radius: 5px;margin-top: 5px;"><br>
			<input type="submit" name="" value="Mua" style="background: #A4A4A4;width: 60px;height: 23px;border-radius: 5px;border: solid 1px black;margin-top: 6px;">
			<input type="submit" name="" value="Chi Tiết" style="background: #A4A4A4;width: 60px;height: 23px;border-radius: 5px;border: solid 1px black;">
			</li>
		</ul>
		</center>
	</div>
<?php 
	}
}else{
	echo "không có dữ liệu";
}
mysqli_close($con);
?>
<div style=" clear:both; text-align:center;">
<?php
            if ($current_page > 1 && $total_page > 1){
            echo '<a href="dienthoai.php?tt=hangsx&id='.$id_hang.'&page='.($current_page-1).'">Prev</a> | ';
            }
            for ($i = 1; $i <= $total_page; $i++){
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="dienthoai.php?tt=hangsx&id='.$id_hang.'&page='.$i.'">'.$i.'</a> | ';
            }
            }
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="dienthoai.php?tt=hangsx&id='.$id_hang.'&page='.($current_page+1).'">Next</a> | ';
            }
        ?>
</div>
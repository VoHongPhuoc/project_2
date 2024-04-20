<?php
require("./connect/connect.php");
$id = $_GET['id'];
$sql_1 = "select * from chitiet_dienthoai where id = '$id'";
$row_1 = mysqli_query($con, $sql_1);
$count = mysqli_num_rows($row_1);
if ($count > 0) {
    $nhapsp = mysqli_fetch_array($row_1);
}
?>
<center><h1><font color="red">SỬA SẢN PHẨM</font></h1></center>
			<form action="" method="POST" enctype="multipart/form-data" style="margin-left: 33%;">

				<table style="float: left;margin-left: 10px;">
					<tr>
						<td><input type="hidden" name="txt_id" value="<?php echo $nhapsp['id']; ?>" /></td>
					</tr>
					<tr>
						<td>Tên sản phẩm</td>
						<td><input type="text" name="txt_tensp" value="<?php echo $nhapsp['tenloai']; ?>"/></td>
					</tr>
					<tr>
						<td>Hình ảnh</td>
						<td><input type="file" name="txt_hinhanh"/></td>
					</tr>
					<tr>
						<td>Giá</td>
						<td><input type="text" name="txt_gia" value="<?php echo $nhapsp['gia']; ?>"/></td>
					</tr>
					<tr>
						<td>Mô tả</td>
						<td><textarea name="txt_mota" style="width: 240px;height: 70px;"><?php echo $nhapsp['mota']; ?></textarea></td>
					</tr>
					
					<tr>
						<td>Bảo hành</td>
						<td><input type="text" name="txt_baohanh" value="<?php echo $nhapsp['baohanh']; ?>"/></td>
					</tr>
					<tr>
						<td>Loại</td>
						<td><input type="text" name="txt_loai" value="<?php echo $nhapsp['id_loai']; ?>"/></td>
					</tr>
					<tr>
						<td>Ẩn hiện</td>
						<td><input type="text" name="txt_anhien" value="<?php echo $nhapsp['anhien']; ?>"/></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="btn_SuaSP" value="Sửa sản phẩm"></center></td>
					</tr>
					<?php require('xulydienthoai.php'); ?>
				</table>
			</form>
<?php
require("./connect/connect.php");
$id = $_GET['id'];
$sql_1 = "select * from khuyenmai where id = '$id'";
$row_1 = mysqli_query($con, $sql_1);
$count = mysqli_num_rows($row_1);
if ($count > 0) {
    $nhapsp = mysqli_fetch_array($row_1);
}
?>
<center><h1><font color="red">SỬA THÔNG TIN KHUYẾN MÃI</font></h1></center>
			<form action="" method="POST" enctype="multipart/form-data" style="margin-left: 33%;">

				<table style="float: left;margin-left: 10px;">
					<tr>
						<td><input type="hidden" name="txt_matt" value="<?php echo $nhapsp['id']; ?>" /></td>
					</tr>
					<tr>
						<td>Tên thông tin</td>
						<td><input type="text" name="txt_tentt" value="<?php echo $nhapsp['ten']; ?>"/></td>
					</tr>
					<tr>
						<td>Hình ảnh</td>
						<td><input type="file" name="txt_hinhanh"/></td>
					</tr>
					<tr>
						<td>Mô tả</td>
						<td><textarea name="txt_mota" style="width: 168px;height: 70px;"><?php echo $nhapsp['mota']; ?></textarea></td>
					</tr>
					<tr>
						<td>Ẩn hiện</td>
						<td><input type="text" name="txt_anhien"  value="<?php echo $nhapsp['anhien']; ?>"/></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="btn_Suattkm" value="Sửa thông tin"></center></td>
					</tr>
					<?php require('xulykhuyenmai.php'); ?>
				</table>
			</form>
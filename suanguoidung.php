<?php
require("./connect/connect.php");
$id = $_GET['id'];
$sql_1 = "select * from dangnhap where id = '$id'";
$row_1 = mysqli_query($con, $sql_1);
$count = mysqli_num_rows($row_1);
if ($count > 0) {
    $nhapsp = mysqli_fetch_array($row_1);
}
?>
<center><h1><font color="red">SỬA TÀI KHOẢN</font></h1></center>
			<form action="" method="POST" enctype="multipart/form-data" style="margin-left: 33%;">

				<table style="float: left;margin-left: 10px;">
					<tr>
						<td><input type="hidden" name="txt_id" value="<?php echo $nhapsp['id']; ?>" /></td>
					</tr>
					<tr>
						<td>Tên tài khoản</td>
						<td><input type="text" name="txt_name" value="<?php echo $nhapsp['name']; ?>"/></td>
					</tr>
					<tr>
						<td>Mật khẩu</td>
						<td><input type="text" name="txt_password" value="<?php echo $nhapsp['password']; ?>" /></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="btn_Suand" value="Sửa tài khoản"></center></td>
					</tr>
					<?php require('xulynguoidung.php'); ?>
				</table>
			</form>
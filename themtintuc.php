<center><h1><font color="red">THÊM TIN TỨC</font></h1></center>
			<?php
				$conn = mysqli_connect('localhost','root','','baocaothi');
				mysqli_set_charset($conn, 'utf8');
				$sql_tangma = "SELECT * FROM tintuc WHERE id in (SELECT max(id) FROM tintuc)";
			    $result_tangma = mysqli_query($conn, $sql_tangma);
			    $fetch_array = mysqli_fetch_array($result_tangma);
			    $ma = 1;
			    $tangma = $fetch_array['id'];
			    $catString = $tangma + $ma;
			    $hienthi = "$catString";
			?>
			<form action="" method="POST" enctype="multipart/form-data" style="margin-left: 33%;">
				<table style="float: left;margin-left: 10px;">
					<tr>
						<td>Mã thông tin</td>
						<td><input type="text" name="txt_matt" value="<?php echo $hienthi;?>" readonly/></td>
					</tr>
					<tr>
						<td>Tên thông tin</td>
						<td><input type="text" name="txt_tentt"/></td>
					</tr>
					<tr>
						<td>Hình ảnh</td>
						<td><input type="file" name="txt_hinhanh"/></td>
					</tr>
					<tr>
						<td>Mô tả</td>
						<td><textarea name="txt_mota" style="width: 168px;height: 70px;"></textarea></td>
					</tr>
					<tr>
						<td>Ngày đăng tin</td>
						<td><input type="text" name="txt_ngaygio"></text></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="btn_nhap" value="Thêm tin tức"></center><td>
					</tr>
				<?php require('xulytintuc.php'); ?>
				</table>				
			</form>
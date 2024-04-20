<center><h1><font color="red">THÊM SẢN PHẨM</font></h1></center>
			<?php
				$conn = mysqli_connect('localhost','root','','baocaothi');
				mysqli_set_charset($conn, 'utf8');
				$sql_tangma = "SELECT * FROM chitiet_dienthoai WHERE id in (SELECT max(id) FROM chitiet_dienthoai)";
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
						<td>Mã sản phẩm</td>
						<td><input type="text" name="txt_matt" value="<?php echo $hienthi;?>" readonly/></td>
					</tr>
					<tr>
						<td>Tên sản phẩm</td>
						<td><input type="text" name="txt_tensp"/></td>
					</tr>
					<tr>
						<td>Hình ảnh</td>
						<td><input type="file" name="txt_hinhanh"/></td>
					</tr>
					<tr>
						<td>Giá</td>
						<td><input type="text" name="txt_gia"/></td>
					</tr>
					<tr>
						<td>Mô tả</td>
						<td><textarea name="txt_mota" style="width: 168px;height: 90px;"></textarea></td>
					</tr>
					<tr>
						<td>Bảo hành</td>
						<td><input type="text" name="txt_baohanh"/></td>
					</tr>
					<tr>
						<td>Loại</td>
						<td><input type="text" name="txt_loai"/></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="btn_nhap" value="Thêm sản phẩm"></center><td>
					</tr>
				<?php require('xulydienthoai.php'); ?>
				</table>				
			</form>
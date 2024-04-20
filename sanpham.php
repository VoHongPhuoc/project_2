<center><h1><font color="red">THÊM SẢN PHẨM</font></h1></center>
			<?php
				$conn = mysqli_connect('localhost','root','','baocaothi');
				mysqli_set_charset($conn, 'utf8');
				$sql_tangma = "SELECT * FROM chitiet1_laptop WHERE id in (SELECT max(id) FROM chitiet1_laptop)";
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
						<td>Ảnh 1</td>
						<td><input type="file" name="txt_anh1"/></td>
					</tr>
					<tr>
						<td>Ảnh 2</td>
						<td><input type="file" name="txt_anh2"/></td>
					</tr>
					<tr>
						<td>Ảnh 3</td>
						<td><input type="file" name="txt_anh3"/></td>
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
						<td>CPU</td>
						<td><input type="text" name="txt_cpu"/></td>
					</tr>
					<tr>
						<td>RAM</td>
						<td><input type="text" name="txt_ram"/></td>
					</tr>
					<tr>
						<td>Ổ cứng</td>
						<td><input type="text" name="txt_ocung"/></td>
					</tr>
					<tr>
						<td>Card đồ họa</td>
						<td><input type="text" name="txt_carddohoa"/></td>
					</tr>
					<tr>
						<td>Màn hình</td>
						<td><input type="text" name="txt_manhinh"/></td>
					</tr>
					<tr>
						<td>Pin</td>
						<td><input type="text" name="txt_pin"/></td>
					</tr>
					<tr>
						<td>Trọng lượng</td>
						<td><input type="text" name="txt_trongluong"/></td>
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
				<?php require('xulysanpham.php'); ?>
				</table>				
			</form>
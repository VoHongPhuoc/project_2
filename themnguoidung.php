<center><h1><font color="red">THÊM TÀI KHOẢN</font></h1></center>
			<?php
				$conn = mysqli_connect('localhost','root','','baocaothi');
				mysqli_set_charset($conn, 'utf8');
				$sql_tangma = "SELECT * FROM dangnhap WHERE id in (SELECT max(id) FROM dangnhap)";
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
						<td>Mã tài khoản</td>
						<td><input type="text" name="txt_matt"  value="<?php echo $hienthi;?>" readonly/></td>
					</tr>
					<tr>
						<td>Tên tài khoản</td>
						<td><input type="text" name="txt_name"/></td>
					</tr>
					<tr>
						<td>Mật khẩu</td>
						<td><input type="text" name="txt_password"/></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="btn_nhap" value="Thêm tài khoản"></center><td>
					</tr>
				<?php require('xulynguoidung.php'); ?>
				</table>				
			</form>
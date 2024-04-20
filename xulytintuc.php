<?php

	$conn = mysqli_connect('localhost','root','','baibaocao');
	mysqli_set_charset($conn, 'utf8');
	if (isset($_POST['btn_nhap'])) {
		$id = $_POST['txt_matt'];
		$tentt = $_POST['txt_tentt'];

		$hinhanh = $_FILES['txt_hinhanh']['name'];
		if ($hinhanh != '') {
			$duongdan = './img/'.$hinhanh;
			move_uploaded_file($hinhanh, $duongdan);
			$duongdan = substr($duongdan, 0);
		}
		$mota = $_POST['txt_mota'];
		$ngaygio = $_POST['txt_ngaygio'];
		
		$sql = "insert into tintuc (id, hinhanh, ten, mota, ngaygio, anhien) 
		values ($id, '$duongdan', '$tentt', '$mota', '$ngaygio', '1' )";
		if (mysqli_query($conn, $sql)) {
			echo "Nhập thành công";
		}else {
			echo "Không thành công";
		}
	}

	//code xóa sản phẩm
    
	if(isset($_GET["action"]))  
    {  
     if($_GET["action"] == "delete")  
     {
         $id_item = $_GET["id"];
         $sql = "DELETE from tintuc where id=".$id_item."";
         $ketqua = mysqli_query($con,$sql);
         if($ketqua > 0){  
                 echo '<script>window.location="trangchuadmin.php?nc=tt"</script>';
         }
     }  
    }

    // code sửa sp
    if(isset($_POST['btn_Suatt']))
   {
        $tem_id = $_POST["txt_matt"];
		$tentt = $_POST['txt_tentt'];

		$hinhanh = $_FILES['txt_hinhanh']['name'];
		if ($hinhanh != '') {
			$duongdan = './img/'.$hinhanh;
			move_uploaded_file($hinhanh, $duongdan);
			$duongdan = substr($duongdan, 0);
		}
		$mota = $_POST['txt_mota'];
		$ngaygio = $_POST['txt_ngaygio'];
		$anhien = $_POST['txt_anhien'];

       $sql_suasp = "UPDATE tintuc SET hinhanh = '$duongdan', ten = '$tentt', mota = '$mota', ngaygio = '$ngaygio',
       anhien = '$anhien' where id=".$tem_id."";
       $row = mysqli_query($con,$sql_suasp);
       if($row>0){
        echo "
        <script language='javascript'>
                alert('Cập nhật thành công');
                window.open('trangchuadmin.php?nc=tt','_self',3);
        </script>";
           
       } else
       {
        echo "
        <script language='javascript'>
                alert('Vui lòng nhập đầy đủ thông tin!');
        </script>";
       }
   }
?>
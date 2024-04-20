<?php

	$conn = mysqli_connect('localhost','root','','baocaothi');
	mysqli_set_charset($conn, 'utf8');
	if (isset($_POST['btn_nhap'])) {
		$id = $_POST['txt_matt'];
		$tensp = $_POST['txt_tensp'];

		$hinhanh = $_FILES['txt_hinhanh']['name'];
		if ($hinhanh != '') {
			$duongdan = './img/'.$hinhanh;
			move_uploaded_file($hinhanh, $duongdan);
			$duongdan = substr($duongdan, 0);
		}

		$gia = $_POST['txt_gia'];
		$mota = $_POST['txt_mota'];
		$baohanh = $_POST['txt_baohanh'];
		$loai = $_POST['txt_loai'];
		
		$sql = "insert into chitiet_dienthoai (id, hinhanh, tenloai, gia, mota, baohanh, id_loai, anhien) 
		values ($id, '$duongdan', '$tensp', '$gia', '$mota', '$baohanh', '$loai','1' )";
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
         $sql = "DELETE from chitiet_dienthoai where id=".$id_item."";
         $ketqua = mysqli_query($con,$sql);
         if($ketqua > 0){  
                 echo '<script>window.location="trangchuadmin.php?nc=dt"</script>';
         }
     }  
    }

    // code sửa sp
    if(isset($_POST['btn_SuaSP']))
   {
        $tem_id = $_POST["txt_id"];
		$tensp = $_POST['txt_tensp'];

		$hinhanh = $_FILES['txt_hinhanh']['name'];
		if ($hinhanh != '') {
			$duongdan = './img/'.$hinhanh;
			move_uploaded_file($hinhanh, $duongdan);
			$duongdan = substr($duongdan, 0);
		}

		$gia = $_POST['txt_gia'];
		$mota = $_POST['txt_mota'];
		$baohanh = $_POST['txt_baohanh'];
		$loai = $_POST['txt_loai'];
		$anhien = $_POST['txt_anhien'];

       $sql_suasp = "UPDATE chitiet_dienthoai SET hinhanh = '$duongdan', baohanh = '$baohanh', id_loai = '$loai' , 
       anhien = '$anhien' where id=".$tem_id."";
       $row = mysqli_query($con,$sql_suasp);
       if($row>0){
        echo "
        <script language='javascript'>
                alert('Cập nhật thành công');
                window.open('trangchuadmin.php?nc=sp','_self',3);
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
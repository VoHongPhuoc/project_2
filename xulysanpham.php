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

		$hinhanh1 = $_FILES['txt_anh1']['name'];
		if ($hinhanh1 != '') {
			$anh1 = './img/'.$hinhanh1;
			move_uploaded_file($hinhanh1, $anh1);
			$anh1 = substr($anh1, 0);
		}

		$hinhanh2 = $_FILES['txt_anh2']['name'];
		if ($hinhanh2 != '') {
			$anh2 = './img/'.$hinhanh2;
			move_uploaded_file($hinhanh2, $anh2);
			$anh2 = substr($anh2, 0);
		}

		$hinhanh3 = $_FILES['txt_anh3']['name'];
		if ($hinhanh3 != '') {
			$anh3 = './img/'.$hinhanh3;
			move_uploaded_file($hinhanh3, $anh3);
			$anh3 = substr($anh3, 0);
		}

		$gia = $_POST['txt_gia'];
		$mota = $_POST['txt_mota'];
		$cpu = $_POST['txt_cpu'];
		$ram = $_POST['txt_ram'];
		$ocung = $_POST['txt_ocung'];
		$carddohoa = $_POST['txt_carddohoa'];
		$manhinh = $_POST['txt_manhinh'];
		$pin = $_POST['txt_pin'];
		$trongluong = $_POST['txt_trongluong'];
		$baohanh = $_POST['txt_baohanh'];
		$loai = $_POST['txt_loai'];
		
		$sql = "insert into chitiet1_laptop (id, hinhanh, anh1, anh2, anh3, tenloai, gia, mota, cpu, ram, ocung, carddohoa, manhinh, pin, trongluong, baohanh, id_loai, anhien) 
		values ($id, '$duongdan', '$anh1', '$anh2', '$anh3', '$tensp', '$gia', '$mota', '$cpu', '$ram', '$ocung', '$carddohoa', '$manhinh', '$pin', '$trongluong', '$baohanh', '$loai','1' )";
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
         $sql = "DELETE from chitiet1_laptop where id=".$id_item."";
         $ketqua = mysqli_query($con,$sql);
         if($ketqua > 0){  
                 echo '<script>window.location="trangchuadmin.php?nc=sp"</script>';
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

		$hinhanh1 = $_FILES['txt_anh1']['name'];
		if ($hinhanh1 != '') {
			$anh1 = './img/'.$hinhanh1;
			move_uploaded_file($hinhanh1, $anh1);
			$anh1 = substr($anh1, 0);
		}

		$hinhanh2 = $_FILES['txt_anh2']['name'];
		if ($hinhanh2 != '') {
			$anh2 = './img/'.$hinhanh2;
			move_uploaded_file($hinhanh2, $anh2);
			$anh2 = substr($anh2, 0);
		}

		$hinhanh3 = $_FILES['txt_anh3']['name'];
		if ($hinhanh3 != '') {
			$anh3 = './img/'.$hinhanh3;
			move_uploaded_file($hinhanh3, $anh3);
			$anh3 = substr($anh3, 0);
		}

		$gia = $_POST['txt_gia'];
		$mota = $_POST['txt_mota'];
		$cpu = $_POST['txt_cpu'];
		$ram = $_POST['txt_ram'];
		$ocung = $_POST['txt_ocung'];
		$carddohoa = $_POST['txt_carddohoa'];
		$manhinh = $_POST['txt_manhinh'];
		$pin = $_POST['txt_pin'];
		$trongluong = $_POST['txt_trongluong'];
		$baohanh = $_POST['txt_baohanh'];
		$loai = $_POST['txt_loai'];
		$anhien = $_POST['txt_anhien'];

       $sql_suasp = "UPDATE chitiet1_laptop SET hinhanh = '$duongdan', anh1 = '$anh1', anh2 = '$anh2', anh3 = '$anh3', tenloai = '$tensp', gia = '$gia', mota = '$mota', cpu = '$cpu', 
       ram = '$ram', ocung = '$ocung', carddohoa = '$carddohoa', manhinh = '$manhinh', pin = '$pin', 
       trongluong = '$trongluong', baohanh = '$baohanh', id_loai = '$loai' , 
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
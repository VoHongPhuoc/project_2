<?php

	$conn = mysqli_connect('localhost','root','','baocaothi');
	mysqli_set_charset($conn, 'utf8');
	if (isset($_POST['btn_nhap'])) {
		$id = $_POST['txt_matt'];
		$name = $_POST['txt_name'];
		$password = $_POST['txt_password'];
		
		$sql = "insert into inf (id, name, password) 
		values ($id, '$name','$password' )";
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
         $sql = "DELETE from dangnhap where id=".$id_item."";
         $ketqua = mysqli_query($con,$sql);
         if($ketqua > 0){  
                 echo '<script>window.location="trangchuadmin.php?nc=nd"</script>';
         }
     }  
    }

    // code sửa sp
    if(isset($_POST['btn_Suand']))
   {
        $tem_id = $_POST["txt_id"];
		$name = $_POST['txt_name'];
		$password = $_POST['txt_password'];

       $sql_suatk = "UPDATE inf SET name = '$name', password = '$password' where id=".$tem_id."";
       $row = mysqli_query($con,$sql_suatk);
       if($row>0){
        echo "
        <script language='javascript'>
                alert('Cập nhật thành công');
                window.open('trangchuadmin.php?nc=nd','_self',3);
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
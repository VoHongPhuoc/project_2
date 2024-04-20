<div>
	<center><br><b style="color: #FF9900; font-size: 20px;">DANH SÁCH MỘT SỐ TÀI KHOẢN NGƯỜI DÙNG</b></center>
</div>
<div style="float: right;margin-right: 110px;">
	<a href="trangchuadmin.php?nc=themnd">
        <button >Thêm tài khoản</button>
    </a>
</div><br><br>
<div>
    <table cellspacing="0" border="1px">
        <thead>
            <tr style="color: red; background-color: #FF99FF">
                <th style="width: 50px;">STT</th>
                <th style="width: 250px;">Tên tài khoản</th>
                <th style="width: 250px;">Mật khẩu</th>
                <th style="width: 250px;">Sửa</th>
                <th style="width: 250px;">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $con = mysqli_connect('localhost', 'root', '', 'baocaothi');
        mysqli_set_charset($con, 'utf8');
        $sql_table = "SELECT * FROM dangnhap order by id DESC limit 8";
        $kq = mysqli_query($con, $sql_table);
        $i = 1;
        while ($row = mysqli_fetch_assoc($kq)) {
            ?>
            <tr>
                <td><center><?php echo $i; ?></center></td>
                <td><center><?php echo $row['name']; ?></center></td>
                <td><CENTER><?php echo $row['password']; ?></CENTER></td>
                <td style="vertical-align: middle; text-align: center;">
                    <a href="trangchuadmin.php?nc=suand&id=<?php echo $row['id']; ?>">
                        <button class="btn btn-success">Sửa</button>
                    </a>
                </td>
                <td style="vertical-align: middle; text-align: center;">
                    <a onclick="return confirm('Bạn có chắc là muốn xóa tài khoản này không?');" href="trangchuadmin.php?nc=nd&action=delete&id=<?php echo $row['id']; ?>">
                        <button class="btn btn-danger">Xóa</button>
                    </a>
                </td>
                <?php require('xulynguoidung.php'); ?>         
            </tr>
        <?php
            $i++;
        }
        ?>
        </tbody>
    </table>
    </div>

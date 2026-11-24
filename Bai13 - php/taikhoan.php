<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
    <style>
        table{
            width:100%;
        }
        tr,th,td{
            border: 1px solid black;
        }
        .btn-add{
            background-color: green;
            padding 10px;
        }
        .capnhat{
            padding: 2px;
            background-color:pink;
            border-radius:6px;
            color:black;
        }
        .xoa{
            padding: 2px;
            background-color: #87a4e2;
            border-radius:6px;
            color:black;
        }
    </style>
</head>
<body>
    <h1> Tài khoản </h1>
    <a class="btn-add" href = "index.php?page_layout=themtaikhoan">Thêm tài khoản</a>
    <?php
   $sql = "select * from nguoi_dung";
   $result = mysqli_query($conn,$sql);
   ?>
   <table>
    <tr>
        <th>ID</th>
        <th>Tên đăng nhập</th>
        <th>email</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Số điện thoại</th>
        <th>Giới tính</th>
        <th>Chức năng</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_dang_nhap']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['ngay_sinh']?></td>
        <td><?php echo $row['so_dien_thoai']?></td>
        <td><?php echo $row['gioi_tinh']==true?"Nam":"Nữ" ?></td>
        <td>
            <a href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>" class="capnhat">Cập nhật</a>
            <a href="index.php?page_layout=xoataikhoan&id=<?php echo $row['id']?>" class="xoa">Xóa</a>

        </td>
    </tr>
<?php
}
?>
   </table>
</body>
</html>
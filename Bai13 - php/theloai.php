<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại</title>
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
    <h1> Thể loại </h1>
    <a class="btn-add" href = "index.php?page_layout=themtheloai">Thêm thể loại</a>
    <?php
   $sql = "select * from the_loai";
   $result = mysqli_query($conn,$sql);
   ?>
   <table>
    <tr>
        <th>ID</th>
        <th>Tên thể loại</th>
        <th>Chức năng</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_the_loai']?></td>
        <td>
            <a href="index.php?page_layout=capnhattheloai&id=<?php echo $row['id']?>" class="capnhat">Cập nhật</a>
            <a href="index.php?page_layout=xoatheloai&id=<?php echo $row['id']?>" class="xoa">Xóa</a>

        </td>
    </tr>
<?php
}
?>
   </table>
</body>
</html>
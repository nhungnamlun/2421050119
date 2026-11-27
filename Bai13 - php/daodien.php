<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đạo diễn</title>
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
    <a style="color: black;" href="index.php?page_layout=themdaodien">Thêm đạo diễn</a>
    <?php
    include 'connect.php';

    $sql = "SELECT * FROM dao_dien";
    $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['ho_ten'] ?></td>
                <td><?php echo $row['ngay_sinh'] ?></td>
                <td>
                    <a href="index.php?page_layout=capnhatdaodien&id=<?php echo $row['id'] ?>" class="capnhat">Cập nhật</a>
                    <a href="xoadaodien.php?id=<?php echo $row['id'] ?>" class="xoa">Xoá</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
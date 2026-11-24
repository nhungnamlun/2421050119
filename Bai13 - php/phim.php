<?php
// 1. Bổ sung câu lệnh lấy toàn bộ dữ liệu từ bảng phim
$sql = "SELECT * FROM `phim`";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim</title>
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
    <h1>Phim</h1>
    <a href="index.php?page_layout=themphim" class="btn-add">Thêm phim</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên phim</th>
            <th>Quốc gia</th>
            <th>ID đạo diễn</th>
            <th>Năm</th>
            <th>Độ tuổi</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ten_phim']; ?></td>
                <td><?php echo $row['quoc_gia']; ?></td>
                <td><?php echo $row['dao_dien_id']; ?></td>
                <td><?php echo $row['nam']; ?></td>
                <td><?php echo $row['do_tuoi']; ?></td>
                <td><?php echo $row['mo_ta']; ?></td>
                <td>
                    <a href="index.php?page_layout=capnhatphim&id=<?php echo $row['id']; ?>" class="capnhat">Cập nhật</a>
                    <a href="index.php?page_layout=xoaphim&id=<?php echo $row['id']; ?>" class="xoa">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
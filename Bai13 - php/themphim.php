<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phim</title>
    <style>
        .khoi {
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input {
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button {
            padding: 5px 0;
            width: 100%;
        }
        form {
            padding: 10px;
        }
        h1 {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Thêm phim</h1>
    <form class="khoi" action="index.php?page_layout=themphim" method="POST">
        <div class="i-text">
            <input type="text" name="tenphim" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocgia" placeholder="Quốc gia">
        </div>
        <div class="i-text">
            <input type="number" name="daodienid" placeholder="ID Đạo diễn">
        </div>
        <div class="i-text">
            <input type="number" name="nam" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="number" name="dotuoi" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="mota" placeholder="Mô tả">
        </div>
        <button>Thêm</button>
    </form>

    <?php
    if (
        isset($_POST['tenphim']) && 
        isset($_POST['quocgia']) && 
        isset($_POST['daodienid']) && 
        isset($_POST['nam']) &&
        isset($_POST['dotuoi']) &&
        isset($_POST['mota'])
    ) {
        $tenphim   = $_POST['tenphim'];
        $quocgia   = $_POST['quocgia'];
        $daodienid = $_POST['daodienid'];
        $nam       = $_POST['nam'];
        $dotuoi    = $_POST['dotuoi'];
        $mota      = $_POST['mota'];

        if (
            !empty($tenphim) && 
            !empty($quocgia) && 
            !empty($daodienid) && 
            !empty($nam) &&
            $dotuoi !== '' &&
            !empty($mota)
        ) {
            $sql = "INSERT INTO `phim` (`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) 
                    VALUES ('$tenphim', '$quocgia', '$daodienid', '$nam', '$dotuoi', '$mota')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>window.location.href = 'index.php?page_layout=phim';</script>";
                exit();
            } else {
                echo "Thêm phim thất bại!";
            }
        } else {
            echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }
    ?>
</body>
</html>
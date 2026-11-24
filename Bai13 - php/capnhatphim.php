<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật phim</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $sql = "select * from phim where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $phim = mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật</h1>
    <form class="khoi" action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="POST">
        <div class="i-text">
            <input type="text" name="tenphim" value = "<?php echo $phim['ten_phim']?>" id="" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocgia" value = "<?php echo $phim['quoc_gia']?>" id="" placeholder="Quốc gia">
        </div>
        <div class="i-text">
            <input type="text" name="daodienid" value = "<?php echo $phim['dao_dien_id']?>" id="" placeholder="Đạo diẽn">
        </div>
        <div class="i-text">
            <input type="number" name="nam" value = "<?php echo $phim['nam']?>" id="" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="text" name="dotuoi" value = "<?php echo $phim['do_tuoi']?>" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="mota" value = "<?php echo $phim['mo_ta']?>" id="" placeholder="Mô tả">
        </div>
        <button>Update</button>
    </form>

    <?php
        if(isset($_POST['tenphim']) && 
           isset($_POST['quocgia']) && 
           isset($_POST['daodienid']) && 
           isset($_POST['nam']) &&
           isset($_POST['dotuoi']) &&
           isset($_POST['mota']))
        {
            $tenphim = $_POST['tenphim'];
            $quocgia = $_POST['quocgia'];
            $daodienid = $_POST['daodienid'];
            $nam = $_POST['nam'];
            $dotuoi = $_POST['dotuoi'];
            $mota = $_POST['mota'];
            if(!empty($tenphim) && 
                !empty($quocgia) && 
                !empty($daodienid) && 
                !empty($nam) &&
                $dotuoi !== '' &&
                !empty($mota) ){
                //người dùng nhập đủ thông tin
                $sql = "UPDATE `phim` 
                SET `ten_phim`='$tenphim',`quoc_gia`='$quocgia',`dao_dien_id`='$daodienid',`nam`='$nam',`do_tuoi`='$dotuoi',`mo_ta`='$mota'
                WHERE id = '$id'";

                $result = mysqli_query($conn,$sql);

                if($result){
                echo "<script>window.location.href = 'index.php?page_layout=phim';</script>";
                exit();
                }else{
                    echo"Thêm phim thất bại!";
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
        
    ?>
</body>
</html>
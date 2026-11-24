<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
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
    $sql = "select * from nguoi_dung where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $nguoi_dung = mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật tài khoản</h1>
    <form class="khoi" action="index.php?page_layout=capnhattaikhoan&id=<?php echo $id ?>" method="POST">
        <div class="i-text">
            <input type="text" name="tenDangNhap" value = "<?php echo $nguoi_dung['ten_dang_nhap']?>" id="" placeholder="Tên đăng nhập">
        </div>
        <div class="i-text">
            <input type="password" name="matKhau" value = "<?php echo $nguoi_dung['mat_khau']?>" id="" placeholder="Mật khẩu">
        </div>
        <div class="i-text">
            <input type="email" name="email" value = "<?php echo $nguoi_dung['email']?>" id="" placeholder="Email">
        </div>
        <div class="i-text">
            <input type="text" name="hoten" value = "<?php echo $nguoi_dung['ho_ten']?>" id="" placeholder="Họ và tên">
        </div>
        <div class="i-text">
            <input type="date" name="ngaysinh" value = "<?php echo $nguoi_dung['ngay_sinh']?>" id="" placeholder="Ngày sinh">
        </div>
        <div class="i-text">
            <input type="text" name="sdt" value = "<?php echo $nguoi_dung['so_dien_thoai']?>" id="" placeholder="Số điện thoại">
        </div>
        <div class="">
            <input type="radio" name="gioitinh" value = "<?php echo $nguoi_dung['gioi_tinh']?>" id="" value="1" checked> Nam
            <input type="radio" name="gioitinh" value = "<?php echo $nguoi_dung['gioi_tinh']?>" id="" value="0"> Nữ
        </div>
        <button>Thêm</button>
    </form>

    <?php
        if(isset($_POST['tenDangNhap']) && 
           isset($_POST['matKhau']) && 
           isset($_POST['email']) && 
           isset($_POST['hoten']) &&
           isset($_POST['ngaysinh']) &&
           isset($_POST['sdt']) &&
           isset($_POST['gioitinh']))
        {
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            $email = $_POST['email'];
            $hoten = $_POST['hoten'];
            $ngaysinh = $_POST['ngaysinh'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            if(!empty($tenDangNhap) && 
                !empty($matKhau) && 
                !empty($email) && 
                !empty($hoten) &&
                !empty($ngaysinh) &&
                !empty($sdt) ){
                //người dùng nhập đủ thông tin
                $sql = "UPDATE `nguoi_dung` 
                SET `ten_dang_nhap`='$tenDangNhap',`mat_khau`='$matKhau',`email`='$email',`ho_ten`='$hoten',`ngay_sinh`='$ngaysinh',`so_dien_thoai`='$sdt',`gioi_tinh`='$gioitinh'
                WHERE id = '$id'";

                $result = mysqli_query($conn,$sql);

                if($result){
                echo "<script>window.location.href = 'index.php?page_layout=taikhoan';</script>";
                exit();
                }else{
                    echo"Thêm người dùng thất bại!";
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
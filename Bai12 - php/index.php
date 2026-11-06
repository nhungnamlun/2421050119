<h1>Đây là file</h1>
<?php
// Nội dung php ở vị trí này
echo "Hello world! <br>";

// Biến: $Tên biến = giá trị
$hoTen = "Nguyen Nhung";
$tuoi = 20;

// để nối chuỗi trong php dùng dấu .
echo $hoTen . " " . $tuoi . "<br>";

// độ dài chuỗi
echo strlen($hoTen) . "<br>";

// đếm số từ trong chuỗi
echo str_word_count($hoTen) . "<br>";

// tìm kiếm kí tự trong chuỗi
echo strpos($hoTen, "n") . "<br>";

// thay thế kí tự trong chuỗi
echo str_replace("Nhung", "Dung", $hoTen) . "<br>";

$soThuNhat = 10;
$soThuHai = 5;
// phép cộng
echo $soThuNhat + $soThuHai . "<br>";
// phép trừ
echo $soThuNhat - $soThuHai . "<br>";
// phép nhân
echo $soThuNhat * $soThuHai . "<br>";
// phép chia
echo $soThuNhat / $soThuHai . "<br>";

// toán tử gán
# += -= *= /= %=
$soThuNhat += $soThuHai;
echo $soThuNhat . "<br>";

// $soThuNhat -= $soThuHai;
// echo $soThuNhat . "<br>";

// $soThuNhat *= $soThuHai;
// echo $soThuNhat . "<br>";

// $soThuNhat /= $soThuHai;
// echo $soThuNhat . "<br>";

// $soThuNhat %= $soThuHai;
// echo $soThuNhat . "<br>";

// toán tử so sánh ==; !=; >; <; >=; <=; ===
# true mới hiện false ko hiện
// echo $soThuNhat == $soThuHai . "<br>";
// echo $soThuNhat != $soThuHai . "<br>";
// echo $soThuNhat > $soThuHai . "<br>";
// echo $soThuNhat < $soThuHai . "<br>";
// echo $soThuNhat >= $soThuHai . "<br>";
// echo $soThuNhat <= $soThuHai . "<br>";
// echo $soThuNhat === $soThuHai . "<br>";

// câu điều kiện
// if("điều kiện"){
     //logic
// }
//elseif("điều kiện"){
    // logic
//}else{
    // logic
//}
$ketQua = $soThuNhat + $soThuHai;
 if($ketQua < 15){
    echo "nhỏ hơn 15";
 }elseif($ketQua = 15){
    echo "kết quả =" . "$ketQua";
 }else{
    echo "lớn hơn 15";
 }

 // switch case
 $color = "red";
 switch($color){
    case "red":
        echo "<br>";
        echo "IS RED";
        break;
    case "blue":
        echo "<br>";
        echo "IS BLUE";
        break;
    default:
        echo "<br>";
        echo "no color";
        break;
 }

 // for
 for ($i = 0 ; $i < 100 ; $i++){
     echo $i . "<br>";
 }
 
 // mảng
 echo "<br>";
 $mang = ["Anh", "Nhat Anh", "Vu Anh"];
 // đếm phần tử
 echo count ($mang) . "<br>";
 echo $mang[1] . "<br>";

 $mang[] = "Qang Anh";
 print_r($mang);
 echo "<br>";
 unset($mang[3]);
 print_r($mang);
?>
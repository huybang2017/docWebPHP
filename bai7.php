<?php
// hàm explode: hàm chuyển 1 chuỗi thành 1 mảng
$chuoi1 = "học | lập | trình | PHP";
$arr = explode("|", $chuoi1);
var_dump($arr);
echo "</br>";

// hàm implode: hàm chuyển từ 1 mảng thành 1 chuỗi
$chuoi2 = implode(".", $arr);
echo $chuoi2 . "</br>";

// hàm strlen : hàm tính độ dài chuỗi
$length = strlen("tôi là huy");
echo $length . "</br>";

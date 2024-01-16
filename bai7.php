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

// hàm str_repeat: lặp chuỗi với số lần
echo str_repeat("huy", 3) . "</br>";

// hàm str_replace: tìm chuỗi và thay thế
$chuoi3 = str_replace(".", "|", $chuoi2, $count);
echo "$chuoi3 $count </br>";

// hàm md5: hàm mã hóa 1 chuỗi gồm 32 ký tự
echo md5("123456", true) . "</br>";

// hàm sha1: hàm mã hóa 1 chuỗi gồm 40 ký tự tương tự như md5
echo sha1("123456") . "</br>";

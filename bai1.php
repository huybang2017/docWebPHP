<?php
$_HO = "Nguyễn";
$_TEN = "HUY";
$bien_so_1 = 12;
$bienSoMot = 12.5;

echo "echo PHP </br>";

echo 'họ ' . $_HO . ' ten ' . $_TEN . "</br>";
echo "Họ $_HO tên $_TEN </br>";

// hằng số
define("_PI", 3.14);
const WEB_NAME = "web Huy";
// echo trong PHP mục đích là để xuất dữ liệu ra màn hình
// Hằng số khi xuất ra màn hình thì không sử dụng chuỗi trực tiếp được
echo "số pi là : $_PI"; // lỗi
echo "số pi là : " . _PI . "</br>"; // đúng cú pháp
echo WEB_NAME; // đúng cú pháp

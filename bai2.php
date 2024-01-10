<?php
// kiểu dữ liệu sử dụng cú pháp var_dump để kiểm tra kiểu dữ liệu
// khai báo kiểu số nguyên
$x = 5;
var_dump($x);
echo "</br>";
// ép kiểu
$a = (string)$x;
var_dump($a);
echo "</br>";
//khai báo kiểu array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "</br>";
// khai báo kiểu dữ liệu NULL
$x = null;
var_dump($x);
echo "</br>";

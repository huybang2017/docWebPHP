<?php
// isset: kiểm tra biến có tồn tại hay không
// bật thông báo lỗi
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$bien1 = "huy";

// echo $bien1; // sẽ báo lỗi

if (isset($bien1)) {
    echo $bien1;
}

echo "</br>";

// empty:
$bien2 = 0;
if (!empty($bien2)) {
    echo $bien2;
} else {
    echo "không hợp lệ";
}

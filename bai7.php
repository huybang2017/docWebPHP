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

// hàm htmlentities: chuyển các thẻ html sang dạng chuỗi -> có thể in thẻ html ra màn hình
echo htmlentities("<h1>tôi là huy</h1>");

// hàm html_entity_decode: chuyển từ dạng chuỗi sang dạng html trình duyệt có thể biên dịch html được
echo html_entity_decode("<h1>tôi là huy</h1>");

// hàm strip_tags: hàm bỏ đi các thẻ html có trong chuỗi
echo strip_tags("<h1>đây là h1</h1> </br> <h2>đây là h2</h2>", "<h2>");

// hàm substr: lấy chuỗi con từ vị trí start với độ dài length
echo substr("Nguyễn Đức Huy", 4, 5) . "</br>";

// hàm strstr: tách 1 chuỗi từ ký tự cho trước choi đến hết
echo strstr("Nguyễn Đức Huy", "n");

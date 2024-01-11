# WEB nâng cao

## setup: xampp + vsc:

- [link tham khảo](https://www.youtube.com/watch?v=MZJR0LzRfVg&list=PL88QwC-jiH9ByYqO0mVStNEHB6QT24yx1&index=4)
- [cách thêm project vào xampp](https://www.youtube.com/watch?v=yEh_EqVTVbc&list=PL88QwC-jiH9ByYqO0mVStNEHB6QT24yx1&index=5)

## tài liệu tham khảo:

- [w3c](https://www.w3schools.com/php/default.asp)
- [kênh youtube](https://www.youtube.com/@hienuTech)

## Bài 1: hằng số

### cú pháp để sử dụng PHP :

```PHP
<?php
    code PHP
?>
```

### cú pháp nối chuỗi trong PHP:

```PHP
$_HO = "Nguyễn";
$_TEN = "HUY";
// sử dụng nối chuỗi : .
echo 'họ ' . $_HO . ' ten ' . $_TEN . '</br>';
// sử dụng nối chuỗi: ""
// *lưu ý : - trong vấn đề chuỗi trong PHP có phân biệt giữa 2 cú pháp '' và ""
            // - khi sử dụng echo ta có thể dùng các thẻ html 1 cách bình thường
echo "Họ $_HO tên $_TEN </br>";
```

### biến số hằng số : sử dụng cú pháp $ để khai báo biến và hằng số thì sử dụng define() hoặc const

```PHP
// hằng số
define("_PI", 3.14);
const WEB_NAME = "web Huy";
// echo trong PHP mục đích là để xuất dữ liệu ra màn hình
// Hằng số khi xuất ra màn hình thì không sử dụng chuỗi trực tiếp được
echo "số pi là : $_PI"; // lỗi
echo "số pi là : " .$_PI . "</br>"; // đúng cú pháp
echo WEB_NAME; // đúng cú pháp
```

## Bài 2: kiểu dữ liệu

### Trong PHP có các kiểu dữ liệu như sau:

- kiểu int(số nguyên)
- kiểu float(số thực)
- kiểu String(kiểu chuỗi)
- kiểu boolean(true or false)
- kiểu Array
- kiểu Obj
- kiểu NULL

## Bài 3: toán tử trong PHP

### biểu thức: tập hợp các toán tử và toán hạng

- toán hạng: các biến hay các giá trị: a+b
- toán tử: các phép toán: cộng trừ nhân chia

### toán tử gán: =,+=,-=,\*=,/=,%=,.=

- mọi thứ đều rất quen thuộc rồi chỉ có 1 thắc mắc .= là gì ???
- toán tử .= được sử dụng để nối giá trị của một biến với một giá trị khác và lưu trữ kết quả vào chính biến đó

```PHP
$var = "10";
$var .= " 5";
echo $var; // 105 kiểu number

$a = "hello";
$a .= " 123";
echo $var; // hello123 kiểu string
```

### toán tử số học: +,-,\*,/,%,\*\*,--,++

### toán tử so sánh: >,<,<=,>=,==,===,!=

- sự khác nhau giữa 2 toán tử so sánh: == và === ???
- tương tự như js: == là so sánh các dữ liệu không đồng nhất ví dụ (kiểu num == string => true) ngược lại với === thì không có chuyện đó -> lời khuyên dùng nên sử dụng toán tử so sánh: ===

```PHP
$var1 = 5;
$var2 = "5";

// Sử dụng toán tử ==
if ($var1 == $var2) {
    echo "Giá trị bằng nhau";
} else {
    echo "Giá trị không bằng nhau";
}

// Sử dụng toán tử ===
if ($var1 === $var2) {
    echo "Giá trị và kiểu dữ liệu đồng nhất";
} else {
    echo "Giá trị hoặc kiểu dữ liệu không đồng nhất";
}
```

### toán tử luân lý: ||,&&,!

- mọi thứ vẫn rất quen thuộc nhưng ! có thể vẫn lạ với 1 số bạn
- vdu luôn cho dễ hiểu

```PHP
$condition = true;
if (!$condition) {
    echo "Biểu thức là false";
} else {
    echo "Biểu thức là true";
}
```

## bài 4: các câu lệnh: rẽ nhánh(if-else,switch) và vòng lặp(for,while,doWhile)

### if-else

```PHP
$score = 75;
if ($score >= 90) {
    echo "Điểm A";
} elseif ($score >= 80) {
    echo "Điểm B";
} elseif ($score >= 70) {
    echo "Điểm C";
} else {
    echo "Điểm D";
}
```

### switch case

```PHP
$dayOfWeek = "Monday";
switch ($dayOfWeek) {
    case "Monday":
        echo "Hôm nay là thứ Hai.";
        break;
    case "Tuesday":
        echo "Hôm nay là thứ Ba.";
        break;
    case "Wednesday":
        echo "Hôm nay là thứ Tư.";
        break;
    case "Thursday":
        echo "Hôm nay là thứ Năm.";
        break;
    case "Friday":
        echo "Hôm nay là thứ Sáu.";
        break;
    case "Saturday":
        echo "Hôm nay là thứ Bảy.";
        break;
    case "Sunday":
        echo "Hôm nay là Chủ Nhật.";
        break;
    default:
        echo "Không xác định ngày.";
}
```

### vòng lặp for

```PHP
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
```

### vòng lặp while

```PHP
$colors = ["Red", "Green", "Blue"];
$count = count($colors);
$i = 0;

while ($i < $count) {
    echo $colors[$i] . " ";
    $i++;
}
```

### vòng lặp do while

```PHP
$i = 1;

do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
```

### lưu ý về phần break,continue,exit,die

- break: buộc thoát khỏi vòng lặp
- continue: nhảy qua vòng lặp kế tiếp
- die và exit: dừng cả chương trình phía dưới
- -> die và exit các dùng cũng tương tự như khi ta sử dụng return, không có sự khác nhau về die và exit

```PHP
$age = 15;
if ($age < 18) {
    die("Bạn chưa đủ tuổi để truy cập trang này.");
} else {
    echo "Chào mừng bạn đến trang web!";
    // Các câu lệnh tiếp theo...
}
$score = 50;

if ($score < 60) {
    exit("Bạn đã không đạt điểm đỗ.");
} else {
    echo "Chúc mừng! Bạn đã đỗ.";
    // Các câu lệnh tiếp theo...
}
```

## Các câu lệnh về include - include_once - require - require_once

### include: hàm include sử dụng để nhập lại nội dung của 1 file từ 1 file khác -> tái sử dụng code , tạo các module độc lập

```PHP
include('import1.php');
include('import2.php');
```

### sự khác nhau giữa include và include_once:

```PHP
// hàm include sử dụng để nhập lại nội dung của 1 file từ 1 file khác -> tái sử dụng code , tạo các module độc lập
include('import1.php');
include('import1.php');
// hàm include_once sử dụng và tác dụng tương tự như include những sự khác nhau của include_once chỉ import được 1 lần
include_once('import1.php');
include_once('import1.php');
```

### phần require,require_once cũng tương tự như phần include nhưng sự khác nhau giữa 2 phần:

- include: nếu import lỗi, thì phần code phía dưới vẫn sẽ chạy
- require: nếu import lỗi thì phần code phía dưỡi sẽ ngừng

```PHP
// giả sử 2 phần import bị lỗi và comment 1 trong 2 cách import
include ('import.php'); // chương trình vân được chạy
require "import.php" // chương trình đã ngừng
echo "chương trình vẫn được chạy";
```

## Bài 6: Toán tử ngôi ba và các cú pháp thay thế trong PHP

### toán tử ngôi ba:

```PHP
// toán tử ngôi ba
$a = -10;
echo ($a < 0) ? "Biến a âm" : "Biến a dương";
```

### cú pháp thay thế trong if else:

```PHP
// thay thế {} thành : - endif
<?php
$a = -10;

if ($a < 0) :
?>
    <ul>
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
    </ul>
<?php
else :
    echo "Biến a dương";
endif;
```

### cú pháp thay thế trong for

```PHP
// tương tự như thay thế trong if else
for ($i = 0; $i < 10; $i++) :
?>
    <ul>
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
    </ul>
<?php
endfor;
```

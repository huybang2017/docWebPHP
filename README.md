# WEB nâng cao

## setup: xampp + vsc

- [link tham khảo](https://www.youtube.com/watch?v=MZJR0LzRfVg&list=PL88QwC-jiH9ByYqO0mVStNEHB6QT24yx1&index=4)

- [cách thêm project vào xampp](https://www.youtube.com/watch?v=yEh_EqVTVbc&list=PL88QwC-jiH9ByYqO0mVStNEHB6QT24yx1&index=5)

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
echo "số pi là : " . _PI . "</br>"; // đúng cú pháp
echo WEB_NAME; // đúng cú pháp
```

## Bài 2: kiểu dữ liệu

### Trong PHP có các kiểu dữ liệu như sau:

- kiểu int(số nguyên)
- kiểu float(số thực)
- kiểu String(kiểu chuỗi)
- kiểu boolean(true or false)
- kiểu Array
- kiểu NULL

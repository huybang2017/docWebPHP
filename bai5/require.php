<?php
// hàm include sử dụng để nhập lại nội dung của 1 file từ 1 file khác -> tái sử dụng code , tạo các module độc lập
include('import1.php');
// hàm include_once sử dụng và tác dụng tương tự như include những sử khác nhau của include_once chỉ có tác dụng 1 lần
include_once('import1.php');

require "import2.php";
require_once "import2.php";

echo "chương trình vẫn được chạy";

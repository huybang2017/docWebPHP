<?php

// IF-ELSE statement
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

echo "<br>";

// SWITCH-CASE statement
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

echo "<br>";

// FOR loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

echo "<br>";

// WHILE loop
$colors = ["Red", "Green", "Blue"];
$count = count($colors);
$i = 0;
while ($i < $count) {
    echo $colors[$i] . " ";
    $i++;
}

echo "<br>";

// DO-WHILE loop
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);

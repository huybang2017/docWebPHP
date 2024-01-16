<?php
// toán tử ngôi ba
$a = -10;
// echo ($a < 0) ? "Biến a âm" : "Biến a dương";
// thay thế ifelse
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
// thay thế for
for ($i = 0; $i < -10; $i++) :
?>
    <ul>
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
    </ul>
<?php
endfor;

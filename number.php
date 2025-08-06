<?php
$numbera = 1;
$numberb = 2;
$tong = $numbera + $numberb;
echo "Tổng của $numbera và $numberb là: $tong" ."<br>";

//ham
function tinhtong($a,$b){
    $tong = $a + $b;
    return $tong;
}
$tongtinh = tinhtong(3,4);
echo "Tổng của 3 và 4 là: $tongtinh";
?>
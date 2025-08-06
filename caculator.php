<?php
// định nghĩa 1 class có tên caculator để thực hiện các phép tính sau 
// cộng, trừ, nhân, chia
class Caculator {
    // thuộc tính
    public $numbera = 10;
    public $numberb = 5;
    // phương thức cộng
    public function __construct() {
       echo "Đây là phương thức khởi tạo của class Caculator <br>";
    }
    public function __destruct() {
        echo "Đây là phương thức hủy của class Caculator <br>";
    }
    public function add($a=0, $b=0) {
        if ($a == 0 && $b == 0) {
            $a = $this->numbera;
            $b = $this->numberb;
        }
        return $a + $b;
    }

    // phương thức trừ
    public function subtract($a, $b) {
        return $a - $b;
    }

    // phương thức nhân
    public function multiply($a, $b) {
        return $a * $b;
    }

    // phương thức chia
    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Không thể chia cho 0";
        }
    }
}

$calculator = new Caculator();
echo "Tổng của 2 và 3 là: " . $calculator->add(2, 3) . "<br>";
echo "Tổng thuộc tính trong class là: " . $calculator->add($calculator->numbera, $calculator->numberb) . "<br>" . "<hr>";
echo "Hiệu của 5 và 2 là: " . $calculator->subtract(5, 2) . "<br>";
echo "Hiệu thuộc tính trong class là: " . $calculator->subtract($calculator->numbera, $calculator->numberb) . "<br>" . "<hr>";
echo "Tích của 4 và 6 là: " . $calculator->multiply(4, 6) . "<br>";
echo "Tích thuộc tính trong class là: " . $calculator->multiply($calculator->numbera, $calculator->numberb) . "<br>" . "<hr>";
echo "Thương của 8 và 2 là: " . $calculator->divide(8, 2) . "<br>";
echo "Thương thuộc tính trong class là: " . $calculator->divide($calculator->numbera, $calculator->numberb) . "<br>" . "<hr>";


?>
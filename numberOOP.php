<?php
class Number_OOP {
    // ĐỊnh nghĩa thuộc tính
    public $numbera = 2;
    public $numberb = 3;
    //ĐỊnh ngĩa phương thức
    public function tinhtong($a,$b){
        $result = $a + $b; 
        return $result;
    }
}
// Khởi tạo đối tượng
$number = new Number_OOP();
// Truy cập và lấy giá trị của thuộc tính
echo $number->numbera . "<br>";
// Truy cập và gán giá trị cho thuộc tính
$number->numbera = 5;
echo $number->numbera . "<br>";
// Gọi phương thức
echo "tổng của 2 và 3 là " . $number->tinhtong(2,3) . "<br>";
echo "tổng hai thuộc tính trong class là: " . $number->tinhtong($number->numbera, $number->numberb) . "<br>";
?>
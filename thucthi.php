<?php
require_once 'caculator.php';
$calc = new Caculator();
echo $calc->numbera;
echo "<br>";
$ketqua = $calc->add();
echo "ket qua: " . $ketqua;
echo "<br>";  
?>  
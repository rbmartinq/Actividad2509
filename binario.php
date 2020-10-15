<?php  
$binario = $_POST['binario'];
$decimal = bindec($binario);
echo "El número ".$binario." en base 2 es igual a: ".$decimal. " En base 10";
?>
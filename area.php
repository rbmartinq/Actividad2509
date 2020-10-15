<?php  
	$Bm = $_POST['Bm'];
	$B = $_POST['B'];
	$H = $_POST['ha'];
	$Resultado = ((($Bm + $B)/2) * $H);
	echo "El área del trapecio es: ".$Resultado." metros cuadrados";
?>
<?php  
	$N1 = $_POST['N1'];
	$N2 = $_POST['N2'];
	$N3 = $_POST['N3'];
	$N4 = $_POST['N4'];
	$Promedio = ($N1 + $N2 + $N3 + $N4) / 4;
	echo "El promedio de los cuatro números es: ".$Promedio;
?>
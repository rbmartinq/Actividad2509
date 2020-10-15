<?php 
	if ( !empty($_POST['N']) && is_array($_POST['N']) ) 
	{ 
			$numeros[] = $_POST['N'];
	}
	$string = $numeros[0];
	sort($string);
	echo "Números Ordenados: <br>";
	foreach ($string as $N) 
	{
		echo $N."<br>";
	}
?>
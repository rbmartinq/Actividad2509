<?php  
	$Texto = $_POST['texto'];
	$contadora_a = 0;
	$contadora_e = 0;
	$contadora_i = 0;
	$contadora_o = 0;
	$contadora_u = 0;
	$Texto = strtolower($Texto);
	$Longitud = strlen($Texto);
	for ($i=0; $i < $Longitud; $i++) 
	{ 
		$Vocal = substr($Texto, $i, 1);
		if ($Vocal == "a") 
		{
			$contadora_a = $contadora_a + 1;
		}
		if ($Vocal == "e") 
		{
			$contadora_e = $contadora_e + 1;
		}
		if ($Vocal == "i") 
		{
			$contadora_i = $contadora_i + 1;
		}
		if ($Vocal == "o") 
		{
			$contadora_o = $contadora_o + 1;
		}
		if ($Vocal == "u") 
		{
			$contadora_u = $contadora_u + 1;
		}
	}
	$Total = $contadora_a + $contadora_e + $contadora_i + $contadora_o + $contadora_u;
	echo "El número total de vocales es: ".$Total."<br>";
	if (($contadora_a > $contadora_e) && ($contadora_a > $contadora_i) && ($contadora_a > $contadora_o) && ($contadora_a > $contadora_u)) 
	{
		echo "La vocal A es la que más se repite en el texto";
	}
	if (($contadora_e > $contadora_a) && ($contadora_e > $contadora_i) && ($contadora_e > $contadora_o) && ($contadora_e > $contadora_u) ) 
	{
		echo "La vocal E es la que más se repite en el texto";
	}
	if (($contadora_i > $contadora_a) && ($contadora_i > $contadora_e) && ($contadora_i > $contadora_o) && ($contadora_i > $contadora_u) ) 
	{
		echo "La vocal I es la que más se repite en el texto";
	}
	if (($contadora_o > $contadora_a) && ($contadora_o > $contadora_e) && ($contadora_o > $contadora_i) && ($contadora_o > $contadora_u) ) 
	{
		echo "La vocal O es la que más se repite en el texto";
	}
	if (($contadora_u > $contadora_a) && ($contadora_u > $contadora_e) && ($contadora_u > $contadora_i) && ($contadora_u > $contadora_o) ) 
	{
		echo "La vocal U es la que más se repite en el texto";
	}
?>
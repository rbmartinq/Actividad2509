<?php  
	$N1 = $_POST['N1'];
	$N2 = $_POST['N2'];
	$N3 = $_POST['N3'];
	if (($N1 > $N2) && ($N2 > $N3)) 
	{
		echo $N1." Es el número mayor ".$N2." Es el medio y ".$N3. " Es el menor";
	}
	if (($N1 > $N3) && ($N3 > $N2)) 
	{
		echo $N1." Es el número mayor ".$N3." Es el medio y ".$N2. " Es el menor";
	}
	if (($N2 > $N3) && ($N3 > $N1)) 
	{
		echo $N2." Es el número mayor ".$N3." Es el medio y ".$N1. " Es el menor";
	}
	if (($N2 > $N1) && ($N1 > $N3)) 
	{
		echo $N2." Es el número mayor ".$N1." Es el medio y ".$N3. " Es el menor";
	}
	if (($N3 > $N1) && ($N1 > $N2)) 
	{
		echo $N3." Es el número mayor ".$N1." Es el medio y ".$N2. " Es el menor";
	}
	if (($N3 > $N2) && ($N2 > $N1)) 
	{
		echo $N3." Es el número mayor ".$N2." Es el medio y ".$N1. " Es el menor";
	}
?>
<?php

$numeros[] = $_GET['num1'];
$numeros[] = $_GET['num2'];
$numeros[] = $_GET['num3'];

for ($i=0; $i < 4; $i++) { 
}
if ($numeros[0]>$numeros[1] && $numeros[0]>$numeros[2] && $numeros[1]>$numeros[2]) {
	echo $numeros[0];
	echo $numeros[1];
	echo $numeros[2];
	
	
}
elseif ($numeros[1]>$numeros[0] && $numeros[1]>$numeros[2] && $numeros[0]>$numeros[2]) {
	echo $numeros[1];
	echo $numeros[0];
	echo $numeros[2];
}
elseif ($numeros[2]>$numeros[0] && $numeros[2]>$numeros[1] && $numeros[1]>$numeros[0]) {
	echo $numeros[2];
	echo $numeros[1];
	echo $numeros[0];
}	

elseif ($numeros[1]>$numeros[0] && $numeros[1]>$numeros[2] && $numeros[2]>$numeros[0]) {
	echo $numeros[1];
	echo $numeros[2];
	echo $numeros[0];
}
elseif ($numeros[2]>$numeros[0] && $numeros[2]>$numeros[1] && $numeros[0]>$numeros[1]) {
	echo $numeros[2];
	echo $numeros[0];
	echo $numeros[1];
}	
elseif ($numeros[0]>$numeros[2] && $numeros[0]>$numeros[1] && $numeros[2]>$numeros[1]) {
	echo $numeros[0];
	echo $numeros[2];
	echo $numeros[1];
}	



  ?>
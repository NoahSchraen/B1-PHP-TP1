<?php
	define("CONV_C_F", 1.8) ;
	echo "Saisir la température en °C : \n" ;
	$tempC = fgets(STDIN) ;
	$tempF = CONV_C_F * $tempC +32 ;
	echo "Température en °F : " , $tempF , "\n" ;
	
?>

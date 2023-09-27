<?php
	define("CONV_KMH_ND" , 1.852) ;
	echo "Saisir la vitesse en km/h : " ;
	$vitessekmh = fgets(STDIN) ;
	$vitessend = $vitessekmh / CONV_KMH_ND ;
	echo "Résultat de la conversion : " , $vitessend , " noeuds\n" ;
?>

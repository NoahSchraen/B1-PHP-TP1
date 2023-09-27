<?php
	define("TARIF_P", 18);
	define("TARIF_R", 15);
	echo" - Calcule du tarif pour les groupes -\n" ;
	echo"Saisir le nombre d'adultes : " ;
	$nbadultes = fgets(STDIN);
	$nbadultes_tarifred= floor($nbadultes/7);
	$nbadultes_tarifpl1= $nbadultes - 7 * $nbadultes_tarifred;
	$prixgrp = 7 * $nbadultes_tarifred * TARIF_R + $nbadultes_tarifpl1 * TARIF_P ;
	echo "Montant à régler : " ,$prixgrp , "\n" ;
?>

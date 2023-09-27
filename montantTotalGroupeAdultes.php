<?php
	define("PRIX_TRAV_ADL", 17) ;
	echo "Saisir le nombre de passager : \n" ;
	$nbpassager = fgets(STDIN) ;
	$prixtrv = PRIX_TRAV_ADL * $nbpassager ;
	echo "Montant a payer pour la traversée du 3 Juillet 2021 : " , $prixtrv , " euros\n" ;
?>

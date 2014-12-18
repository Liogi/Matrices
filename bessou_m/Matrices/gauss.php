<?php
require("classmatrice.php");
require("classgauss.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;
$matriceY = (isset($_POST["MatB"])) ? $_POST["MatB"] : NULL;

if (isset($matriceA) && isset($matriceY)){
	$gauss = new Gauss($matriceA, $matriceY);
	$gauss->verif_a11();
	$gauss->calcul_G1();
	$gauss->afficheMatrice($gauss->getMatriceG1(), "G1");
	$gauss->calcul_A2_Y2();	
	$gauss->afficheMatrice($gauss->getMatriceA(), "A");
	$gauss->afficheMatrice($gauss->getMatriceA2(), "A2");
	echo "</br>";
	$gauss->afficheMatrice($gauss->getMatriceG1(), "G1");
	$gauss->afficheMatrice($gauss->getMatriceB(), "Y");
	$gauss->afficheMatrice($gauss->getMatriceY2(), "Y2");



	if (count($matriceA) > 2)
	{
		$gauss->verif_b22();
		$gauss->calcul_G2();
		$gauss->calcul_A3_Y3();
		echo "</br>";
		$gauss->afficheMatrice($gauss->getMatriceG2(), "G2");
		$gauss->afficheMatrice($gauss->getMatriceA2(), "A2");
		$gauss->afficheMatrice($gauss->getMatriceA3(), "A3");
		echo "</br>";
		$gauss->afficheMatrice($gauss->getMatriceG2(), "G2");
		$gauss->afficheMatrice($gauss->getMatriceY2(), "Y2");
		$gauss->afficheMatrice($gauss->getMatriceY3(), "Y3");
	}
	if (count($matriceA) > 3)
	{
		$gauss->verif_c33();
		$gauss->calcul_G3();
		$gauss->calcul_A4_Y4();
		echo "</br>";
		$gauss->afficheMatrice($gauss->getMatriceG3(), "G3");
		$gauss->afficheMatrice($gauss->getMatriceA3(), "A3");
		$gauss->afficheMatrice($gauss->getMatriceA4(), "A4");
		echo "</br>";
		$gauss->afficheMatrice($gauss->getMatriceG3(), "G3");
		$gauss->afficheMatrice($gauss->getMatriceY3(), "Y3");
		$gauss->afficheMatrice($gauss->getMatriceY4(), "Y4");	
	}
}
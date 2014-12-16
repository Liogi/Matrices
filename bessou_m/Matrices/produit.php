<?php
require("classmatrice.php");
require("classomme.php");
require("classproduit.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;
$matriceB = (isset($_POST["MatB"])) ? $_POST["MatB"] : NULL;

if (isset($matriceA) && isset($matriceB)){
	$produit = new Somme($matriceA, $matriceB);
	$produit->operation();
	$produit->afficheProduit();	
}
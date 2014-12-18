<?php
require("classmatrice.php");
require("classproduit.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;
$matriceB = (isset($_POST["MatB"])) ? $_POST["MatB"] : NULL;

if (isset($matriceA) && isset($matriceB)){
	$produit = new Produit($matriceA, $matriceB);
	$produit->operation();
	$produit->afficheProduit();	
}
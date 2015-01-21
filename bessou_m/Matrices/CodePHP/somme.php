<?php
require("classomme.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;
$matriceB = (isset($_POST["MatB"])) ? $_POST["MatB"] : NULL;

if (isset($matriceA) && isset($matriceB)){
	$somme = new Somme($matriceA, $matriceB);
	$somme->operation();
	$somme->afficheSomme();	
}


<?php
require("classmatrice.php");
require("classomme.php");
require("classTransposee.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;


if (isset($matriceA)){
	$transposee = new Transposee($matriceA);
	$transposee->operation();
	$transposee->afficheTransposee();	
}
<?php
require("classmatrice.php");
require("classomme.php");
require("classproduit.php");
require("classTrace.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;


if (isset($matriceA)){
	$trace = new Trace($matriceA);
	$trace->operation();
	$trace->afficheTrace();	
}
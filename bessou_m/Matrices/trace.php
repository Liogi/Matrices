<?php
require("classmatrice.php");
require("classTrace.php");

$matriceA = (isset($_POST["MatA"])) ? $_POST["MatA"] : NULL;


if (isset($matriceA)){
	$trace = new Trace($matriceA);
	$trace->operation();
	$trace->afficheTrace();	
}
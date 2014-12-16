<?php
require("classmatrice.php");
require("classomme.php");
require("classproduit.php");
$tab = array();
$tab[0][0] = 1;
$tab[0][1] = 2;
$tab[0][2] = 0;
$tab[1][0] = 4;
$tab[1][1] = 3;
$tab[1][2] = -1;

$tab2 = array();
$tab2[0][0] = 5;
$tab2[0][1] = 1;
$tab2[1][0] = 2;
$tab2[1][1] = 3;
$tab2[2][0] = 3;
$tab2[2][1] = 4;

$aa = array();
$aa[0][0] = 6;
$aa[0][1] = 7;
$aa[1][0] = 8;
$aa[1][1] = 9;
$aa[2][0] = 10;
$aa[2][1] = 11;

$aaa = array();
$aaa[0][0] = 12;
$aaa[0][1] = 13;
$aaa[1][0] = 14;
$aaa[1][1] = 15;
$aaa[2][0] = 16;
$aaa[2][1] = 17;
$produit = new Produit($tab, $tab2);
$produit->operation();
$produit->afficheMatriceA();
$produit->afficheMatriceB();
$produit->afficheProduit();

$somme = new Somme($aa, $aaa);
$somme->operation();
$somme->afficheMatriceA();
$somme->afficheMatriceB();
$somme->afficheSomme();

$produit2 = new Produit($tab2, $tab);
$produit2->operation();
$produit2->afficheMatriceA();
$produit2->afficheMatriceB();
$produit2->afficheProduit();
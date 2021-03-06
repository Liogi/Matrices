<?php
require("classmatrice.php");
class Produit extends Matrice{
	private $matriceProduit = array();
	function __construct($matA, $matB){
		$this->matriceA = $matA;
		$this->matriceB = $matB;
		for ($i = 0; $i < count($matA); ++$i){
			for ($j = 0; $j < count($matB[0]); ++$j){
				$this->matriceProduit[$i][$j] = 0;
			}
		}
	}

	function operation(){
		for ($i = 0; $i < count($this->matriceA); ++$i){
			$ligne = $this->getLigneA($i);
			for ($j = 0; $j < count($this->matriceB[0]); ++$j){
				$col = $this->getColB($j);
				for ($k = 0; $k < count($this->getLigneA(0)); ++$k){
					$this->matriceProduit[$i][$j] += ($ligne[$k] * $col[$k]);
				}
				$this->matriceProduit[$i][$j] = round($this->matriceProduit[$i][$j], 2);
			}
		}
	}

	function afficheProduit(){
		echo "<table class='matriceresult'>";
		echo "<h3 class='titreh3'>MatriceProduit</h3>";
		foreach ($this->matriceProduit as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td class='caseresult'>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function getMatriceProduit(){
		return $this->matriceProduit;
	}
}
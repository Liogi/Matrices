<?php
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
					$this->matriceProduit[$i][$j] += $ligne[$k] * $col[$k];
				}
			}
		}
	}

	function afficheProduit(){
		echo "<table id='matriceProduit'>";
		foreach ($this->matriceProduit as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</br>";
	}
}
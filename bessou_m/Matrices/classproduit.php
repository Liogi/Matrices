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

	function getLigneB($nb){
		$ligne = array();
		foreach ($this->matriceB[$nb] as $key => $value){
			$ligne[] = $value;
		}
		return $ligne;
	}

	function getColB($nb){
		$col = array();
		foreach ($this->matriceB as $tab) {
			foreach ($tab as $key => $value) {
				if ($key == $nb)
					$col[] = $value;
			}
		}
		return $col;
	}

	function getElemB($i, $j){
		return $this->matriceB[$i][$j];
	}

	function afficheMatriceB(){
		echo "<table id='matriceB'>";
		foreach ($this->matriceB as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</br>";
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
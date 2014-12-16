<?php
class Somme extends Matrice{
	private $matriceSomme = array();
	function __construct($matA, $matB){
		$this->matriceA = $matA;
		$this->matriceB = $matB;
	}

	function operation(){
		for ($i = 0; $i < count($this->matriceA); ++$i){
			for ($j = 0; $j < count($this->matriceA[0]); ++$j){
				$this->matriceSomme[$i][$j] = $this->matriceA[$i][$j] + $this->matriceB[$i][$j];
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

	function afficheSomme(){
		echo "<table id='matriceSomme'>";
		foreach ($this->matriceSomme as $ligne) {
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
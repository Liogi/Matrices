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

	function afficheSomme(){
		echo "<table id='matriceSomme'>";
		echo "<h3 class='titreh3'>MatriceSomme</h3>";
		foreach ($this->matriceSomme as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td class='caseSomme'>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
}
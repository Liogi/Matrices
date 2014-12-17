<?php
class Transposee extends Matrice{
	private $matriceTransposee = array();
	function __construct($matA){
		$this->matriceA = $matA;
	}

	function operation(){
		for ($i = 0; $i < count($this->matriceA[0]); ++$i)
		{
			for ($j = 0; $j < count($this->matriceA); ++$j){
				$this->matrceTransposee[$i][$j] = $this->matriceA[$j][$i];
			}
		}
	}

function afficheSomme(){
		echo "<table class='matriceresult'>";
		echo "<h3 class='titreh3'>MatriceTransposee</h3>";
		foreach ($this->matriceTransposee as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td class='caseresult'>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	
}
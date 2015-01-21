<?php
abstract class Matrice{
	protected $matriceA = array();
	protected $matriceB = array();


	function getLigneA($nb){
		$ligne = array();
		foreach ($this->matriceA[$nb] as $key => $value){
			$ligne[] = $value;
		}
		return $ligne;
	}

	function getColA($nb){
		$col = array();
		foreach ($this->matriceA as $tab) {
			foreach ($tab as $key => $value) {
				if ($key == $nb)
					$col[] = $value;
			}
		}
		return $col;
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

	function afficheMatrice($matrice, $name){
		echo "<div id={$name}>";
		echo "<table class='matriceresult'>";
		echo "<h3 class='titreh3'>Matrice{$name}</h3>";
		foreach ($matrice as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td class='caseresult'>".round($value, 2)."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
	}
	
	function getMatriceA(){
		return $this->matriceA;
	}
	function getMatriceB(){
		return $this->matriceB;
	}
	abstract protected function operation();
}
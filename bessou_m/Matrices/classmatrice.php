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

	function getElemA($i, $j){
		return $this->matriceA[$i][$j];
	}

	function afficheMatriceA(){
		echo "<table id='matriceA'>";
		foreach ($this->matriceA as $ligne) {
			echo "<tr>";
			foreach ($ligne as $key => $value) {
				echo "<td>{$value}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</br>";
	}

	abstract protected function getLigneB($nb);

	abstract protected function getColB($nb);

	abstract protected function getElemB($i, $j);
		
	abstract protected function afficheMatriceB();

	abstract protected function operation();
}
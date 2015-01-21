<?php
require("classmatrice.php");
class Trace extends Matrice{
	private $traceResult;
	function __construct($matA){
		$this->matriceA = $matA;
		$this->traceResult = 0;
	}

	function operation(){
		for ($i = 0; $i < count($this->matriceA); ++$i)
		{
			for ($j = 0; $j < count($this->matriceA[0]); ++$j){
				if ($i == $j)
					$this->traceResult += $this->matriceA[$i][$j];
			}
		}
	}

	function afficheTrace()
	{
		echo "<table class='matriceresult'>";
		echo "<h3 class='titreh3'>Trace</h3>";
		echo "<tr>";
		for ($i = 0; $i < count($this->matriceA); ++$i)
		{
			for ($j = 0; $j < count($this->matriceA[0]); ++$j){
				if ($i == $j)
					echo $this->matriceA[$i][$j];
			}
			if ($i != count($this->matriceA) - 1)
				echo " + ";
			else
				echo " = ";
		}
		echo $this->traceResult;
		echo "</tr>";
		echo "</table>";
	}
}
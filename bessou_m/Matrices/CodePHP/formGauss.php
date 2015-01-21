<?php

$ordreA = (isset($_POST["OrdreA"])) ? $_POST["OrdreA"] : NULL;
if ($ordreA)
{
	echo "<div id='formulaireMatriceA'>";
	echo "<table>";
	echo "<h3 class='titreh3'>MatriceA</h3>";
	for ($i = 0; $i < $ordreA; ++$i){
		echo "<tr>";
		for ($j = 0; $j < $ordreA; ++$j){
			$id = "$i"."A"."$j";
			echo "<td class='caseresult'><input class='textform' id='$id' type='text' size='3' /></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "<div id='formulaireMatriceB'>";
	echo "<table>";
	echo "<h3 class='titreh3'>MatriceY</h3>";
	for ($i = 0; $i < $ordreA; ++$i){
		echo "<tr>";
		$id = "$i"."B"."0";
		echo "<td class='caseresult'><input class='textform' id='$id' type='text' size='3' /></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div></br>";
	echo "<button type='button' id='envoimatrice'><label for='envoimatrice'>envoi</label></button></br>";
	echo "<div id='resultgauss'></div></br>";
}
else
	echo "<h3>Les données envoyées semblent non valides. Merci de les vérifier.</h3>";
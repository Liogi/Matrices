<?php

$ligneA = (isset($_POST["LigneA"])) ? $_POST["LigneA"] : NULL;
$colA = (isset($_POST["ColA"])) ? $_POST["ColA"] : NULL;
if ($ligneA && $colA)
{
	echo "<div id='formulaireMatriceA'>";
	echo "<table>";
	echo "<h3 class='titreh3'>Matrice</h3>";
	for ($i = 0; $i < $ligneA; ++$i){
		echo "<tr>";
		for ($j = 0; $j < $colA; ++$j){
			$id = "$i"."A"."$j";
			echo "<td class='caseresult'><input class='textform' id='$id' type='text' size='3' /></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "<div id=resultSomme></div></br>";

	echo "<button type='button' id='envoimatrice'><label for='envoimatrice'>envoi</label></button></br>";
}
else
	echo "<h3>Les données envoyées semblent non valides. Merci de les vérifier.</h3>";
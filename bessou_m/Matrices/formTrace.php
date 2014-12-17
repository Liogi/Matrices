<?php

$ligneA = (isset($_POST["LigneA"])) ? $_POST["LigneA"] : NULL;
$colA = (isset($_POST["ColA"])) ? $_POST["ColA"] : NULL;
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
echo "<div id=resultSomme></div>";
echo "</div>";

echo "<button type='button' id='envoimatrice'><label for='envoimatrice'>envoi</label></button></br>";
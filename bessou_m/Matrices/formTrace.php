<?php

$ordreA = (isset($_POST["OrdreA"])) ? $_POST["OrdreA"] : NULL;
echo "<div id='formulaireMatriceA'>";
echo "<table>";
echo "<h3 class='titreh3'>Matrice</h3>";
for ($i = 0; $i < $ordreA; ++$i){
	echo "<tr>";
	for ($j = 0; $j < $ordreA; ++$j){
		$id = "$i"."A"."$j";
		echo "<td class='caseresult'><input class='textform' id='$id' type='text' size='3' /></td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<div id=resultSomme></div>";
echo "</div></br>";

echo "<button type='button' id='envoimatrice'><label for='envoimatrice'>envoi</label></button></br>";
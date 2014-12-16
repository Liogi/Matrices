<?php

$ligneA = (isset($_POST["LigneA"])) ? $_POST["LigneA"] : NULL;
$colA = (isset($_POST["ColA"])) ? $_POST["ColA"] : NULL;
$ligneB = (isset($_POST["LigneB"])) ? $_POST["LigneB"] : NULL;
$colB = (isset($_POST["ColB"])) ? $_POST["ColB"] : NULL;
echo "<div id='formulaireMatriceA'>";
echo "<table>";
echo "<h3 class='titreh3'>MatriceA</h3>";
for ($i = 0; $i < $ligneA; ++$i){
	echo "<tr>";
	for ($j = 0; $j < $colA; ++$j){
		$id = "A$i,$j";
		echo "<td><input id='$id' type='text' size='3' /></td>";
	}
	echo "</tr>";
}
echo "</table></div>";
echo "<div id='formulaireMatriceB'>";
echo "<table>";
echo "<h3 class='titreh3'>MatriceB</h3>";
for ($i = 0; $i < $ligneB; ++$i){
	echo "<tr>";
	for ($j = 0; $j < $colB; ++$j){
		$id = "B$i,$j";
		echo "<td><input id='$id' type='text' size='3' /></td>";
	}
	echo "</tr>";
}
echo "</table></div>";
echo "<button type='button' id='envoimatrice'><label for='envoimatrice'>envoi</label></button></br>";

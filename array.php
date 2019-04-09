
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Affichage en ligne avec Array - AVEC calcul du Nbreligne</title>
</head>
<body>

<?php
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique AVANT affichage
// -------------------------------------------------------
// (exemple)
$NbrCol = 4;
$tableau = array('elt0','elt1','elt2','elt3','elt4','elt5');
// -------------------------------------------------------
// nombre de cellules à remplir
$NbreData = count($tableau);
// -------------------------------------------------------
// calcul du nombre de lignes
if (round($NbreData/$NbrCol)!=($NbreData/$NbrCol)) {
	$NbrLigne = round(($NbreData/$NbrCol)+0.5);
} else {
	$NbrLigne = $NbreData/$NbrCol;
}
// -------------------------------------------------------
// affichage
if ($NbreData != 0) 
{
	$k = 0; // indice du tableau
?>
	<table border="1">
	<tbody>
<?php
	for ($i=1; $i<=$NbrLigne; $i++) 
	{
		// ligne $i
?>
		<tr>
<?php		for ($j=1; $j<=$NbrCol; $j++) 
		{ // colonne $j
			if ($k<$NbreData) {
?>
			<td>
<?php			// -------------------------
			// DONNEES A AFFICHER dans la cellule
			echo $tableau[$k];
			// -------------------------
?>
			</td>
<?php
				$k++;
			} else { // cellule vide
?>
			<td>&nbsp;</td>
<?php
			}
		}
?>
		</tr>
<?php	}
?>
	</tbody>
	</table>
<?php
} else { ?>
	pas de données à afficher
<?php
}
?>

</body>
</html>
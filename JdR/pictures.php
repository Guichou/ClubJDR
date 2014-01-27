<html>
<head>
<title>Ma galerie</title>
</head>

<body>
<?php
echo '<div class="header_02">Kaysersberg 2013</div>';
// cette portion à déjà été détaillé
$tableau = array();
$dossier = opendir ('./pics/');
while ($fichier = readdir ($dossier)) {
	if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
	$tableau[] = $fichier;
	}
}
closedir ($dossier);

$nbcol=3;
$nbpics = count($tableau);

if ($nbpics != 0) {
	echo '<table>';
	for ($i=0; $i<$nbpics; $i++){
	if($i%$nbcol==0) echo '<tr>';
	// noter bien que l'on place un lien vers le fichier mini.php qui va générer nos miniatures. On ajoute un argument, le nom de fichier image à miniaturiser
	echo '<td><a href="pics/' , $tableau[$i] , '"><img src="mini.php?f=' , $tableau[$i] , '" alt="Image" /></a></td>';
	if($i%$nbcol==($nbcol-1)) echo '</tr>';
	}
	echo '</table>';
}
else echo 'Aucune image à afficher';
?>
</body>
</html>
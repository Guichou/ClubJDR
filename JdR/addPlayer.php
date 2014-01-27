<?php
$adresse_bdd='mysql.hostinger.fr'; //mysql.hostinger.fr si online, localhost sinon
//ne pas oublier d'aller modfier index.php et deletePlayer.php
$bdd='u602636850_jdr'; // nom bdd
$utilisateur='u602636850_admin'; // user name
$mot_passe='valguichou2013'; // password


try
{
        $connexion = new PDO('mysql:host='.$adresse_bdd.';dbname='.$bdd, $utilisateur, $mot_passe);
		$connexion->exec("SET NAMES 'utf8'");
}
  
catch(Exception $e)
{
		echo "Une erreur s'est produite !<br />";
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'Num Erreur : '.$e->getCode();
}

$req= $connexion->prepare('INSERT INTO repartition(NOMJOUEUR,NOMJEU) VALUES(:nom,:jeu)');

/* Pour éviter les espaces dans les noms*/
$newName = str_replace(' ', '_', $_POST['pseudo']);

$req->execute(array('nom'=>$newName,
					'jeu'=>$_POST['jeu']));
header('Location:index.php?page='.$_POST['page']);
?>
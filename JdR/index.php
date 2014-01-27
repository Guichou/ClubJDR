<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ENSISA - Club Jeux de Rôles</title>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link rel="shortcut icon" href="images/Logo_JeuxDeRoles.ico" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.2.min.js"></script> 
<script type="text/javascript" src="script.js"></script>
</head>
<?php

$adresse_bdd='localhost'; //mysql.hostinger.fr si online, localhost sinon
//ne pas oublier d'aller modfier addPlayer.php et deletePlayer.php
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

?>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">

<div id="templatemo_banner"></div> <!-- end of banner -->
 
 <?php include("menu.php"); ?>
 
 <div id="templatemo_content_wrapper">
 
 <?php include("leftmenu.php"); ?>
 
  <div class="templatemo_content margin_right_10">
        
    <?php
		if (isset($_GET['page'])){
			$page = $_GET['page'];
			}
		else {
			$page = 'accueil';
			}
		if($page == 'accueil')
			include("accueil.php");
		if($page == 'avancement')
			include("avancement.php");
		if($page == 'games')
			include("games.php");		
		if($page == 'pictures')
			include("pictures.php");		
		if($page == 'mini')
			include("mini.php");
		if($page == 'events')
			include("events.php");
		if($page == 'contact')
			include("contact.php");
		if($page ==  'DD')
			include("Games/DD.php");
		if($page == 'LD5A' )
			include("Games/LD5A.php");
		if($page == 'Vamp' )
			include("Games/Vamp.php");
		if($page == 'DonjNah' )
			include("Games/DonjNah.php");
		if($page == 'Shade' )
			include("Games/Shade.php");
		if($page == 'StarWars' )
			include("Games/StarWars.php");
		if($page == 'ATFMBE' )
			include("Games/ATFMBE.php");
		if($page == 'INS' )
			include("Games/INS.php");
		if($page == 'Shadowrun' )
			include("Games/Shadowrun.php");
		if($page == 'Fuel' )
			include("Games/Fuel.php");
		
			
	?>
        </div> <!-- end of content -->
		
<?php include("rightmenu.php"); ?>

        <div class="cleaner"></div>    
    </div> <!-- end of content wrapper -->
	
<?php include("footer.php"); ?>
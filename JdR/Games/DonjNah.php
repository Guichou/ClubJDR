<!--<?php echo '<div id=gameTitle>Donjon de Naheulbeuk</div><br/><br/>';?>-->
	
	<img id="gameLogo" src="images/DDNlogo.jpg" alt="image" width=450/>
<?php
	echo'<div id=italic>"Bon, alors, vous en avez marre des jeux où tout est formaté sérieux ? Des héros qui sentent bon ? Des compagnies aux cheveux bien peignés ?

	Le jeu de rôle "Donjon de Naheulbeuk" est un jeu de rôle "sur papier" gratuit, pour ceux qui veulent découvrir cette activité ou qui désirent vivre des aventures pas comme les autres..."</div><br/>
	C\'est ainsi que POC -Pen Of Chaos, le papa de cette série- la décrit. Et vous allez voir qu\'il a bien raison !<br/>
	Pour ceux qui ne connaîtraient pas la saga Mp3 du même nom, sachez qu\'elle se déroule dans un univers "médiévalo-fantastique", au même titre que l\'oeuvre de Tolkien ou que le fameux "Donjons et Dragons". Tout ceci avec une "pointe" de dérision. ;) Bref, de grosses poilades en perspective !<br/><br/>
	MJ : Guichou <div id="isRed">NB : Ne sera plus joué à la rentrée des vacances de Noël</div><br/><br/>';
	/* Pour afficher la liste des joueurs */
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "DDN"';
	$req = $connexion->query($sql);
	echo 'Liste des joueurs : <br/>';
	echo '<div id=ddliste>';
	echo '<ul>';
	while($donnee = $req->fetch()){
		
			echo '<li> '; 
			
			echo $donnee['NOMJOUEUR'];
			
			echo '</li>';
	}
	echo '</div>';
	echo '</ul>';
	
	/* Le formulaire pour ajouter un joueur */
	echo '<br/><br/>S\'inscrire à la table de jeu : <br/>'; 
	
	echo '<form method="post" action="addPlayer.php">
  
	<p>
		<label for="pseudo">Nom du joueur :</label><input id="boxPseudo "type="text" name="pseudo" id="pseudo"/>
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="DDN" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="DDN" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "DDN"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>'
?>
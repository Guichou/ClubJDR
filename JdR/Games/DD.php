<!--<?php echo '<div id=gameTitle>Donjons&Dragons</div><br/><br/>';?>-->

	<img id="gameLogo" src="images/DDlogo.jpeg" alt="image" width=450/>
<?php
	echo '<br/><br/> Donjons&Dragons est encore considéré aujourd\'hui comme la références des jeux de rôles pour en avoir posé les principes. Incarne un aventurier au sein d\'un groupe dans un monde fantastique-médiéval où humains, châteaux forts, elfes, nains et magie se côtoient. Les quêtes quant à elles sont d\'une très grande diversité : elles vont du simple donjon maléfique qu\'il faut nettoyer à renverser le tyran au pouvoir en passant par les missions d\'escortes.
	Tu te sens l\'âme d\'un aventurier ? D\'affronter ce dragon là-bas terrorisant la région ? Ecoute donc les villageois autour de toi et leurs espoirs t\'accompagnant, une gloire éternelle t\'attend et mille chansons seront composées à l\'honneur de ton exploit. Alors rejoint notre compagnie et construisons ensemble notre légende !<br/><br/>MJs : Florian et Cédric<br/><br/>';
	
	
	
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "DD"';
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
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="DD" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="DD" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "DD"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>'
?>
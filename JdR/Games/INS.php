<!--<?php echo '<div id=gameTitle>In Nomine Satanis</div><br/><br/>';?>-->

	<img id="gameLogo" src="images/INSimage.jpg" alt="image" width=450/>
<?php	
	echo '<br/><br/>Tu es au service d\'un prince démon. Ton but est de faire régner le chaos et la débauche. Tu n\'as qu\'une règle : l\'obéissance à ton maître. Par tous les moyens. Seul compte le résultat. Tu dois faire lapider des jeunes filles nues par des petits vieux ? Qu\'à cela ne tienne, voilà qui sera amusant !<br/><div id="isRed">NB : Ne sera a priori pas joué à la rentrée.</div><br/>MJ : Jolan<br/><br/>';
	
	/* Pour afficher la liste des joueurs */
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "INS"';
	$req = $connexion->query($sql);
	echo 'Liste des joueurs : <br/>';
	echo '<div id=INSliste>';
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
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="INS" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="INS" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "INS"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>'
?>
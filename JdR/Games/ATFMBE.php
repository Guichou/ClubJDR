<!--<?php echo '<div class="header_02" id=gameTitle>All Flesh Must Be Eaten</div><br/><br/>'; ?> -->
	<img id="gameLogo" src="images/allfleshlogo.jpg" alt="image" width=450/>
	<?php echo
	'<div id="isRed">NB : Ne sera sûrement pas joué à la rentrée </div><br/>
	MJ : Sylvain<br/><br/>';
	/* Pour afficher la liste des joueurs */
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "AFMBE"';
	$req = $connexion->query($sql);
	echo 'Liste des joueurs : <br/>';
	echo '<div id=AFMBEliste>';
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
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="AFMBE" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="AFMBE" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "AFMBE"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>'
?>
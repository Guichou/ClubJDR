<img id="gameLogo" src="images/Shadelogo.jpg" alt="image" width=450/>
<?php echo '<br/>Ténébroso. Voici le nom donné à ceux dont l\'ombre s\'est éveillée. Seras-tu capable de revêtir ce nom afin de défendre tes intérêts sur les terres de Néolim ? Dans ce monde d\'une époque semblable à la renaissance, ton alliée de toujours, ton ombre, sera ta seule amie.<br/> <div id="isRed">NB : Sera joué ou pas à la rentrée. A voir avec Guillaume le MJ.</div><br/>
	MJ: Guillaume<br/><br/>';
	/* Pour afficher la liste des joueurs */
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "Shade"';
	$req = $connexion->query($sql);
	echo 'Liste des joueurs : <br/>';
	//echo '<div id=vampliste>';
	echo '<ul>';
	while($donnee = $req->fetch()){
		
			echo '<li> '; 
			
			echo $donnee['NOMJOUEUR'];
			
			echo '</li>';
	}
	//echo '</div>';
	echo '</ul>';
	
	/* Le formulaire pour ajouter un joueur */
	echo '<br/><br/>S\'inscrire à la table de jeu : <br/>'; 
	
	echo '<form method="post" action="addPlayer.php">
  
	<p>
		<label for="pseudo">Nom du joueur :</label><input id="boxPseudo "type="text" name="pseudo" id="pseudo"/>
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="Shade" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="Shade" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "Shade"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>'
?>
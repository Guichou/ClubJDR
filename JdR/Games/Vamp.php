	<img id="gameLogo" src="images/vampirelogo.jpg" alt="image" width=450/>
<?php echo '<br/><br/>Le bon vieux Dracula, c\'est du passé ! Les vampires d\'aujourd\'hui côtoient les humains tous les jours, sans que ceux-ci ne se doutent de leur existence. C\'est le principe de la Mascarade, concept que toi, vampire, va devoir défendre de tes crocs ! <br/><br/>   L\'histoire se déroule dans un univers plutôt sombre - et bien loin du monde gnan-gnan de Twilight - et toutes les époques sont possibles, même si l\'époque contemporaine est la préférée de nos MJs ;)  Le vampire que vous incarnez est partisan de la Camarilla, c\'est à dire qu\'il respecte l\autorité, contrairement aux vampires du Sabbat, qui ne considèrent les humains que comme de la bouffe. Vous aurez aussi de nombreaux autres adversaires, tels que les loups garous, les zombies et même certains humains extrémistes qui n\'hésiteront pas à vous planter un pieux dans le coeur !<br/><br/>
	MJs : Aurélie et Lucie<br/><br/>';
	/* Pour afficher la liste des joueurs */
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "Vampire"';
	$req = $connexion->query($sql);
	echo 'Liste des joueurs : <br/>';
	echo '<div id=vampliste>';
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
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="Vampire" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="Vampire" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "Vampire"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input  id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>';
?>
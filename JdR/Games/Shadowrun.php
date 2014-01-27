<!--<?php echo '<div class="header_02" id=gameTitle>All Flesh Must Be Eaten</div><br/><br/>'; ?> -->
	<img id="gameLogo" src="images/ShadowrunLogo.png" alt="image" width=450/>
	<?php echo
	'<br/><br/>Shadowrun se passe dans un univers futuriste uchronique et cyberpunk. Il s\'agit d\'une projection futuriste du monde des années 1990 et non d\'un univers totalement imaginaire. L\'action de la première édition se déroulait en 2050, mais la trame temporelle a évolué au fil des suppléments et des éditions, et la 4e édition se déroule ainsi en 2070. L\'univers est d\'ailleurs doté d\'un historique fouillé alliant économie et politique expliquant la succession d\'évènements qui ont eu lieu entre 1990 et 2070.<br/>
La grande originalité de ce jeu de rôle repose sur un Éveil de la magie survenu dans une société cyberpunk — donc axée sur la technologie. Cela signifie que la trame magique (endormie depuis des millénaires et dont nos légendes sont de lointains souvenirs) s\'est réveillée sur Terre et que des enfants normaux ont muté en elfes, nains, orks, trolls et autres créatures jusque là imaginaires. Par ailleurs, certains monstres de légendes comme les dragons sont réapparus et certaines personnes et/ou créatures apprennent à utiliser la magie dans leur quotidien.<br/>
Le monde de 2070 est dominé par les mégacorporations, multinationales ayant acquis le droit d\'entretenir leurs propres forces armées ainsi que l\'extraterritorialité et qui dictent leur politique à la plupart des pays. La technologie a grandement évolué depuis plusieurs décennies et les implants cybernétiques ou biotechnologiques sont désormais courants. Le monde virtuel de la matrice, qui a remplacé l\'internet, procure quant à lui une immersion sensorielle totale à ses utilisateurs et la quasi-totalité de la population mondiale l\'utilise quotidiennement.<br/><br/>MJ : John<br/><br/>';
	
	/* Pour afficher la liste des joueurs */
	$sql = 'SELECT * FROM repartition WHERE NOMJEU = "Shadowrun"';
	$req = $connexion->query($sql);
	echo 'Liste des joueurs : <br/>';
	echo '<div id=ShadowrunListe>';
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
		
		<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="Shadowrun" />
		
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input type="submit" value="Valider">
		
	</p>
	
		</form>';
	
	/* Le formulaire pour supprimer un joueur */
	echo '<form method="post" action="deletePlayer.php">
	
	<p>	
		<p>		
			<label for="jeu"></label><input type="hidden" name="jeu" id="jeu" value="Shadowrun" />

		</p>
			
		<select name="pseudo">
			<option value=""> ----- Choisir ----- </option>';
			$sql = 'SELECT * FROM repartition WHERE NOMJEU = "Shadowrun"';
			$req = $connexion->query($sql);
			while($donnee2 = $req->fetch()){
				
				echo '<option value='.$donnee2['NOMJOUEUR'].'>'.$donnee2['NOMJOUEUR'].'</option>';
			
			}echo '</form>
		</select>
		<input type="hidden" name="page" id="page" value="'.$_GET['page'].'" /><input id="bouton" type="submit" value="Supprimer" disabled>
	</form>
	</p>'
?>
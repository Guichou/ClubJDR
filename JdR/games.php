<div class="content_section">
	<div class="header_02">Donjons&amp;Dragons</div>
	<div class="image_wrapper_01"><img src="images/DD1.jpg" alt="image"  height="141" width="450"/></div>
	<p><span>Attrape ton sac à dos, tes bottes et ton épée et viens pourfendre des dragons avec nous. Incarne un redoutable guerrier craint des plus redoutables combattants orques, un magicien capable de faire pleuvoir la foudre ou un prêtre capable de terrasser les vampires et liches d'un simple regard. Être aventurier, c'est vraiment le pied. </span></br></p>
	<?php
		/*Fonction permettant d'afficher le nombre de joueurs, ainsi que le lien vers la page du jeu*/
		function displayGame($gameName,$connexion)
		{
			$sql = 'SELECT * FROM repartition WHERE NOMJEU ="'.$gameName.'"';
			$i=0;
			$req = $connexion->query($sql);
			while($donnee = $req->fetch()){
				$i++;
			}
			echo 'Nombre de joueurs : '.$i.'/5';
			echo '<div class="margin_bottom_20"></div>
			<div class="rc_btn_01 fl"><a href="index.php?page='.$gameName.'">En savoir plus...</a></div>
			<br/>
			<div class="margin_bottom_20 horizontal_divider"></div>
			<br/><br/>
	
			<div class="cleaner"></div> ';
		}
		
		displayGame("DD",$connexion);
	?>
	
	<div class="header_02">All Flesh Must Be Eaten</div>
	<div class="image_wrapper_01"><img src="images/AllFlesh.jpg" alt="image"  height="251" width="251"/></div>
	<p><span>Un Survival Post Apocalyptique avec plein de zombies !</span></br></p>
	<?php
		displayGame("ATFMBE",$connexion);
	?>
	
	<div class="header_02">La Légende des Cinq Anneaux</div>
	<div class="image_wrapper_01"><img src="images/L5Apresentation.jpg" alt="image"  height="251" width="251"/></div>
	<p><span>Dans l'univers des samouraïs et des ninjas, l'honneur compte parfois plus que la force...</span></br></p>
	<?php
		displayGame("LD5A",$connexion);
	?>
	
	<div class="header_02">Shadowrun</div>
	<div class="image_wrapper_01"><img src="images/Shadowrun.jpg" alt="image"  height="251" width="251"/></div>
	<p><span>Shadowrun se passe dans un univers futuriste uchronique et cyberpunk. Il s'agit d'une projection futuriste du monde des années 1990 et non d'un univers totalement imaginaire.Dans ce monde où se côtoient continuellement technologie et magie, les joueurs interprètent un shadowrunner, c'est-à-dire un mercenaire qui essaie de survivre en gagnant de l'argent lors de missions illégales plus ou moins difficiles qui leur sont confiées généralement par des mégacorporations voulant entraver le développement d'autres mégacorporations, mais aussi par des gouvernements, des organisations (légales ou criminelles) ou même par de riches particuliers. Ainsi, les shadowrunners (coureurs de l'ombre) font « le sale boulot » pour des employeurs dont ils ignorent tout en espérant être payés en retour.</span></br></p>
	<?php
		displayGame("Shadowrun",$connexion);
	?>
	
	<div class="header_02">Fuel Apocalypse</div>
	<div class="image_wrapper_01"><img src="images/FuelPresentation.png" alt="image"  height="200" width="200"/></div>
	<p><span> Survis dans ce monde post-apocalyptique délirant, dans un univers à la MadMax ou Waterworld !</span></br></p>
	<?php
		displayGame("Fuel",$connexion);
	?>
	
	<div class="header_02">Vampire, la Mascarade</div>
	<div class="image_wrapper_01"><img src="images/Vampirepresentation.jpg" alt="image"  height="200" width="200"/></div>
	<p><span>Le bon vieux Dracula, c'est du passé ! Les vampires d'aujourd'hui côtoient les humains tous les jours, sans que ceux-ci ne se doutent de leur existence. C'est le principe de la Mascarade, concept que toi, vampire, va devoir défendre de tes crocs !</span></br></p>
	<?php
		displayGame("Vamp",$connexion);
	?>
	
	<div class="header_02">Le Donjon de Naheulbeuk</div>
	<div class="image_wrapper_01"><img src="images/Naheulpresentation.jpg" alt="image"  height="200" width="200"/></div>
	<p><span> Marre des trucs sérieux ? Des héros héroïques ? Des compagnies propres sur elles ? Alors incarne un nain, un elfe, ou même un ogre et pars à l'aventure dans toute la terre de Fangh ! Les gobelins n'ont qu'à bien se tenir...</span></br></p>
	<?php
		displayGame("DDN",$connexion);
	?>
	
	<div class="header_02">Star Wars</div>
	<div class="image_wrapper_01"><img src="images/starwarspresentation.jpg" alt="image"  height="251" width="251"/></div>
	<p><span></span></br></p>
	<?php
		displayGame("StarWars",$connexion);
	?>
	
	<div class="cleaner"></div>    
	<div class="header_02">Shade</div>
	<div class="image_wrapper_01"><img src="images/Shadepresentation.jpg" alt="image"  height="251" width="251"/></div>
	<p><span>Ténébroso. Voici le nom donné à ceux dont l'ombre s'est éveillée. Seras-tu capable de revêtir ce nom afin de défendre tes intérêts sur les terres de Néolim ? Dans ce monde d'une époque semblable à la renaissance, ton alliée de toujours, ton ombre sera ta seule amie.</span></br></p>
	<div class="margin_bottom_20"></div>
	<?php
		displayGame("Shade",$connexion);
	?>

	<div class="header_02">In Nomine Satanis</div>
	<div class="image_wrapper_01"><img src="images/INSPresentation.jpg" alt="image"  height="251" width="251"/></div>
	<p><span>Tu aimes les héros et les gentils ? Alors trace ta route misérable ! Ici se rassemblent la crème des méchants sadiques psychopathes schyzophrènes obsédés et extrémistes. Oui, bienvenue chez nous, Démon. Ta tâche sera de dominer les hommes à l'aide de ton influence démoniaque, et tout cela à leur insu.</span></br></p>
	<?php
		displayGame("INS",$connexion);
	?>
</div>
<div class="margin_bottom_40"></div>
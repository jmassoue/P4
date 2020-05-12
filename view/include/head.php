<meta charset="utf-8" />
<meta name="viewport" content="width=device-width">
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Retrouver tous les chapitres de mon livre 'Billet simple pour l'Alaska' pour partager ce magnifique voyage ensemble"/>
<title>Billet simple pour l'Alaska</title>


<div class="container_menu">
	<nav class="nav justify-content-center nav-pills nav-justified flex-column flex-sm-row"> <!-- <576 px menu "hamburger" -->
		<a href="index.php" class="nav-link focus nav-item">Accueil</a>
		<a href="view/include/menu.php" class="nav-link focus nav-item">Tout les chapitres !</a>
		
		<?php if(isset($_SESSION['pseudo']) != NULL) { ?>
			<a href="index.php?action=disconnect" class="nav-link nav-item">Déconnexion</a>	
		<?php } else { ?>
			<a href="index.php?action=newMember" class="nav-link nav-item">Connexion</a>
		<?php } ?>
	</nav>
</div>

<?php 

?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css">
	<meta name="description" content="Retrouver tous les chapitres de mon livre 'Billet simple pour l'Alaska' pour partager ce magnifique voyage ensemble" />
	<title>Billet simple pour l'Alaska</title>
</head>

<body>
	<header class="container_menu">
		<nav class="nav justify-content-center nav-pills nav-justified flex-column flex-sm-row">
			<a href="index.php" class="nav-link focus nav-item">Accueil</a>
			<a href="view/include/menu.php" class="nav-link focus nav-item">Tous les chapitres !</a>
			
			<?php if(isset($_SESSION['pseudo']) != NULL) { ?>
				<a href="index.php?action=disconnect" class="nav-link nav-item">Déconnexion</a>	
			<?php } else { ?>
				<a href="index.php?action=newMember" class="nav-link nav-item">Connexion</a>
			<?php } ?>
		</nav>
	</header>
	<div class="containerLog">
		<h1 class="justify-content-center title">Connexion</h1>
		<div class="loginPage">
			<div class="offset-md-2 col-md-4 logMember justify-content-center">
				<form action="index.php?action=log" method="post">
					<p>
						Espace membre
						<br />
					</p>
					<label for="memberForm">Identifiant</label>
					<br />
					<input type="text" name="pseudo" placeholder="Utilisateur" width="30%" required>
					<br />
					<label for="mdpForm">Mot de passe</label>
					<br />
					<input type="password" name="password" placeholder="********" required>
					<br />
					<input type="submit" value="Connexion">
				</form>
			</div> 
			<div class="logNewUser offset-md-2 col-md-4 row">
				<form action="index.php?action=newMember" method="post">
					<p>
						Inscription
					</p>
					<label for="newUser">
						Identifiant
						<br />
						<input type="text" placeholder="Identifiant" name="pseudo" id="newUser" required />
						<br />
						<label for="newUserMdp">Mot de passe</label>
						<br />
						<input type="password" placeholder="********" id="newUserMdp" name="password" required />
						<br />
						<input type="submit" value="S'inscrire" />
					</label>
				</form>
			</div>
		</div>
	</div>
	
	<footer class="col-lg-12 footer">
		<?php include("view/include/footer.php"); ?>
	</footer>
</body>
</html>
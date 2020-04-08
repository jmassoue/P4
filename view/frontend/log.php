<?php 
 session_start();
 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<div class="container menu">
			<nav class="nav justify-content-center nav-pills nav-justified">
			 	<a href="../../index.php" class="nav-link focus nav-item">Accueil</a>
			 	<a href="../include/menu.php" class="nav-link focus nav-item">Tout les chapitres !</a>
			 	<a href="view/frontend/log.php" class="nav-link nav-item">Connexion</a>
			</nav>
		</div>
	</head>

	<body>
		<div class="container log">
			<h1 class="justify-content-center title"> Connexion</h1>
			<div class="login row">
				<div offset-md-2 col-md-4 logAdmin justify-content-center">
					<form action="index.php?action=log" methode="post">
						<p>
							Espace membre
							<br>
						</p>
						<label for="memberForm">Identifiant</label>
						<br>
						<input type="text" name="pseudo" id="memberForm" placeholder="Utilisateur" width="30%" value required>
						<br>
						<label for="mdpForm">Mot de passe</label>
						<br>
						<input type="password" name="password" id="mdpForm" placeholder="********" required>
						<br>
						<input type="submit" name="connexion" value="Connexion">
					</form>
				</div>
				<div class="logAdmin offset-md-2 col-md-4 row">
					<form action="index.php?action=log" method="post">
						<p>
							Inscription
						</p>
						<label for="newUser">
							Identifiant
							<br>
							<input type="text" placeholder="Identifiant" name="pseudo" id="newUser" required>
							<br>
							<label for="newUserMdp">Mot de passe</label>
							<br>
							<input type="password" placeholder="********" id="newUserMdp" name="password" required>
							<br>
							<input type="submit" value="S'inscrire">
						</label>
					</form>
				</div>
			</div>
		</div>
	<footer>
		<?php include("../include/footer.php"); ?>
	</footer>
    </body>
</html>
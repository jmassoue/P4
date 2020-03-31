<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("../include/head.php"); ?>
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
						<input type="text" name="login" id="memberForm" placeholder="Utilisateur" width="30%" value required>
						<br>
						<label for="mdpForm">Mot de passe</label>
						<br>
						<input type="password" name="mdp" id="mdpForm" placeholder="********" required>
						<br>
						<input type="submit" name="connexion" value="Connexion">
					</form>
				</div>
				<div class="logAdmin offset-md-2 col-md-4 row">
					<form action="index.php?action=inscription" method="post">
						<p>
							Inscription
						</p>
						<label for="newUser">
							Identifiant
							<br>
							<input type="text" placeholder="Identifiant" name="identifiant" id="newUser" required>
							<br>
							<label for="newUserMdp">Mot de passe</label>
							<br>
							<input type="password" placeholder="********" id="newUserMdp" name="mdp" required>
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
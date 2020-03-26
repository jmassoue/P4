<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		<div class="container menu">
		<nav class="nav justify-content-center nav-pills nav-justified">
			 <!--<?php include("view/include/menu.php"); ?> -->
			 <a href="index.php" class="nav-link focus nav-item">Accueil</a>
			 <a href="index.php?action=pageConnexion" class="nav-link nav-item">Connexion</a>
		</nav>
		</div>
		<img src="public/images/alaska.jpg" alt="photomontagnealaska" class="alaska col-lg-12">
		<h1> Les derniers chapitres de mon blog </h1>

		<?php
		while ($post = $postsHome->fetch())
		{
		?>
			<div class="news">
				<h2>
					<?= htmlspecialchars($post['title']) ?>
					<em> le <?= $post['date_creation'] ?></em>
				</h2>

				<p>
				<?= nl2br(htmlspecialchars($post['content'])); ?>

				<a href ="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">En savoir plus</a>
				<br/>
				</p>
			</div>
			<em><a href="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">Commentaires</a></em> 
		<?php
		}
		$postsHome->closeCursor();
		?>
		
		
		<footer>
			<?php include("view/include/footer.php"); ?>
		</footer>
	</body>
</html>
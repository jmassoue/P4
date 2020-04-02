<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		<img src="public/images/alaska.jpg" alt="photomontagnealaska" class="alaska col-lg-12">
		<h1> Les derniers chapitres du blog </h1>
<<<<<<< HEAD
		<br>
=======

>>>>>>> 3f3938132ad4069757855660105d314c1dfcc789
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
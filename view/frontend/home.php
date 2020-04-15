<?php 
 session_start();
 ?>
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
<<<<<<< HEAD
		<br>
=======
<<<<<<< HEAD
		<br>
=======
<<<<<<< HEAD
		<br>
=======

>>>>>>> 3f3938132ad4069757855660105d314c1dfcc789
>>>>>>> c6c4154db9e076d4329491b79f21a229ebcc21d1
>>>>>>> 8a4b9715fd411f8bf4689dba4434047aaf58f228
>>>>>>> 42b0be15a8a9f9f2364bfc9b42f5a243087e9de7
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
				<?= nl2br(html_entity_decode($post['content'])); ?>

				<a href ="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">En savoir plus</a>
				<br/>
				</p>
			</div>
			<em id="commentaires"><a href="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">Commentaires</a></em> 
		<?php
		}
		$postsHome->closeCursor();
		?>
		
		
		<footer>
			<?php include("view/include/footer.php"); ?>
		</footer>
	</body>
</html>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		
		<header>
			 <?php include("view/include/menu.php"); ?>
		</header>
			
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
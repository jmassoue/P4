<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="style.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
			integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<meta name="description"
			content="Retrouver tous les chapitres de mon livre 'Billet simple pour l'Alaska' pour partager ce magnifique voyage ensemble"/>
		<title>Billet simple pour l'Alaska</title>
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
			<em><a href="#">Commentaires</a></em> 
		<?php
		}
		$postsHome->closeCursor();
		?>
		
		
		<footer>
			<?php include("view/include/footer.php"); ?>
		</footer>
	</body>
</html>
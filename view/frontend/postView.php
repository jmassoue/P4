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

		<p><a href ="index.php">Retour à la liste des chapitres</a></p>
			
		<div class="news">
			<h3>
				<?= htmlspecialchars($postViewId['title']) ?>
				<em>le <?= $postViewId['date_creation'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($postViewId['content'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
		while ($comment = $commentsId->fetch());
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['user_id']) ?></strong> le <?= $comment['date_creation'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
        <?php
        }
        ?>
    	<footer>
			<?php include("view/include/footer.php"); ?>
		</footer>
    </body>
</html>
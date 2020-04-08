<?php 
 session_start();
 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		
	<div class="news">
		<h3>
			<?= htmlspecialchars($postViewId['title']) ?>
			<em>le <?= $postViewId['date_creation'] ?></em>
        </h3>
            
        <p>
            <?= nl2br(html_entity_decode($postViewId['content'])) ?>
        </p>
        <a href="index.php?action=update&amp;id_post=<?= $postViewId['id_post']?>" > Modifier</a> | <a href="index.php?action=delete&amp;id_post=<?= $postViewId['id_post']?>" > Supprimer</a>
    </div>

    <h2>Commentaires</h2>

    <form action="index.php?action=addComment&amp;id_post=<?= $postViewId['id_post'] ?>" method="post">
        <div>
            <label for="user_id">Auteur</label><br />
        	<input type="text" id="author" name="author" />
        </div>
        <div>
        	<label for="content">Commentaire</label><br />
        	<textarea id="content" name="content"></textarea>
        </div>
        <div>
        	<input type="submit" />
        </div>
    </form>

    <?php while($comment = $commentsId->fetch()):?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?=$comment['date_creation'] ?></p>
        <p> <?= nl2br(htmlspecialchars($comment['content'])) ?></p>
        <a href="index.php?action=reported&amp;id_comment=<?= $comment['id_comment']?>" > Signaler</a>

    <?php endwhile; ?>
    <footer>
		<?php include("view/include/footer.php"); ?>
	</footer>
    </body>
</html>
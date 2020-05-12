<?php 

?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

<head>
    <?php include("view/include/head.php"); ?>
</head>

<body>
    
    <h1><?= htmlspecialchars($postViewId['title']) ?></h1>
    <div class="containerNew">
        <h3>
            <em>le <?= $postViewId['date_creation'] ?></em>
        </h3>
        <div class="contentNew offset-lg-1 col-lg-10">    
            <p>
                <?= nl2br(html_entity_decode($postViewId['content'])) ?>
            </p>
            <?php if($_SESSION['role_id'] === '1') { ?>
                <a href="index.php?action=update&amp;id_post=<?= $postViewId['id_post']?>" > Modifier</a> | <a href="index.php?action=delete&amp;id_post=<?= $postViewId['id_post']?>" > Supprimer</a>
            <?php } ?>

        </div>
    </div>
    <div class="row justify-content-center containerComment">
        <div class="col-lg-3 addComment"> 
            <h2>Ajouter un commentaire</h2>

            <form action="index.php?action=addComment&amp;id_post=<?= $postViewId['id_post'] ?>" method="post">
                <div>
                    <label for="user_id">Auteur</label><br />
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="content">Commentaire</label><br />
                    <textarea id="content" name="content" placeholder="J'adore ce chapitre..."></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>
        </div>
        <div class="offset-lg-2 comment">
            <?php while($comment = $commentsId->fetch()):?>

                <h2>Commentaires</h2>
                <p><strong><?= htmlspecialchars($comment['author']) ?></strong></p>
                <p class="dateComment">le <?=$comment['date_creation'] ?></p>
                <p> <?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                <a href="index.php?action=reported&amp;id_comment=<?= $comment['id_comment']?>" > Signaler</a>

            <?php endwhile; ?>
        </div>
    </div>
    <footer class="col-lg-12 footer">
        <?php include("view/include/footer.php"); ?>
    </footer>
</body>
</html>
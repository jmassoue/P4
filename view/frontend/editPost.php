<?php 
 session_start();
 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		
		<h2>Posts</h2>

        <form action="index.php?action=update&amp;id_post=<?= $_GET['id_post']?>" method="post">
            <div>
                <label>Titre</label><br />
                <input type="text" id="titlePost" name="title" value="<?= $editPost['title'] ?>"/>
            </div>
            <div>
                <label for="content">Contenue</label><br />
                <textarea type="text" id="postmce" name="content"><?= $editPost['content'] ?></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>	
		<footer>
			<?php include("view/include/footer.php"); ?>
		</footer>
	</body>
</html>
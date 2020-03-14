<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		
		<header>
			 <?php include("view/include/menu.php"); ?>
		</header>

		<p><a href ="index.php">Retour à la liste des chapitres</a></p>
		
        <h2>Posts</h2>

        <form action="index.php?action=addPosts" method="post">
            <div>
                <label for="user_id"></label><br />
                <input type="text" name="user_id">
            </div>
            <div>
                <label>Titre</label><br />
                <input type="text" id="titlePost" name="title" />
            </div>
            <div>
                <label for="content">Contenue</label><br />
                <textarea id="postmce" name="content"></textarea>
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
<?php 

?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

<head>
	<?php include("view/include/head.php"); ?>
</head>

<body>
	<header class="container_menu">
		<nav class="nav justify-content-center nav-pills nav-justified flex-column flex-sm-row"> <!-- <576 px menu "hamburger" -->
			<a href="index.php" class="nav-link focus nav-item">Accueil</a>
			<a href="view/include/menu.php" class="nav-link focus nav-item">Tous les chapitres !</a>
			
			<?php if(isset($_SESSION['pseudo']) != NULL) { ?>
				<a href="index.php?action=disconnect" class="nav-link nav-item">Déconnexion</a>	
			<?php } else { ?>
				<a href="index.php?action=newMember" class="nav-link nav-item">Connexion</a>
			<?php } ?>
		</nav>
	</header>

	<img src="public/images/alaska.jpg" alt="photomontagnealaska" class="alaska col-lg-12">
	<div class="container_post">
		
		<h1 class="col-lg-12"> Les derniers chapitres du blog </h1>
		<?php
		if($_SESSION != NULL) {
			echo('Bonjour: ' . $_SESSION['pseudo']);
		}
		?>
		<br>
		<?php
		while ($post = $postsHome->fetch())
		{
		?>
			<div class="row">
				<div class="news col-lg-5">
					<h2><?= htmlspecialchars($post['title']) ?></h2> 
					<br>
					<h4 class="date"> le <?= $post['date_creation'] ?></h4>
					
					<p>
						<?= nl2br(html_entity_decode($post['content'])); ?>

						<a href ="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">En savoir plus</a>
						<br>
					</p>
					<em><a class="viewCommentaires" href="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">Commentaires</a></em>
				</div> 
			<?php
			}
			$postsHome->closeCursor();
			?>
			</div>		
	</div>
	
	
	<footer class="col-lg-12 footer">
		<?php include("view/include/footer.php"); ?>
	</footer>
</body>
</html>
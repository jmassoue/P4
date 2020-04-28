<?php 

?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

	<head>
		<?php include("view/include/head.php"); ?>
	</head>

	<body>
		<img src="public/images/alaska.jpg" alt="photomontagnealaska" class="alaska col-lg-12">
		<div class="container_post">
			
			<h1 class="col-lg-12"> Les derniers chapitres du blog </h1>
			<?php
			echo('Bonjour: ' . $_SESSION['pseudo']);
			?>
				<br>
				<?php
				while ($post = $postsHome->fetch())
				{
				?>
				<div class="row">
					<div class="news col-lg-5">
						<h2>
							<?= htmlspecialchars($post['title']) ?> <br>
							<h4 class="date"> le <?= $post['date_creation'] ?></h4>
						</h2>

						<p>
						<?= nl2br(html_entity_decode($post['content'])); ?>

						<a href ="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">En savoir plus</a>
						<br/>
						</p>
						<em><a id="commentaires" href="index.php?action=postViewId&amp;id_post=<?= $post['id_post'] ?>">Commentaires</a></em>
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
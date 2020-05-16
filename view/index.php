<?php 

?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <?php include("include/head.php"); ?>
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

	<footer class="col-lg-12 footer">
		<?php include("include/footer.php"); ?>
	</footer>
</body>
</html>
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

    <div class="containerUpdatePost">
        <h2 class="titleUpdate">Posts</h2>
        <div class="updatePage">
            <div class="col-lg-5 updatePost justify-content-center">
                <form class="containerPost" action="index.php?action=update&amp;id_post=<?= $_GET['id_post']?>" method="post">
                    <div>
                        <label>Titre</label>
                        <br />
                        <input type="text" id="titlePost" name="title" value="<?= $editPost['title'] ?>" />
                    </div>
                    <div>
                        <label for="content">Contenue</label>
                        <br />
                        <textarea type="text" id="postmce" name="content"><?= $editPost['content'] ?></textarea>
                    </div>
                    <br />
                    <br />
                    <div>
                        <input type="submit" class="valider" />
                    </div>
                </form> 
            </div>
        </div>
    </div>        
    <footer class="col-lg-12 footer">
        <?php include("view/include/footer.php"); ?>
    </footer>
</body>
</html>
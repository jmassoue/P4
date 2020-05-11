<?php 
session_start();

?>
<!DOCTYPE html> 
<html lang="fr">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
                integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
                content="Retrouver tous les chapitres de mon livre 'Billet simple pour l'Alaska' pour partager ce magnifique voyage ensemble"/>
    <title>Billet simple pour l'Alaska</title>
        <div class="container menu">
            <nav class="nav justify-content-center nav-pills nav-justified flex-column flex-sm-row">
                <a href="../../index.php" class="nav-link focus nav-item">Accueil</a>
                <?php if(isset($_SESSION['pseudo']) != NULL) { ?>
                <a href="../../index.php?action=disconnect" class="nav-link nav-item">Déconnexion</a> 
                <?php } else { ?>
                <a href="../../index.php?action=newMember" class="nav-link nav-item">Connexion</a>
                <?php } ?>
            </nav>
        </div>
    </head>

    <body>  
    <div class="container_sommaire"> 
         <h1>Les chapitres de mon aventures</h1> 
         <div class="EveryPosts"> 
            <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <?php if($_SESSION != NULL) {
                        if($_SESSION['role_id'] === '1') { ?>
                            <a href="../../index.php?action=comReported" class="everyPosts nav-link">Voir les commentaires signaler</a><?php } else {} } ?>
                        
                    </li>
                </ul>
            </div>
            <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <?php if($_SESSION != NULL) {
                         if($_SESSION['role_id'] === '1') { ?>
                            <a href="../../index.php?action=addPost" class="everyPosts nav-link">Créer un post</a><?php } else {} }?>
                    </li>
                </ul>
            </div>
            <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=21" class="everyPosts nav-link">Chapitre X</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=19" class="everyPosts nav-link">Chapitre IX</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=18" class="everyPosts nav-link">Chapitre VIII</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=17" class="everyPosts nav-link">Chapitre VII</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=16" class="everyPosts nav-link">Chapitre VI</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=15" class="everyPosts nav-link">Chapitre V</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=14" class="everyPosts nav-link">Chapitre IV</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=13" class="everyPosts nav-link">Chapitre III</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=12" class="everyPosts nav-link">Chapitre II</a>
                    </li>
                </ul>
            </div>
             <div class="chapter justify-content-center">
                <ul>
                    <li>
                        <a href="../../index.php?action=postViewId&id_post=11" class="everyPosts nav-link">Chapitre I</a>
                    </li>
                </ul>
            </div>
        </div>    
    </div>
    <footer class="col-lg-12 footer">
            <?php include("footer.php"); ?>
        </footer>
    </body>
</html>
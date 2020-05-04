<?php 

 ?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

    <head>
        <?php include("view/include/head.php"); ?>
    </head>

    <body>
        <div class="containerUpdatePost">
            <h2 class="titleUpdate">Posts</h2>
            <div class="updatePage">
                <div class="col-lg-5 updatePost justify-content-center">
                    <form class="containerPost" action="index.php?action=update&amp;id_post=<?= $_GET['id_post']?>" method="post">
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
                </div>
            </div>
        </div>        
    <footer class="col-lg-12 footer">
        <?php include("view/include/footer.php"); ?>
    </footer>
    </body>
</html>
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
                    <form class="containerPost" action="index.php?action=addPost" method="post">
                        <div>
                            <label for="user_id">Id du Post</label><br />
                            <input type="text" name="user_id">
                        </div>
                        <div>
                            <label>Titre</label><br />
                            <input type="text" id="titlePost" name="title" />
                        </div>
                        <div>
                            <label for="content">Contenue</label><br />
                            <textarea type="text" id="postmce" name="content"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="valider"/>
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
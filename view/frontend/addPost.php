<?php 
?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">
    <body>
        <header>
             <?php include("view/include/head.php"); ?>
        </header>

        <h2>Posts</h2>

        <form action="index.php?action=addPost" method="post">
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
                <textarea type="text" id="postmce" name="content"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form> 
        
        <footer class="col-lg-12 footer">
            <?php include("view/include/footer.php"); ?>
        </footer>
    </body>
</html>
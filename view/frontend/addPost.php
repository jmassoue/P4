<!DOCTYPE html> <!-- view -->
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <meta name="description"
            content="Retrouver tous les chapitres de mon livre 'Billet simple pour l'Alaska' pour partager ce magnifique voyage ensemble"/>
        <title>Billet simple pour l'Alaska</title>
    </head>

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
        
        <footer>
            <?php include("view/include/footer.php"); ?>
        </footer>
    </body>
</html>
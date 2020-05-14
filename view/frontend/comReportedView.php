<?php 

?>
<!DOCTYPE html> <!-- view -->
<html lang="fr">

<head>
    <?php include("view/include/head.php"); ?>
</head>

<body>
    
   <div class="row justify-content-center">
      <div class="col-lg-5 comment">
        <?php while($commentRpt = $commentsReport->fetch()):?>

            <h2>Commentaires signaler</h2>
            <p><strong><?= htmlspecialchars($commentRpt['author']) ?></strong></p>
            <p class="dateComment">le <?=$commentRpt['date_creation'] ?></p>
            <p> <?= nl2br(htmlspecialchars($commentRpt['content'])) ?></p>
            
        <?php endwhile; ?>
    </div>
</div>
<footer class="col-lg-12 footer">
    <?php include("view/include/footer.php"); ?>
</footer>
</body>
</html>
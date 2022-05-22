<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <script src="JS/index.js"></script>
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <link rel="icon" href="Image/logoOnglet.png">
    <script src="JS/CacherStock.js"></script>
    <script src="JS/nbArticle.js"></script>
    <script src="JS/ajaxStock.js"></script>
</head>

<?php
    include 'header.php';
?>

<body>
        <?php
            include 'divGauche.php';
        ?>
    <h2>Commandez vos accessoires de sport !</h2>

    <?php 
        include 'connexionBDD.php';
        requête("SELECT * FROM produit WHERE categorie LIKE '%accessoire%';");  //requête pour obtenir tt les produits de la catégorie accessoire
    ?>

    <form>
        <div id="cacherStock">
            <input id="btn-cacher" onclick='cacher()' value="Cacher le stock" type="button">
        </div>
    </form>
    
</body>

<footer>
    <div class="icons">
        <a href="www.twitter.fr"><i class="fab fa-twitter"></i></a>
        <a href="www.facebook.fr"><i class="fab fa-facebook"></i></a>
        <a href="www.instagram.fr"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

</html>
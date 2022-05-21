<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <title>Page d'accueil du site</title>
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <link rel="icon" href="Image/logoOnglet.png">

    <script src="JS/index.js"></script>
   
</head>

<?php

    include 'header.php';
 
?>



<body>
    <?php
        include 'divGauche.php';
    ?>

        <div class="content">
            <div id="imageAcceuil">
                <img src="Image/ImageAcceuil.png" alt="Image d'Acceuil">
            </div>

            <h2>Meilleures ventes</h2>
            <table>
                <tr>
                    <td class="produit"><img src="Image/ImpactWhey.jpg" alt="Impact Whey Proteine"></td>
                    <td>REF01</td>
                    <td>Description produit</td>
                    <td>20$</td>
                </tr>

                <tr>
                    <td class="produit"><img src="Image/clearWheyIso.jpg"></td>
                    <td>REF02</td>
                    <td>Description produit</td>
                    <td>20$</td>

                </tr>

            </table>
        </div>
    </div>
</body>

<footer>

    <div class="icons">
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>

</footer>


</html>
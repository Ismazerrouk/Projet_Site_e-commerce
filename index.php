<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <title>Page d'accueil du site</title>
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <link rel="icon" href="Image/logoOnglet.png">

    <script src="JS/index.js"></script>
    <!-- <script>
            function affiche(classe){
                var element = document.getElementsByClassName(classe);
                var etat = element.style.display;

                if(etat == none)
                    element.style.display = block;
                else
                    element.style.none;
            }
        </script> -->

</head>

<?php
include 'header.php';
?>

<!-- <header class="entete">
    <h1 id="logo"><a href="index.html"> FitProt </a></h1>
    <nav>
        <ul>
            <li><a href="index.html">Acceuil</a></li>
            <li class="deroulant"><a href="nutrition.html">Nutrition</a></li>
            <ul class="sous">
                        <li><a href="#">Protéines en poudre</a></li>
                        <li><a href="#">Barres protéinées</a></li>
                        
                    </ul> 

            <li class="deroulant"><a href="vetements.html">Vêtements</a></li>
             <ul class="sous">
                        <li><a href="#">Tee-shirt</a></li>
                    </ul> 
            <li><a href="accessoires.html">Accessoires</a></li>
            <li><a href="contact.html">Contactez nous</a></li>

        </ul>

    </nav>

    <div class="compte"><a href="#"><i class="far fa-user"></i> Se connecter </a></div>
    <div class="compte"><a href="#"><i class="fas fa-shopping-basket"></i>Panier</a></div>
</header> -->

<body>
    <div class="milieu">
        <div class="gauche">
            <div class="nav2">
                <div class="barre"></div>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li class="deroulant"><a href="nutrition.html">Nutrition</a></li>
                    <!-- <ul class="sous">
                        <li><a href="#">Protéines en poudre</a></li>
                        <li><a href="#">Barres protéinées</a></li>
                        
                    </ul> -->

                    <li class="deroulant"><a href="vetements.html">Vêtements</a></li>
                    <!-- <ul class="sous">
                        <li><a href="#">Tee-shirt</a></li>
                    </ul> -->
                    <li><a href="accessoires.html">Accessoires</a></li>
                    <li><a href="contact.html">Contactez nous</a></li>
                </ul>
            </div>
        </div>

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
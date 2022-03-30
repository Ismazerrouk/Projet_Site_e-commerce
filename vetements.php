<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <script src="JS/index.js"></script>
    <link rel="icon" href="Image/logoOnglet.png">
    <script src="JS/zoom.js"></script>
    <link rel="stylesheet" href="CSS/produits.css">
    <script src="JS/CacherStock.js"></script>
</head>

<?php

// $nom = 'pierrot';
// echo "aberrant l'$nom";
include 'header.php';

?>


<!-- <header class="entete">
    <h1 id="logo"><a href="index.html"> FitProt </a></h1>
    <nav>

        <ul>s
            <li><a href="index.html">Accueil</a></li>
            <li class="deroulant"><a href="nutrition.html">Nutrition</a></li>

            <li class="deroulant"><a href="vetements.html">Vêtements</a></li>

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
        <h2>Commandez vos vêtements de sport !</h2>
        <table>
            <tr>
                <td>Produit</td>
                <td>Réference</td>
                <td>Description du Produit</td>
                <td>Prix</td>
                <td class="stock">Stock</td>
            </tr>
            <tr>
                <td class="vetements"> <img src="Image/tshirtH.jpeg" alt="T-shirt d'entraînement pour Homme" onclick="zoom(this.id)" id="t-shirt"> </td>
                <td>REF01</td>
                <td>T-shirt d'entraînement pour Homme <br></br> Tailles: S,M,L,XL</td>
                <td>30$</td>
                <td class="stock">3</td>
            </tr>

            <tr>
                <td class="vetements"> <img src="Image/hautSurvetH.jpeg" alt="Sweat à capuche Homme" onclick="zoom(this.id)" id="hautSurvetH"> </td>
                <td>REF02</td>
                <td>Sweat à capuche pour Homme<br></br>Tailles: S,M,L,XL</td>
                <td>40$</td>
                <td class="stock">8</td>
            </tr>

            <tr>
                <td class="vetements"> <img src="Image/joggingH.jpeg" alt="Jogging pour Homme" onclick="zoom(this.id)" id="joggingH"> </td>
                <td>REF03</td>
                <td>Jogging pour Homme<br></br>Tailles: S,M,L,XL</td>
                <td>40$</td>
                <td class="stock">7</td>
            </tr>


            <tr>
                <td class="vetements"> <img src="Image/hautSurvetF.jpeg" alt="Sweat à capuche Femme" onclick="zoom(this.id)" id="hautSurvetF"> </td>
                <td>REF05</td>
                <td>Sweat à capuche pour Femme<br></br>Tailles: XS,S,M,L,XL</td>
                <td>40$</td>
                <td class="stock">14</td>
            </tr>

            <tr>
                <td class="vetements"> <img src="Image/joggingF.jpeg" alt="Jogging pour Femme" onclick="zoom(this.id)" id="joggingF"> </td>
                <td>REF06</td>
                <td>Jogging pour Femme<br></br>Tailles: XS,S,M,L,XL</td>
                <td>40$</td>
                <td class="stock">20</td>
            </tr>

        </table>
        <form>
            <div id="cacherStock">
                <input id="btn-cacher" onclick='cacher()' value="Cacher le stock" type="button">
            </div>
        </form>
</body>

<div id="divZoom">
    <i class="fa-solid fa-xmark" id="fermer" onclick="fermer()"></i>
    <div id="divImageZoom">
        <img src="" id="imageZoom" onclick="fermer()">
    </div>
</div>

<footer>
    <div class="icons">
        <a href="www.twitter.fr"><i class="fab fa-twitter"></i></a>
        <a href="www.facebook.fr"><i class="fab fa-facebook"></i></a>
        <a href="www.instagram.fr"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

</html>
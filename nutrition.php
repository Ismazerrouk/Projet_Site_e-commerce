<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <title>Page Nutrition</title>
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <script src="JS/index.js"></script>
    <link rel="icon" href="Image/logoOnglet.png">
    <script src="JS/zoom.js"></script>
    <link rel="stylesheet" href="CSS/produits.css">
    <script src="JS/CacherStock.js"></script>
    <script src="JS/nbArticle.js"></script>

</head>

<?php
include 'header.php'

?>



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
            <h2>Nos produits</h2>
            <table>
                <tr>
                    <td>Produit</td>
                    <td>Réference</td>
                    <td>Description du Produit</td>
                    <td>Prix</td>
                    <td class="stock">Stock</td>
                    <td>Commande</td>
                </tr>
                <tr>
                    <td class="produit"><img src="Image/clearWheyIso.jpg" alt="Impact Whey Proteine" onclick="zoom(this.id)" id="imageWhey"></td>
                    <td>REF01</td>
                    <td>Description produit</td>
                    <td>20$</td>
                    <td class="stock">10</td>
                    <td>
                        <input type="button" value="-" id="btn-1" onclick="moins(this.id)">
                        <span class="nb-article">0</span>
                        <input type="button" value="+" id="btn+1" onclick="plus(this.id)">
                        <input type="button" value="Ajouter au panier" id="btn-add-panier">

                    </td>
                </tr>

                <tr>
                    <td class="produit"><img src="Image/ImpactWhey.jpg" onclick="zoom(this.id)" id="imageWhey2"></td>
                    <td>REF02</td>
                    <td>Description produit</td>
                    <td>20$</td>
                    <td class="stock">11</td>
                    <td>
                        <input type="button" value="-" id="btn-2" onclick="moins(this.id)">
                        <span class="nb-article">0</span>
                        <input type="button" value="+" id="btn+2" onclick="plus(this.id)">
                        <input type="button" value="Ajouter au panier" id="btn-add-panier">

                    </td>

                </tr>
                <tr>
                    <td class="produit"><img src="Image/peanut.jpg" onclick="zoom(this.id)" id="peanutButter"></td>
                    <td>REF03</td>
                    <td>Description produit</td>
                    <td>5$</td>
                    <td class="stock">4</td>
                    <td>
                        <input type="button" value="-" id="btn-3" onclick="moins(this.id)">
                        <span class="nb-article">0</span>
                        <input type="button" value="+" id="btn+3" onclick="plus(this.id)">
                        <input type="button" value="Ajouter au panier" id="btn-add-panier">

                    </td>
                </tr>
                <tr>
                    <td class="produit"><img src="Image/creatine.png" onclick="zoom(this.id)" id="imageCreatine"></td>
                    <td>REF04</td>
                    <td>Description produit</td>
                    <td>15$</td>
                    <td class="stock">20</td>
                    <td>
                        <input type="button" value="-" id="btn-4" onclick="moins(this.id)">
                        <span class="nb-article">0</span>
                        <input type="button" value="+" id="btn+4" onclick="plus(this.id)">
                        <input type="button" value="Ajouter au panier" id="btn-add-panier">

                    </td>
                </tr>
                <tr>
                    <td class="produit"><img src="Image/Bcaa.jpg" onclick="zoom(this.id)" id="Bcaa"></td>
                    <td>REF05</td>
                    <td>Description produit</td>
                    <td>15$</td>
                    <td class="stock">2</td>
                    <td>
                        <input type="button" value="-" id="btn-5" onclick="moins(this.id)">
                        <span class="nb-article">0</span>
                        <input type="button" value="+" id="btn+5" onclick="plus(this.id)">
                        <input type="button" value="Ajouter au panier" id="btn-add-panier">

                    </td>
                </tr>

            </table>
        </div>
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
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>
</footer>



</html>
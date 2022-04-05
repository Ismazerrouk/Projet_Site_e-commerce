<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <script src="JS/index.js"></script>
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <link rel="icon" href="Image/logoOnglet.png">
</head>

<?php
include 'header.php';
?>

<body>
    <div class="milieu">
        <?php
        include 'divGauche.php';
        ?>
        <!-- <div class="gauche">
            <div class="nav2">
                <div class="barre"></div>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li class="deroulant"><a href="nutrition.php">Nutrition</a></li>


                    <li class="deroulant"><a href="#">Vêtements</a></li>

                    <li><a href="#">Accessoires</a></li>
                    <li><a href="contact.html">Contactez nous</a></li>
                </ul>
            </div> -->
    </div>
    <div class="content">
        <h2>Nos accessoires</h2>
        <table>
            <tr>
                <td class="accesoires"> <img src="Image/shaker.jpg" alt="shaker"> </td>
                <td>REF01</td>
                <td>Personnalisez votre gourde</td>
                <td>20$</td>
            </tr>

            <tr>
                <td class="accessoires"> <img src="Image/sac.jpg" alt="sac pour transporter vos affaires"> </td>
                <td>REF02</td>
                <td>Sac en bandouillière, pour transporter vos affaires de sport !</td>
                <td>15$</td>
            </tr>

            <tr>
                <td class="accesoires"> <img src="Image/wheel.jpg" alt="roue pour travailler les abdominaux"> </td>
                <td>REF03</td>
                <td>Roue pour travailler les abdominaux</td>
                <td>20$</td>
            </tr>

            <tr>
                <td class="accesoires"> <img src="Image/sangles.jpg" alt="Sangles pour améliorer le grip"> </td>
                <td>REF04</td>
                <td>Ces sangles sont en taille unique et sont parfaites pour soulever de lourdes charges pendant l'exercice, notamment le soulevé de terre et la position de descente.</td>
                <td>30$</td>
            </tr>

        </table>
    </div>
</body>

<footer>
    <div class="icons">
        <a href="www.twitter.fr"><i class="fab fa-twitter"></i></a>
        <a href="www.facebook.fr"><i class="fab fa-facebook"></i></a>
        <a href="www.instagram.fr"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

</html>
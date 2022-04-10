<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <title>Page de contact</title>
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <script src="JS/index.js"></script>
    <link rel="icon" href="Image/logoOnglet.png">
    <script src="JS/ErreurContact.js"></script>
</head>

<?php
include 'header.php';
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

                    <li class="deroulant"><a href="#">Vêtements</a></li>
                    <!-- <ul class="sous">
                            <li><a href="#">Tee-shirt</a></li>
                        </ul> -->
                    <li><a href="accessoires.html">Accessoires</a></li>
                    <li><a href="contact.html">Contactez nous</a></li>
                </ul>
            </div>
        </div>
        <h2>Contactez nous !</h2>
        <form>
            <div class="Gauche">
                <label>Nom</label> <br>
                <input id="Nom" placeholder="Nom"> <br>
                <span id="erreurMsg"></span>
            </div>
            <div class="Droite">
                <label>Prénom </label> <br>
                <input placeholder="Prénom" id="prenom">
                <span id="erreurMsgPrenom"></span>
            </div>
            <div class="Gauche">
                <label>Email</label> <br>
                <input type="email" placeholder="exemple : isma.zerrouk@gmail.com" id="Email"> <br>
                <span id="erreurMsgEmail"></span>
            </div>
            <div class="Droite">
                <label>Téléphone (optionnel)</label> <br>
                <input type="text" id="telephone"> <br>
                <span id="erreurMsgTelephone"></span>
            </div>
            <div class="grid-milieu">
                <textarea placeholder="Votre message !"></textarea><br><br>
            </div>
            <div class="Gauche1">
                <label>Femme</label><br>
                <input type="radio" name="sexe">
            </div>
            <div class="Droite1">
                <label>Homme</label> <br>
                <input type="radio" name="sexe">
            </div>

            <label>Date de contact :</label>
            <input type="date" id="Date de contact">
            <span id="erreurMsgContact"></span>
            <label>Date de Naissance :</label>
            <input type="date" id="Date de naissance">
            <span id="erreurMsgNaissance"></span>

            <div class="grid-milieu">
                <button type="button" onclick="erreur()">Envoyer</button>
            </div>


        </form>
</body>

<footer>


    <div class="icons">
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="www.facebook.fr"><i class="fab fa-facebook"></i></a>
        <a href="www.instagram.fr"><i class="fab fa-instagram"></i></a>
    </div>

</footer>


</html>
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
    <?php
    include 'divGauche.php';
    ?>

    <h2>Contactez nous !</h2>
    <form method="POST">
        <div class="Gauche">
            <label>Nom</label> <br>
            <input id="Nom" name="nom" placeholder="Nom" required> <br>
            <span id="erreurMsg"></span>
        </div>

        <div class="Droite">
            <label>Prénom </label> <br>
            <input placeholder="Prénom" name="prenom" id="prenom"> <br>
            <span id="erreurMsgPrenom"></span>
        </div>
        <div class="Gauche">
            <label>Email</label> <br>
            <input type="email" name="email" placeholder="Votre Email" id="Email"> <br>
            <span id="erreurMsgEmail"></span>
        </div>
        <div class="Droite">
            <label>Téléphone (optionnel)</label> <br>
            <input type="text" name="telephone" id="telephone"> <br>
            <span id="erreurMsgTelephone"></span>
        </div>
        <div class="grid-milieu">
            <textarea placeholder="Votre message !" name="usermessage"></textarea><br><br>
        </div>
        <div class="Gauche1">
            <label>Femme</label><br>
            <input type="radio" name="gender">
        </div>
        <div class="Droite1">
            <label>Homme</label> <br>
            <input type="radio" name="gender">
        </div>

        <label>Date de contact :</label>
        <input type="date" id="Date de contact" name="user_date_contact"> <br>
        <span id="erreurMsgContact"></span>
        <label>Date de Naissance :</label>
        <input type="date" id="Date de naissance" name="user_date"> <br>
        <span id="erreurMsgNaissance"></span>

        <div class="grid-milieu">
            <button type="submit" name='formsend' onclick="erreur()">Envoyer</button>
        </div>


    </form>


</body>
    <?php
        include 'contactVerif.php';
    ?>
<footer>


    <div class="icons">
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="www.facebook.fr"><i class="fab fa-facebook"></i></a>
        <a href="www.instagram.fr"><i class="fab fa-instagram"></i></a>
    </div>

</footer>


</html>
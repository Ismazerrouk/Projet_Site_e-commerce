<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <title>Connectez vous !</title>
</head>
<?php
    session_start();
    include 'header.php';
    if(isset($_POST["valider"])){
    $file = "JSON/connexions.json";
    $data = file_get_contents($file); 
    $tab = json_decode($data,true);
    @$valid = $_POST["valider"];
    @$id = $_POST["id"];
    @$mdp = $_POST["mdp"];
    @$_SESSION["identifiant"] = $_POST["id"];
    print_r($tab);
    if(isset($valid)){
        for($i=0;$i<count($tab); $i++){
            if ($id == $tab[$i]["id"] &&  $mdp == $tab[$i]["mdp"]){
                $_SESSION["verif"] = "oui";
                header("location:deconnexion.php");
        }
     
        }
    }
}
?>
<body>
    <?php
        include 'divGauche.php';
    ?>

    <form action="connexion.php" method="POST">

            <label>Identifiant </label> 
            <label>Mot de passe </label> 
            <input id="identifiant" name="id" placeholder="identifiant"  required> 
            <input id="mdp" name="mdp" placeholder="mot de passe" required>
            <span id="erreurMsg"></span>
            <span id="erreurMsgPrenom"></span>
            <div class="grid-milieu">
            <button type="submit" name='valider' >Envoyer</button>
            <a href="CreationCompte.php">Créer un compte ?</a>
            </div>

    </form>


</body>


<footer>

    <div class="icons">
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    </div>

</footer>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <title>CreationCompte</title>
</head>
<?php
    session_start();
    include 'header.php';
    if(isset($_POST['valider'])){
        $file = "JSON/connexions.json";
        $data = file_get_contents($file); 
        $tab = json_decode($data,true);
        @$_SESSION["identifiant"] = $_POST["id"];
        @$mdp = $_POST['mdp'];
        @$id = $_POST['id'];
        $array = Array(
        "id" => $id,
        "mdp" => $mdp);
        //$nameJson = json_encode($mdp);
        //$idJson = json_encode($id);
        array_push($tab, $array);
        $arrayJson = json_encode($tab);
        file_put_contents($file,$arrayJson);
        $_SESSION["verif"] ="oui";
        if($_SESSION["verif"] == "oui"){
            header("location: deconnexion.php");
        }
    }
    //file_put_contents($file,$nameJson,FILE_APPEND);
    
?>
<body>  
    <h2>Rejoignez-nous ! Créer-vous un compte FITPROT !</h2>
    <?php
        include 'divGauche.php';
    ?>
    <form action="" method="POST">

    <label>Identifiant</label> 
    <label>Mot de passe</label> 
    <input id="identifiant" name="id" placeholder="identifiant"  required> 
    <input id="mdp" name="mdp" placeholder="mot de passe" required>
    <div class="grid-milieu">
            <button type="submit" name='valider'>Envoyer</button>
    </div>

</form>
</body>
</html>
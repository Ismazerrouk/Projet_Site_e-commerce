<?php
    session_start();
    if(@$_SESSION["verif"] == "non"){
        header("location: connexion.php");
        exit();
    }
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/site.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <title>Panier</title>
</head>

<?php
    include 'header.php';
?>

<body>
    
<h2>Bonjour <?php if(isset($_SESSION["identifiant"])) {echo $_SESSION["identifiant"];} ?> </h2>
    <?php
        include 'divGauche.php';
    ?>
    <form action="" method="POST">

        <label>Identifiant </label>

        <label>Mot de passe </label> 
        
        <a href="logout.php">Se déconnecter</a>

    </form>

</body>
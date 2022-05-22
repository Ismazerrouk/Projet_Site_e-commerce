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
    <script src="https://kit.fontawesome.com/6ba91b490a.js" crossorigin="anonymous"></script>
    <title>Panier</title>
</head>

<?php
    include 'header.php';
?>

<body>
    <?php
        include 'divGauche.php';
    ?>
    <h2>Votre panier </h2>

    <?php
        echo $_SESSION["ref"];
        

    ?>
</body>
</html>
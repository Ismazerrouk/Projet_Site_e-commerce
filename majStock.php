<?php
    $servname = 'localhost';
    $dbname = 'fitprot';
    $user = 'root';
    $pass = 'eisti0001';
    
    $id = $_POST["ref"];
    $nombreArticles = $_POST["stock"];
    $qte_dmd=$_POST["qte"];
    
        try{
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo $nombreArticles;

        $sql = "UPDATE produit SET stock = ? WHERE ref = ?";
        $req = $dbco->prepare($sql);
        $res = $req->execute(array($nombreArticles - $qte_dmd, $id));
        
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }
?>
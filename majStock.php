<?php
    $servname = 'localhost';
    $dbname = 'fitprot';
    $user = 'root';
    $pass = 'eisti0001';
    
    $id = $_GET["ref"];
    $nombreArticles = $_GET["stock"];
        try{
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        

        $sql = 'UPDATE produit SET stock = ? WHERE ref = ?';
        $req = $dbco->prepare ($sql);
        $res = $req->execute(array($stock, $id));
        
        if ($res === true) {
            echo 'ok';
        }
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }
?>
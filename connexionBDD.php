<!DOCTYPE html>
<html>
 <?php
            function requête($sql){ //prend en paramètre la requête
                $servname = 'localhost';
                $dbname = 'fitprot';
                $user = 'root';
                $pass = 'eisti0001';
                
                try{
                    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                   // $sql = "SELECT *
                   // FROM produit;";
                        
                    // Exécution de la requête
                    $stmt = $dbco->prepare($sql);
                    $stmt->execute();
                    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH); // fetchAll() car PLUSIEURS LIGNES récupérées
                    echo"<table>
                    <tr>
                    <td>Produit</td>
                    <td>Réference</td>
                    <td>Description du Produit</td>
                    <td>Prix</td>
                    <td class='stock'>Stock</td>
                    <td>Commande</td>
                    </tr>";
                    $i = 1;
                    foreach( $rowAll as $row )
                    {
                        
                        echo "
                        <tr>
                        <td class='vetements'> <img src =".$row['image']." alt='T-shirt d'entraînement pour Homme' onclick='zoom(this.id)' id='t-shirt'> </td>
                        <td class='ref'>".$row['ref']."</td>
                        <td>".$row['description']."</td>
                        <td>".$row['prix']."</td>
                        <td class='stock'>".$row['stock']."</td>
                        <td>
                        <input type='button' value='-' id='btn-".$i."' onclick='moins(this.id)'>
                        <span class='nb-article'>0</span>
                        <input type='button' value='+' id='btn+".$i."' onclick='plus(this.id)'>
                        <input type='submit' value='Ajouter au panier' id='btn-add-panier".$i."' onclick=MajStock(this)>
                        </td>
                        </tr>";
                        $i++;

                    }
                    echo'</table>';
                    
                }
                


                catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
                }
            }
        ?>
</html>
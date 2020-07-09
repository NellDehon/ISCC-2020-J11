<!DOCTYPE html>
<html>
<?php
function connect_to_database(){
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename ="BaseTest01";
try {
 $pdo = new PDO ("mysql:host=$servername; dbname=$databasename", $username);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 echo "Connected successfully";
 return $pdo;
}catch (PDOException $e) {
 echo "Connection failed: ". $e->getMessage();
 }
}
?>
<?php
$ctd = connect_to_database();

$stmt = $ctd->prepare ('INSERT INTO Produit (Id, Nom, Description, Prix, Quantité) VALUES(8, "T-shirt noir", "T-shirt coton de couleur noire", 15.50, 10) ') ;
$stmt->execute();
?>

</html>

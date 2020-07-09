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
 
$stmt = $ctd->prepare ('UPDATE  Produit SET Quantité = 1 WHERE Nom LIKE "%Short bleu%"');
$stmt->execute();
?>
</html>
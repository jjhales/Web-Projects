<?php
$user = "root";
$pass = "root";
$db = new PDO('mysql:host=localhost;dbname=ssl; port=8889', $user, $pass);
$id = $_GET['id'];
$stmt = $db->prepare("DELETE FROM fruits where id IN (:id)");

$stmt->bindParam(':id', $id);
$stmt->execute();
header('Location: fruitads.php'); //redirects back to the original fruits page 
die();
?>
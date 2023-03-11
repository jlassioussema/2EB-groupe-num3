<?php



$pdo = new PDO('mysql:host=localhost;dbname=cilent', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('SELECT * FROM ct');
$stmt->execute();

?>
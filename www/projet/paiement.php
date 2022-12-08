<?php
//connexion
require('login.php');

session_start();
$r1 = $_POST['r1'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$CodePostal = $_POST['code_postal'];
$Ville = $_POST['ville'];
$adress = $_POST['adress'];
$tel = $_POST['tel'];
var_dump($_POST);
$req = " INSERT INTO paiement (r1,nom,prenom,code_postal,ville,email,tlp_mobile) VALUES ($r1,$nom,$prenom,$CodePostal,$Ville,$adress,$tel)";
$res = mysqli_query($conn, $req);

if ($res) {
      echo 'paiement réussi';
} else
      echo 'Erreur : verifier votre coordonnées';
header('acceuil.html');


?>
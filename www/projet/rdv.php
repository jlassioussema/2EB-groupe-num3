<?php
//connexion
require('login.php');

session_start();

$s = $_POST['s'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$msg = $_POST['msg'];


$req = "INSERT INTO rdv (s,nom,prenom,mail,telephone,msg) VALUES ($s,$nom,$prenom,$email,$telephone,$msg)";
$res = mysqli_query($conn, $req);

if ($res) {
    echo 'information sent';
} else
    echo 'error : verify your informations';



?>
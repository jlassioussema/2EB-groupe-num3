<?php

session_start();
require('login.php');

$email = $_POST['email'];
$_SESSION['email'] = $email;
$motdepasse = $_POST['motdepasse'];

var_dump($_POST);
$req = "SELECT * FROM utlisateur WHERE email='$email' and mot_de_passe ='$motdepasse' ";

$res = mysqli_query($conn, $req);
if (mysqli_num_rows($res) == 1) {
    $t = mysqli_fetch_assoc($res);
    echo "non executer";
    header('location:acceuil.html');




}













?>
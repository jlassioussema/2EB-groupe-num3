<?php
require('login.php');

$nom = $_POST['nom'];

$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
$type = $_POST['type'];

$req = "INSERT INTO utlisateur (nom,email,mot_de_passe,type) VALUES ('$nom','$email','$motdepasse','$type')";
$res = mysqli_query($conn, $req);
if ($res) {
    echo "<div>
    <h3>vous ete inscrit </h3>
    <p>cliquer ici pour connecter <a href='creer.php'>connecter</a></p>
    </div>";

} else
    echo "requette non executer";

header('location:orienter.php');





?>
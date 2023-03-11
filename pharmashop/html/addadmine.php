<?php
require_once 'configuration.php';
require_once 'user_class.php';
$cin = $_POST['cin'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$civilite = $_POST['civilite'];
$mot_de_passe = $_POST['mot_de_passe'];
$ville = $_POST['ville'];




$stmt = $pdo->prepare("INSERT INTO admi (cin,prenom,nom, email,civilite,mot_de_passe,ville) VALUES (:cin,:prenom,:nom, :email,:civilite,:mot_de_passe,:ville)");


$stmt->bindParam(':cin', $cin);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':civilite', $civilite);
$stmt->bindParam(':mot_de_passe', $mot_de_passe);
$stmt->bindParam(':ville', $ville);

if ($stmt->execute()) {
    echo "Votre données sont enregistrés.";
    header('location:index2.php');
} else {

    echo "Erreur : Desolé saisir votre donnée.";

}
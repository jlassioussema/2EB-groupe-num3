<?php
require_once 'configuration.php';


// récupérer les données du formulaire
$email = $_POST['email'];
$role = $_POST['role'];
$mot_de_passe = $_POST['mot_de_passe'];


// Requête pour récupérer l'utilisateur correspondant au nom d'utilisateur et au mot de passe saisis
if ($role == "client") {
    $query = "SELECT * FROM ct WHERE email = :email AND mot_de_passe = :mot_de_passe";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':mot_de_passe', $mot_de_passe);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        header('Location: principale1.php');
    } else {
        echo "Email ou mot de passe incorrect.";
    }
} else {
    $query = "SELECT * FROM admi WHERE email = :email AND mot_de_passe = :mot_de_passe";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':mot_de_passe', $mot_de_passe);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        header('Location: index2.php');
    } else {
        echo "Email ou mot de passe incorrect.";
    }

}

?>
?>
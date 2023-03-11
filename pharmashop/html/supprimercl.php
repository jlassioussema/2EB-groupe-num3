<?php
require_once 'configuration.php';
// Vérification si le formulaire de suppression a été soumis
if (isset($_POST['delete_row'])) {
    // Récupération de l'cin de la ligne à supprimer
    $cin = $_POST['delete_row'];

    // Préparation de la requête SQL pour supprimer la ligne correspondante
    $query = $pdo->prepare('DELETE FROM ct WHERE cin = :cin');

    // Remplacement du paramètre :cin par la valeur de l'cin
    $query->bindParam(':cin', $cin, PDO::PARAM_INT);

    // Exécution de la requête
    if ($query->execute()) {
        // Si la suppression est réussie, redirection vers la page d'accueil
        header('Location: index2.php');
        exit;
    } else {
        // Si la suppression échoue, affichage d'un message d'erreur
        echo 'Erreur lors de la suppression.';
    }
}

?>
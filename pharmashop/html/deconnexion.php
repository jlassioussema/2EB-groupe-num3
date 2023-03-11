<?php
// Code pour traiter la déconnexion
session_start(); // Démarrer la session
session_unset(); // Supprimer toutes les variables de session
session_destroy(); // Détruire la session

// Redirection vers la page de connexion
header('Location: index.php');
exit;
?>
<?php

require_once 'configuration.php';

// Préparation de la requête SQL pour récupérer les données
$query = $pdo->prepare('SELECT * FROM ct');

// Exécution de la requête
$query->execute();

// Récupération des données
$data = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<style>
    table {
        margin: 0 auto;
        width: 100%;
    }

    table td {
        text-align: center;
    }

    <style>table {
        margin: 0 auto;
        width: 100%;
    }

    table td {
        text-align: center;
    }
</style>

<table border=2>
    <thead>
        <tr>
            <th>CIN</th>
            <th>prénom</th>
            <th>nom</th>
            <th>Email</th>
            <th>civilité</th>
            <th>Ville</th>
            <th>mot de passe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td>
                    <?= $row['cin'] ?>
                </td>
                <td>
                    <?= $row['prenom'] ?>
                </td>
                <td>
                    <?= $row['nom'] ?>
                </td>
                <td>
                    <?= $row['email'] ?>
                </td>
                <td>
                    <?= $row['civilite'] ?>
                </td>
                <td>
                    <?= $row['ville'] ?>
                </td>
                <td>
                    <?= $row['mot_de_passe'] ?>
                </td>
                <td>
                    <form method="post" action="supprimercl.php">
                        <input type="hidden" name="delete_row" value="<?= $row['cin'] ?>">
                        <button type="submit">Supprimer</button>
                    </form>






                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
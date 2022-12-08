<?php

define('serveur', 'localhost');
define('utilisateur', 'root');
define('motdepasse', '');
define('base', 'user');


$conn = mysqli_connect(serveur, utilisateur, motdepasse, base);

if ($conn == false) {
    die("erreur:impossible de se connecter " . mysqli_connect_error());

} else {
    echo "vous ete connecter";
}
?>
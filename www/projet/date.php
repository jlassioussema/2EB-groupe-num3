<?php

$dayofweek = date("w");
switch ($dayofweek) {
    case 1:
        echo "shop est ouvert";
        break;
    case 2:
        echo "shop est ouvert";
        break;
    case 3:
        echo "shop est ouvert";
        break;
    case 4:
        echo "shop est ouvert";
        break;
    case 5:
        echo "shop est ouvert";
        break;
    case 6:
        echo "shop est ferme !";
        break;
    case 0:
        echo "shop est ferme !";
        break;
}
?>
<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8" />
    <title>horaire</title>
    <link rel="StyleSheeta" type="text/css" href="style.css" />
</head>

<body>
    <action="date.php" methode="post">
        </action>

</body>

</html>
<?php

session_start();
require('login.php');
$namep = $_POST('namep');
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$render = $_POST['render'];



$sql = "INSERT INTO pet (namep,mail,telephone,renderv ) VALUES ('$namep','$mail','$telephone','$render')";


$res = mysqli_query($conn, $sql);
if ($res) {
    echo "votre-render vous est confirmer";

} else
    echo "requette non executer";






?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" lang="fr">
    <title> pets beauty centre </title>

    <link rel="stylesheet" href="coiffure.css">
    <script src="java.js"></script>
</head>

<body>

    <div class="d0">
        <header class="main-head">
            <nav>
                <h1 id="logo"> PAWERFUL</h1>
                <ul>
                    <li><a href="acceuil.html">welcome</a></li>
                    <li><a href="catalogue.html">Our products</a></li>
                    <il><a href="veterinaire.html">veterinary space</a></il>
                    <li><a href="coiffure.html">animal hairstyle</a></li>
                </ul>
            </nav>
        </header>
        <div class="classe1">
            <div class="d9">
                <h1 class="siwar">A professional grooming salon for your pet</h1>
                <h3 class="fa"> we are not selling just a haircut
                    we selling love and care to your pet
                </h3>
            </div>





            <div class="d1">
                <form name="f1" action="pet.php" method="post">
                    <p> login in </p>
                    <label>name's pet</label>
                    <input type="text" name="namep" max="20" placeholder="name" required="required" id="p"
                        onchange="verif()">

                    <script> function verif() {
                            nom = document.getElementById("p").value;
                            exp = /[a-zA-Z]/;
                            if (exp.test(nom) == false)
                                alert("invalid !");
                        }</script>
                    <br>
                    <label>e-mail</label>
                    <input type="email" name="email" max="20" placeholder="email" required="required"><br>
                    <label> télèphone number</label>
                    <input type="tel" name="telephone" max="8" placeholder="phone number" required="required" id="c"
                        onchange="passe()"><br>
                    <script>function passe() {
                            nom = document.getElementById("c").value;
                            exp = /[1-9]/;
                            if (exp.test(nom) == false)
                                alert("check your number!");
                        }
                    </script>
                    <label>date</label>
                    <input type="date" name="rendezvous"> <br>

            </div>
            <input class="btn" type="submit" name="s1" value="envoyer" onclick="my()">
            <script> function my() {
                    alert("we recieved your reponse ! we will call you as soon as possible")
                } </script>






            <div class="d2"> <u>
                    <h2> our offeres</h2>
                </u>
                <table border="1">
                    <tr>
                        <td> dog hair styles </td>
                        <td>price </td>
                    </tr>
                    <tr>
                        <td>puppy cut </td>
                        <td>35 </td>
                    </tr>
                    <tr>
                        <td>teddy bear cut </td>
                        <td>30 </td>
                    </tr>
                    <tr>
                        <td>lion cut </td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td> poodle cut </td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>others </td>
                        <td>10 </td>
                    </tr>
                </table>
            </div>











            </form>
        </div>
        <br>click here to choose your payment method</br>
        <a href="paiement.html">
            <button>payment</a></button>
    </div>


    </div>

    <footer>
        <a href="rendezvous.html">
            <br><button>For more information</a></button></br>
    </footer>
</body>

</html>
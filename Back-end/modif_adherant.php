<?php
define("host", "localhost");
define("username", "root");
define("password", "");
$dbname = "Gestion_biblio";


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$status = $_POST['status'];
$email = $_POST['email'];
$id = $_POST['id'];


echo $nom . $prenom . $adresse . $status . $email . $id;

$request = "UPDATE adherents SET nom='$nom', prenom='$prenom', adresse='$adresse', statue='$status', email='$email' WHERE id_adherent='$id'";
$connect = mysqli_connect(host, username, password, $dbname); //connect to db 


if (!$connect)
    die("Connection failed: " . mysqli_connect_error()); //check for connection


if (mysqli_query($connect, $request)) {
    mysqli_close($connect);
    echo "adh. modifié";
} else
    die("request failed" . mysqli_error($connect));



?>
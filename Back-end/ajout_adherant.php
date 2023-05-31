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




$request = "INSERT INTO adherents (nom,prenom,adresse,statue,email) VALUES('$nom','$prenom','$adresse','$status','$email')";
$connect = mysqli_connect(host, username, password, $dbname); //connect to db 


if (!$connect)
    die("Connection failed: " . mysqli_connect_error()); //check for connection




if (mysqli_query($connect, $request)) {
    mysqli_close($connect);
}

echo $status;




?>
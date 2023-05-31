<?php
define("host", "localhost");
define("username", "root");
define("password", "");
$dbname = "Gestion_biblio";


$titre = $_POST['Titre'];
$auteur = $_POST['Auteur'];
$editeur = $_POST['Editeur'];
$nbr_pages = $_POST['nbrpages'];
$nbr_exmpl = $_POST['nbrexampl'];
$id = $_POST['id'];



$request = "UPDATE livres SET Titre='$titre', Auteur='$auteur', maison_Edition='$editeur', nbr_Pages='$nbr_pages', nbr_Exemplaire='$nbr_exmpl',id_livre='$id' WHERE id_livre='$id'";
$connect = mysqli_connect(host, username, password, $dbname); //connect to db 


if (!$connect)
    die("Connection failed: " . mysqli_connect_error()); //check for connection


if (mysqli_query($connect, $request)) {
    mysqli_close($connect);
}



?>
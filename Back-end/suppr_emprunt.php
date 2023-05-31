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




$request = "DELETE FROM emprunt WHERE id_emprunt='$id'";
$connect = mysqli_connect(host, username, password, $dbname); //connect to db 


if (!$connect)
    die("Connection failed: " . mysqli_connect_error()); //check for connection


if (mysqli_query($connect, $request)) {
    mysqli_close($connect);
}


echo "elem deleted livre" . $id;



?>
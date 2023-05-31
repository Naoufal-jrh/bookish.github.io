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



$request = "INSERT INTO livres(Titre,Auteur,maison_Edition,nbr_Pages,nbr_Exemplaire) VALUES('$titre','$auteur','$editeur','$nbr_pages','$nbr_exmpl')";
$connect = mysqli_connect(host, username, password, $dbname); //connect to db 


if (!$connect)
    die("Connection failed: " . mysqli_connect_error()); //check for connection




if (mysqli_query($connect, $request)) {
    mysqli_close($connect);
}






?>
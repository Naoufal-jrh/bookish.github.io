<?php
define("host", "localhost");
define("username", "root");
define("password", "");
$dbname = "Gestion_biblio";

$id_adherent = $_POST['id_adherent'];
$id_livre = $_POST['id_livre'];
$date_emprunt = $_POST['date_emprunt'];

$connect = mysqli_connect(host, username, password, $dbname);

$selectQuery = "SELECT nbr_emprunts FROM adherents WHERE id_adherent = $id_adherent";
$result = mysqli_query($connect, $selectQuery);
$row = mysqli_fetch_assoc($result);
$NbrEmprunts = $row['nbr_emprunts'];

if ($NbrEmprunts < 5) {
    $insertQuery = "INSERT INTO emprunt(id_adherent, id_livre, date_emprunt) VALUES ('$id_adherent', '$id_livre', '$date_emprunt')";
    mysqli_query($connect, $insertQuery);

    $updateQuery = "UPDATE adherents SET nbr_emprunts = nbr_emprunts + 1 WHERE id_adherent = $id_adherent";
    mysqli_query($connect, $updateQuery);


} elseif ($NbrEmprunts + 1 > 5) {
    echo $NbrEmprunts;
    http_response_code(400);




}

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($connect);
?>
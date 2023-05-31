<?php
//first let's hash the password
$hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
//conncet to db :
$db = require("dbConnection.php");
$sqlQuery = "INSERT INTO admin (nom,prenom,email,mot_de_passe_hash) VALUES (?,?,?,?)";

$stmt = $db->stmt_init();
//check if there is a problem with the query
if(! $stmt->prepare($sqlQuery)){
  die("SQL error : ".$db->error);
}

$stmt->bind_param("ssss",$_POST["Nom"],$_POST["Prenom"],$_POST["Email"],$hashed_password);

//check if the account is allready on the database
if($stmt->execute()){
  header("Location: ../INDEX/signup_success.html");
  exit;
}else{

  if($db->errno === 1062){//email deplucated
    header("Location: ../INDEX/signup_failed.html");
  }else{
    die($db->error . " " . $db->errno);
  }
}
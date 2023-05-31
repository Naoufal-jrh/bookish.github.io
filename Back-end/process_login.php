<?php

$email = $_POST['email'];
$password = $_POST['password'];

//connect to database
$db = require("dbConnection.php");

$sql = sprintf("SELECT * FROM admin WHERE email = '%s'",$email);

$result = $db->query($sql);

$user = $result->fetch_assoc();

if($user && password_verify($password,$user["mot_de_passe_hash"])){
    //login succesful
     session_start();
     //enregistrer l'identifiant de l'admin 
     $_SESSION["user_id"] = $user["id"];

     header("Location: ../INDEX/index.php");
     exit;

    }else{
      //login problem
    header("Location: ../INDEX/login_failed.html");
  }





?>
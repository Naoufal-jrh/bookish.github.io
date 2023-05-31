<?php
session_start();
if(isset($_SESSION['user_id'])){
  $db = require("../Back-end/dbConnection.php");
  $sql = sprintf("SELECT * FROM admin WHERE id = '%d'",$_SESSION['user_id']);
  $result = $db->query($sql);
  $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/profile_style.css" />
  <title>Document</title>
</head>

<body>

  <?php include("../PHP/nav_bar.php");?>

  <div class="container">
    <div class="card">
      <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"
        style="width: 100px">
      <h1><?php echo ucfirst($user['nom']) . " " . ucfirst($user['prenom'])?></h1>
      <p class="title">Bibliothécaire</p>
      <h5>Email</h5>
      <p><?php echo $user['email'] ?></p>
    </div>

  </div>





</body>

</html>
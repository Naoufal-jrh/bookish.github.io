<?php
session_start();
if(!isset($_SESSION["user_id"])){
  header("Location: authentication.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400&display=swap"
    rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
  <!-- jquery table library-->



  <title>Bookish</title>


</head>

<body>

  <?php
  //including the navbar
  include('../PHP/nav_bar.php');
  ?>

  <div class="row">
    <?php
    //including the side menu
    include('../PHP/side_menu.php');
    ?>

    <main class="col-xl-10 col-lg-10 removePd  " id="content">
      <!--  ici va figuer le contenu principale du site  -->
      <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        text-align: center;
      }

      h1 {
        color: #333;
        font-size: 32px;
        margin-top: 100px;
      }

      p {
        color: #666;
        font-size: 18px;
        margin-bottom: 30px;
      }

      .button {
        background-color: #4CAF50;
        color: #fff;
        padding: 12px 30px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        text-decoration: none;
      }

      .button:hover {
        background-color: #45a049;
      }
      </style>
      <h1>Bienvenue dans <strong>Bookish</strong></h1>
      <p>Gérez votre bibliothèque de manière efficace et sans effort.</p>
      <a class="button"
        onclick="loadContent('../PHP/list_livre.php','content'); removeContentFrom('.modify','#content')"
        aria-current="page" href="#">voir la liste des livres</a>
    </main>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="../JS/script.js"></script>
</body>

</html>
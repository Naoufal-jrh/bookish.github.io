<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <title>Bookish</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg topnav ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bookish</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".sidemenu"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="../CSS/burger-menu-svgrepo-com.svg " width='30' height='30'></span>
      </button>

      <div class="collapse navbar-collapse navbar_links sidemenu ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">log out</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>


  <div class="row">
    <nav class="navbar  navbar-expand-lg col-xl-2 col-lg-2 removePd sideMenexparent ">

      </button>

      <div class="collapse navbar-collapse sidemenu  " id="sideMenex">
        <ul class="nav flex-column  ">
          <li class="nav-item">
            <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target=".livredrop"
              aria-expanded="false">Gestion livres</button>
          </li>
          <li class="nav-item collapse livredrop">
            <a class="nav-link active dropex " onclick="change('index')" aria-current="page" href="#">Livres</a>
          </li>

          <li class="nav-item collapse livredrop">
            <a class="nav-link dropex" onclick="change('modifier')" href="#">Ajouter/Modifier Livre</a>
          </li>

          <li class="nav-item">
            <button class="btn btn-toggle " data-bs-toggle="collapse" data-bs-target=".adherantdrop"
              aria-expanded="false">Adherants</button>
          </li>

          <li class="nav-item collapse adherantdrop">
            <a class="nav-link dropex" href="#">Liste Adherents</a>
          </li>
          <li class="nav-item collapse adherantdrop">
            <a class="nav-link dropex" href="#">Ajouter Adherent</a>
          </li>
          <li class="nav-item collapse adherantdrop">
            <a class="nav-link dropex " href="#">Modifier Adherent</a>
          </li>

          <li class="nav-item ">
            <button class="btn btn-toggle " data-bs-toggle="collapse" data-bs-target=".empruntdrop"
              aria-expanded="false">Emprunts</button>
          </li>
          <li class="nav-item collapse empruntdrop">
            <a class="nav-link active dropex" aria-current="page" href="index.html">Listes Emprunts</a>
          </li>
          <li class="nav-item collapse empruntdrop">
            <a class="nav-link dropex" href="#">Historique</a>
          </li>
          <li class="nav-item collapse empruntdrop">
            <a class="nav-link dropex" href="#">Rendre Livre</a>
          </li>
        </ul>
      </div>


    </nav>

    <main class="col-xl-10 col-lg-10 removePd " id="contentBox">








    </main>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <script>
    function change(link) {

      let main = document.getElementById("contentBox");
      switch (link) {


        case "modifier": {
          main.innerHTML = (`<?php echo file_get_contents('http://localhost/v1%20copy/HTML/modifex.html') ?>`);


          break;

        }
        case "ajout": {
          main.innerHTML = (`<?php echo file_get_contents('http://localhost/v1%20copy/HTML/ajout.html') ?>`);


          break;

        }
        case "index": {
          main.innerHTML = (`<?php echo file_get_contents('http://localhost/v1%20copy/HTML/livres.html') ?>`);


          break;

        }

        default: {
          main.innerHTML = (`<?php echo file_get_contents('http://localhost/v1%20copy/HTML/livres.html') ?>`);

          break;

        }

      }
    }
  </script>




</body>


</html>
<div class="container-fluid table-container fade-in-left">




  <table class="table table-hover  table-secondary table-striped-columns datatable" id="table_livre"
    style="text-align: center">
    <thead class="table-dark rounded-5">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Editeur</th>
        <th scope="col">Nbr pages</th>
        <th scope="col">Nbr exemplaires</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>



      <?php
      define("host", "localhost");
      define("username", "root");
      define("password", "");
      $dbname = "Gestion_biblio";

      $request = "SELECT * FROM livres";
      $connect = mysqli_connect(host, username, password, $dbname); //connect to db 
      $result = mysqli_query($connect, $request);

      if (!$connect)
        die("Connection failed: " . mysqli_connect_error()); //check for connection
      



      while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        foreach ($row as $value) { //print each value into table
          echo "<td>$value</td>";
        }
        echo "<td>
          <button class=\"btn btn-outline-primary\" onclick=\"addContent('../PHP/modifier_livre.php','content');showModifiableElement(this,'modif_livre'); \">
            Modifier</button><button class=\"btn btn-outline-danger\"
            onclick=\"addContent('../PHP/supprimer_livre.php','content');collectIDLivre(this)\">Supprimer</button>
               </td></tr>"; // ajouter modifier et supprimer bouttons 
      }


      ?>

    </tbody>
  </table>


</div>
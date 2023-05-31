<div class="container-fluid table-container fade-in-left">


  <table class="table table-hover table-secondary table-striped-columns datatable" id="table_adherant"
    style="text-align: center">
    <thead class="table-dark rounded-5">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Status</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      define("host", "localhost");
      define("username", "root");
      define("password", "");
      $dbname = "Gestion_biblio";

      $request = "SELECT id_adherent, nom ,prenom, adresse, statue, email FROM adherents";
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
          <button class=\"btn btn-outline-primary\" onclick=\"addContent('../PHP/modifier_adherant.php','content');showModifiableElement(this,'modif_adherant'); \">
            Modifier</button><button class=\"btn btn-outline-danger\"
            onclick=\"addContent('../PHP/supprimer_adherant.php','content');collectIDadherant(this)\">Supprimer</button>
               </td></tr>";
      }


      ?>


    </tbody>
  </table>

</div>
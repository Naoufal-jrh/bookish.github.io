<div class="container-fluid table-container fade-in-left">
    <table class="table table-hover table-secondary table-striped-columns datatable" id="table_historique"
        style="text-align: center">
        <thead class="table-dark rounded-5">
            <tr>
                <th scope="col">Id Emprunt</th>
                <th scope="col">Id Adherent</th>
                <th scope="col">Id Livre</th>
                <th scope="col">Date d'emprunt</th>
                <th scope="col">Date limite</th>
                <th scope="col">Date de retour</th>
                <th scope="col">Pénalité</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            <?php
            define("host", "localhost");
            define("username", "root");
            define("password", "");
            $dbname = "Gestion_biblio";

            $request = "SELECT * FROM emprunt";
            $connect = mysqli_connect(host, username, password, $dbname); // Connect to the database
            $result = mysqli_query($connect, $request);

            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error()); // Check for connection
            }

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $value) { //print each value into table
                    echo "<td>$value</td>";
                }
                echo "<td><button class=\"btn btn-outline-danger\"
                onclick=\"addContent('../PHP/supprimer_emprunt.php','content');collectIDemprunt(this)\">Supprimer</button>
                   </td>
                   </td>
                   </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
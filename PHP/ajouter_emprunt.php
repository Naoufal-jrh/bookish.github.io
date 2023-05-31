<div class="scale-in-center modify">
    <form method="post" action="../back-end/ajout_emprunt.php" id="ajout_emprunt" class="container-sm m-sm-2">
        <legend>Ajouter un Emprunt</legend>
        <!-- <div class="col-md-7 col-sm-8">
            <label for="id_adherent" class="form-label">ID Adherent</label>
            <input required type="number" class="form-control" name="id_adherent" />
        </div>
        <div class="col-md-7 col-sm-8">
            <label for="id_livre" class="form-label">ID Livre</label>
            <input required type="number" class="form-control" name="id_livre" />
        </div> -->




        <?php
        define("host", "localhost");
        define("username", "root");
        define("password", "");
        $dbname = "Gestion_biblio";

        $request = "SELECT id_Livre FROM livres";
        $request2 = "SELECT id_adherent FROM adherents";

        $connect = mysqli_connect(host, username, password, $dbname); //connect to db 
        $result = mysqli_query($connect, $request);
        $result2 = mysqli_query($connect, $request2);


        if (!$connect)
            die("Connection failed: " . mysqli_connect_error()); //check for connection
        


        echo "<div class=\"col-md-7 col-sm-8\">
        <label for=\"select_livre\" class=\"form-label\">ID Livre</label>
        <select id=\"select_livre \" required class=\"form-select\" name=\"id_livre\">";
        while ($row = mysqli_fetch_row($result)) {
            foreach ($row as $value) { //print each value into table
                echo "<option value=\"$value\">$value</option>";
            }

        }
        echo "</select> </div>";


        echo "<div class=\"col-md-7 col-sm-8\">
        <label for=\"select_adherent\" class=\"form-label\">ID Adherent</label>
        <select id=\"select_adherant \" required class=\"form-select\" name=\"id_adherent\">";
        while ($row = mysqli_fetch_row($result2)) {
            foreach ($row as $value) { //print each value into table
                echo "<option value=\"$value\">$value</option>";
            }

        }
        echo "</select> </div>";



        ?>
















        <div class="col-md-7 col-sm-8">
            <label for="date_emprunt" class="form-label">Date d'emprunt</label>
            <input required type="date" class="form-control" name="date_emprunt" />
        </div>


        <div class="col-md-6 col-sm-8 buttons mt-3">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <button type="button" class="btn btn-secondary"
                onclick="removeContentFrom('.modify', '#content')">Annuler</button>
        </div>
    </form>
</div>
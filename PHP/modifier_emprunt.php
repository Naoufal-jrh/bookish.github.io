<div class="scale-in-center modify">
    <form method="post" action="../back-end/modif_emprunt.php" id="modif_emprunt" class="container-sm m-sm-2">
        <legend>Modifier un Emprunt</legend>
        <div class="col-md-7 col-sm-8 visually-hidden">
            <label for="id" class="form-label">ID</label>
            <input required type="number" class="form-control " name="id" />
        </div>
        <div class="col-md-7 col-sm-8">
            <label for="id_adherent" class="form-label">ID Adherent</label>
            <input required type="number" class="form-control" name="id_adherent" />
        </div>
        <div class="col-md-7 col-sm-8">
            <label for="id_livre" class="form-label">ID Livre</label>
            <input required type="number" class="form-control" name="id_livre" />
        </div>
        <div class="col-md-7 col-sm-8">
            <label for="date_emprunt" class="form-label">Date d'emprunt</label>
            <input required type="date" class="form-control" name="date_emprunt" />
        </div>
        <div class="col-md-7 col-sm-8">
            <label for="date_limite" class="form-label">Date limite</label>
            <input type="date" class="form-control" name="date_limite" />
        </div>
        <div class="col-md-7 col-sm-8">
            <label for="date_retour" class="form-label">Date de retour</label>
            <input type="date" class="form-control" name="date_retour" />
        </div>

        <div class="col-md-6 col-sm-8 buttons mt-3">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <button type="button" class="btn btn-secondary"
                onclick="removeContentFrom('.modify', '#content')">Annuler</button>
        </div>
    </form>
</div>
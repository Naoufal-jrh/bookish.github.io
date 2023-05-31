<div class=" scale-in-center modify ">


  <form class="container-sm m-sm-2" method="post" action="../back-end/modif_adherant.php" id="modif_adherant">

    <legend>Modifier un Adhérant</legend>
    <div class="col-md-7 col-sm-8 visually-hidden">
      <label for="id" class="form-label">ID</label>
      <input required type="number" class="form-control " name="id" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" name="nom" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" class="form-control" name="prenom" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="adresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" name="adresse" />
    </div>

    <div class="col-md-7 col-sm-8">
      <label class="form-label">Status</label>
      <select class="form-select" name="status">
        <option selected value=""></option>

        <option value="etudiant">Etudiant</option>
        <option value="enseignant">Enseignant</option>
      </select>
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" name="email" />
    </div>

    <div class="container-sm buttons mt-3">
      <button type="submit" class="btn btn-primary">Modifier</button>
      <button type="button" class="btn btn-secondary" onclick="removeContentFrom('.modify','#content')">Annuler</button>
    </div>

  </form>
</div>
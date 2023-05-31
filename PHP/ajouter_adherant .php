<div class="scale-in-center modify ">



  <form class="container-sm m-sm-2" method="post" action="../back-end/ajout_adherant.php" id="ajout_adherant">

    <legend>Ajouter un Adhérant</legend>

    <div class="col-md-7 col-sm-8">
      <label for="nom" class="form-label">Nom</label>
      <input required placeholder="entrez  nom" type="text" class="form-control" name="nom" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="prenom" class="form-label">Prénom</label>
      <input required placeholder="entrez  prénom" type="text" class="form-control" name="prenom" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="adresse" class="form-label">Adresse</label>
      <input required placeholder="entrez  adresse" type="text" class="form-control" name="adresse" />
    </div>

    <div class="col-md-7 col-sm-8">
      <label class="form-label">Status</label>
      <select required class="form-select" name="status">
        <option aria-placeholder="okex" selected value=""></option>

        <option value="etudiant">Etudiant</option>
        <option value="enseignant">Enseignant</option>
      </select>
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="email" class="form-label">email</label>
      <input required placeholder="entrez email" type="email" class="form-control" name="email" />
    </div>

    <div class="col-md-6 col-sm-8 buttons mt-3">
      <button type="submit" class="btn btn-primary">Ajouter</button>
      <button type="button" class="btn btn-secondary" onclick="removeContentFrom('.modify','#content')">Annuler</button>

    </div>

  </form>

</div>
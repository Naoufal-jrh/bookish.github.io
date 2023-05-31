<div class="scale-in-center modify ">



  <form method="post" action="../back-end/ajout_livre.php" id="ajout_livre" class="container-sm m-sm-2">

    <legend>Ajouter un Livre</legend>
    <div class="col-md-7 col-sm-8">
      <label for="Titre" class="form-label">Titre</label>
      <input required type="text" class="form-control" name="Titre" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="inputEmail4" class="form-label">Auteur</label>
      <input required type="text" class="form-control" name="Auteur" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="Editeur" class="form-label">Editeur</label>
      <input required type="text" class="form-control" name="Editeur" />
    </div>


    <div class="col-md-7 col-sm-8">
      <label for="nbrpages" class="form-label">Nombre pages</label>
      <input required type="number" class="form-control" name="nbrpages" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="nbrexampl" class="form-label">Nombre exemplaires</label>
      <input required type="number" class="form-control" name="nbrexampl" />
    </div>

    <div class="col-md-6 col-sm-8 buttons mt-3">
      <button type="submit" class="btn btn-primary">Ajouter</button>
      <button type="button" class="btn btn-secondary" onclick="removeContentFrom('.modify','#content')">Annuler</button>

    </div>

  </form>

</div>
<div class=" scale-in-center modify ">


  <form class="container-sm m-sm-2" method="post" action="../back-end/modif_livre.php" id="modif_livre">

    <legend>Modifier un Livre</legend>
    <div class="col-md-7 col-sm-8 visually-hidden">
      <label for="id" class="form-label">ID</label>
      <input required type="number" class="form-control " name="id" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="Titre" class="form-label">Titre</label>
      <input required type="text" class="form-control" name="Titre" />
    </div>
    <div class="col-md-7 col-sm-8">
      <label for="Auteur" class="form-label">Auteur</label>
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

    <div class="container-sm buttons mt-3">
      <button type="submit" class="btn btn-primary">Modifier</button>
      <button type="button" class="btn btn-secondary" onclick="removeContentFrom('.modify','#content')">Annuler</button>
    </div>

  </form>
</div>
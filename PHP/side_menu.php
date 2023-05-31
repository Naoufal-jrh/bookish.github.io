<nav class="navbar  navbar-expand-lg col-xl-2 col-lg-2 removePd sideMenexparent ">

  </button>

  <div class="collapse navbar-collapse sidemenu  " id="sideMenex">
    <ul class="nav flex-column  ">
      <li class="nav-item">
        <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target=".livredrop"
          aria-expanded="false">Gestion livres</button>
      </li>
      <li class="nav-item collapse livredrop">
        <a class="nav-link active dropex "
          onclick="loadContent('../PHP/list_livre.php','content'); removeContentFrom('.modify','#content')"
          aria-current="page" href="#">Livres</a>
      </li>

      <li class="nav-item collapse livredrop">
        <a class="nav-link dropex"
          onclick="removeContentFrom('.modify','#content'); addContent('../PHP/ajouter_livre.php','content'); "
          href="#">Ajouter
          Livre</a>
      </li>

      <li class="nav-item">
        <button class="btn btn-toggle " data-bs-toggle="collapse" data-bs-target=".adherantdrop"
          aria-expanded="false">Adherants</button>
      </li>

      <li class="nav-item collapse adherantdrop">
        <a class="nav-link dropex"
          onclick="loadContent('../PHP/list_adherant.php','content'); removeContentFrom('.modify','#content')"
          href="#">Liste
          Adherents</a>
      </li>
      <li class="nav-item collapse adherantdrop">
        <a class="nav-link dropex"
          onclick="removeContentFrom('.modify','#content'); addContent('../PHP/ajouter_adherant .php','content')"
          href="#">Ajouter <!--  remove previous content if exists (see fct) -->
          Adherent</a>
      </li>


      <li class="nav-item">
        <button class="btn btn-toggle " data-bs-toggle="collapse" data-bs-target=".empruntdrop"
          aria-expanded="false">Emprunts</button>
      </li>

      <li class="nav-item collapse empruntdrop">
        <a class="nav-link dropex"
          onclick="loadContent('../PHP/list_emprunt.php','content'); removeContentFrom('.modify','#content')"
          href="#">Liste
          Emprunts</a>
      </li>
      <li class="nav-item collapse empruntdrop">
        <a class="nav-link dropex" id="ajouter_emprunt"
          onclick="removeContentFrom('.modify','#content'); addContent('../PHP/ajouter_emprunt.php','content');"
          href="#">Ajouter
          Emprunt</a>
      </li>
      <li class="nav-item collapse empruntdrop">
        <a class="nav-link dropex"
          onclick="loadContent('../PHP/historique_emprunt.php','content'); removeContentFrom('.modify','#content')"
          href="#">Historique
        </a>
      </li>



    </ul>
  </div>


</nav>
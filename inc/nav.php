<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>



            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-info" href=">admin/gestion_membre.php">Gestion Membre</a></li>
              </ul>
            </li>

                    
          <li class="nav-item">
            <a class="nav-link text-danger" href="deconnexion.php">Deconnexion</a>
          </li>


          <li class="nav-item">
            <a class="nav-link text-success" href="inscription.php">Inscription</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-warning" href="connexion.php">Connexion</a>
          </li>



      </ul>
    </div>
  </div>
</nav>


<!-- Si je suis connecté : 
    profil
    deconnexion

    Si je suis Admin : 
      Admin 
Sinon 
    inscription
    connexion -->
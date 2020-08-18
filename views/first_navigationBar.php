<?php
$url = ($the_page === "index" || $the_page === "") ? "index.php" : "../index.php";
$urlPanier = ($the_page === "index" || $the_page === "") ? "views/panier.php" : "panier.php";
$urlConnexion = ($the_page === "connexion" || $the_page === "panier") ? "connexion.php" : "views/connexion.php";

?>

<nav class="navbar navbar-expand-lg row header_title navbar navbar-light" style="background-color: #e3f2fd;">
  
  <a class="navbar-brand" href="<?= $url ?>">E-Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse connect_div" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item femmes">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            femmes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            hommes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown enfants">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            enfants
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    <form class="form-inline my-2 my-lg-0" style="margin-right: 10px">
      <input class="form-control mr-sm-2 recherche" type="search" placeholder="recherche un article" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
      <?php if(!$connect_success){?>
      <button class="btn btn-outline-primary pannier_button"><a href="<?= $urlPanier ;?>"><i class="fas fa-cart-plus"></i> voir pannier</a></button>
      <button class="btn btn-outline-primary profil_button "><a href="<?= $urlConnexion ?>"><i class="fas fa-user"></i> profil</a></button>
    <?php }else{ ?>
      <button class="btn btn-outline-primary "><a href="<?= $urlConnexion ?>">connexion / inscription</a></button>
      <?php } ?>
        
  </div>
</nav>
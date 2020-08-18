<?php
$the_page = "connexion";
include_once("head_link.php");
include_once("first_navigationBar.php");
//include_once("../models/Database.php");


?>
<head>
  <link rel="stylesheet" href="../views/styles/styles.css">
</head>
<div class="formulaire">
  <div class="title_connect">
    <ol class="row connect_list">
      <li class="col-lg-2" id="connexion">connexion</li>
      <li class="col-lg-2"id="inscription">inscription</li>
      <li  class="col-lg-3"id="mdp_forgot">mot de passe oublié ?</li>
    </ol>
  </div>
  <div id="fleche"><a class="pointeur"><i class="fas fa-sort-up fa-3x"></i></a></div>

  <div class="allInputs">
    <form action="" method="post">
      <input class="form-control form-control-lg firstInput outInConnexion allOfUs" type="text"  id= "name_inscription" placeholder="Nom" required/>
      <div class="error-name error"></div>
      <input class="form-control form-control-lg inputButton allOfUs InConnexion " type="email" id= "email_inscription" placeholder="Exemple@gmail.com" required />
      <div class="error-email error"></div>
      <input class="form-control form-control-lg inputButton allOfUs InConnexion " type="password" id= "password_inscription" placeholder="Mot de passe" required />
        <div class="error-password error"></div>
      <input class="form-control form-control-lg inputButton allOfUs outInConnexion" type="password" id= "confirmPassword_inscription" placeholder="Confirmation mot de passe" required />
        <div class="error-confirmPassword error"></div>
      <input class="form-control form-control-lg inputButton mdp_" type="text" id= "forgot_passwordEmail" placeholder="Entrez votre email" required />
      <button type="button" class="btn btn-outline-primary btn-lg validBtn">ENVOYER</button>
    </form>
  </div>
    <script src="javascript/script.JS"></script>
    <script src="javascript/inscription.js"></script>
</div>

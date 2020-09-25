<?php
session_start();
$the_page = "connexion";
include_once("head_link.php");
include_once("first_navigationBar.php");
$notif= "";
if (isset($_SESSION['user_name'])) {
  $name = $_SESSION['user_name'];
  $notif =  "<p><i class='fa fa-check-circle'> </i> vous êtes connecté(e) bienvenue dans votre espace <strong>".ucfirst($name)."</strong></p>";
} else {
   $notif = "<h1>cette page ne peut vous être afficher car vous n'êtes pas connecté(e) </h1>";
   return $notif;
}
//unset($_SESSION["user_name"]);
?>
<head>
  <link rel="stylesheet" href="../views/styles/styles.css">
</head>
<div class="notification-connexion ">
    <?= $notif ?> 
</div>

<script src="javascript/script.JS"></script>
<script src="javascript/inscription.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    
     $(".notification-connexion").fadeIn(4000);
   
  


  });
</script>
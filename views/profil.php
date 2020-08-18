<?php
require '../models/Database.php';
  use models\Database;
   $db = new Database('eshop');
function check_email() {
  GLOBAL $db;
   $db->connect();
  if(isset($_POST['check_email'])){  
    $emailUser = $_POST['check_email'];
    $emailExist = $db->selectAnEmail($emailUser);
    if ($emailExist == 0) {
        //ici l'email n'existe pas donc il peut être enregistrer
        echo json_encode(array('error' => 'email_success'));
    } else {
          // l'utilisateur est deja en base de données
        echo json_encode(array('error' => 'email_error', 'message' => 'cet email existe déjà! ')); 
      }
  }
}
check_email();




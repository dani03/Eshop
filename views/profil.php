<?php
session_start();
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

function getValueFrom(){
  GLOBAL $db;
  if(isset($_GET['id']) && $_GET['id'] === 'true'){
     $name = $_POST['userName'];
     $email = $_POST['userEmail'];
     $password = password_hash($_POST['userMDP'], PASSWORD_DEFAULT);
     $theEmail = $db->selectAnEmail($email);
     if( $theEmail == 0){
      $db->insertUser($name, $email, $password);
     } else {
      echo json_encode(['response' => 'error', 'msg' => 'success.php']);
     }
     
     


  }
   
   
}
getValueFrom();




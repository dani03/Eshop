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
      if($theEmail == 0){
        $db = new PDO('mysql:host=localhost;dbname=eshop;', 'root', 'rootpassy3');
        $query = $db->prepare("INSERT INTO utilisateurs(nameUser, email_user, user_password) VALUES(:nom,:email,:mot_de_passe)");
      
        $query->execute([
          "nom" => $name,
          "email" => $email,
          "mot_de_passe" => $password
        ]);
         
        if($query){
          $_SESSION['user_name'] = $name;
          echo json_encode(['response' => 'success', 'msg' => 'success.php']);
        } else {
         echo "query bad";
        }
    } else{
      echo json_encode(['response' => 'error', 'msg' => 'success.php']);
    }


  }
   
   
}


getValueFrom();




<?php
namespace models;
session_start();
use \PDO;

class Database {
  private $db_name;
  private $db_user;
  private $db_password;
  private $db_host;
  private $pdo;

  function __construct($db_name, $db_user="root", $db_password="rootpassy3", $db_host="localhost")
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_password = $db_password;
    $this->db_host = $db_host; 
  }

  public function connect() {
     //$pdo = new PDO('mysql:host='.$this->db_host.',dbname='.$this->db_name.'', $this->db_user, $this->db_password);
      $pdo = new PDO('mysql:host=localhost;dbname=eshop;', 'root', 'rootpassy3');
      //pour verifier les erreurs sql 
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    return $this->pdo;

  }
  public function selectAnEmail($email): int {
         $query = $this->pdo->prepare('SELECT email_user FROM utilisateurs WHERE email_user = ?');
          $query->execute(array($email));
          $the_user = $query->rowCount();
         return $the_user;
        
  }
  public function insertUser($name, $email, $password){
      
      $query = $this->pdo->prepare("INSERT INTO utilisateurs(nameUser, email_user, password_user) VALUES(?,?,?");
      $query->execute([$name, $email, $password]);
      if($query){
        $_SESSION['user_name'] = $name;
        echo json_encode(['response' => 'success', 'msg' => 'success.php']);
      }else {
        echo json_encode(['response' => 'error', 'msg' => 'success.php']);
      }
      
  }

}

//$db = new PDO('mysql:host=localhost;dbname=eshop', 'root', 'rootpassy3');
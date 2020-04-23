<?php //modele Admin
session_start();

require_once('model/ModelManager.php');

class UserManager extends ModelManager {

// Vérification de la validité des informations

// Hachage du mot de passe
  // $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT); à mettre dans le frontend

// Insertion
  public function addMember($pseudo, $password){

    $db = $this->connectDb();
    $addMember = $db->prepare('INSERT INTO membres(pseudo, password, date_inscription, role_id) VALUES(?, ?, NOW(), 2)');
    $affectedMember = $addMember->execute(array($pseudo, $password));
    
    return $affectedMember;
  }
//  Récupération de l'utilisateur et de son pass hashé
      
    public function verifyMember(){

      $db = $this->connectDb();

      $requser = $db->prepare('SELECT * FROM membres WHERE pseudo = ? AND password = ?');
      $requser->execute(array($_POST['pseudo'], $_POST['password']));
      $checkMember = $requser->fetch();

      return $checkMember;
      
    }

  }

?>
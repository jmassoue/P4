<?php //modele Admin

require_once('model/ModelManager.php');

class UserManager extends ModelManager {





// Vérification de la validité du pseudo et insertion

  public function addMember($pseudo, $password){

    $db = $this->connectDb();
    
    $reqMember = $db->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
    $reqMember->execute(array($pseudo));

    $userExist = $reqMember->fetch(PDO::FETCH_OBJ); // retourne en tant qu'objet

      if ($userExist != NULL){
        throw new Exception('Pseudo déjà existant');
      }
      else { 
        $addMember = $db->prepare('INSERT INTO membres(pseudo, password, date_inscription, role_id) VALUES(?, ?, NOW(), 2)');

        $addMember->execute(array($pseudo, $password));
    
        return $addMember;

      }}
        
      
  //  Récupération de l'utilisateur et de son pass hashé
      
    public function Connexion(){

      $db = $this->connectDb();

      $reqUser = $db->prepare('SELECT * FROM membres WHERE pseudo = ? AND password = ?');
      $reqUser->execute(array($_POST['pseudo'], $_POST['password']));
      $checkMember = $reqUser->fetch();

      return $checkMember;
      
    }

  }

?>
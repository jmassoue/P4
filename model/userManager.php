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
      
    public function connexion($pseudo, $password){
      
      $db = $this->connectDb();

      $reqUser = $db->prepare('SELECT * FROM membres WHERE pseudo = ?');
      $reqUser->execute(array($pseudo));
      $checkMember = $reqUser->fetch(PDO::FETCH_OBJ);

      if ($checkMember != NULL) {
        if(password_verify($password, $checkMember->password)){
          session_start();
          $reqUser->execute(array($pseudo));

          $dataUser = $reqUser->fetch(PDO::FETCH_OBJ);
          
          $_SESSION['id'] = $dataUser->id;
          $_SESSION['pseudo'] = $dataUser->pseudo;
          $_SESSION['role_id'] = $dataUser->role_id;

          header('Location: index.php');

        }
        else{
          throw new Exception('Mauvais mot de passe');
        }
      }
      else{
        throw new Exception('Mauvais pseudo');
      }
      
    }

  }

?>
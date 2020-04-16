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
   		$requser->execute(array($pseudo, $password));
   		$checkMember = $requser->rowCount();
      if($checkMember == 1)
      {
        $userinfo = $requser->fetch();
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['password'] = $userinfo['password']; //est ce que je dois mettre id plutot que password ?
      }
      else
      {
        die("Mauvais pseudo ou mot de passe");
      }

   		return $checkMember;

   	}

  }


// Comparaison du pass envoyé via le formulaire avec la base
// $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']); frontend

//if (!$resultat)
//{
//    echo 'Mauvais identifiant ou mot de passe !';
//}
//else
//{
  //  if ($isPasswordCorrect) {
    //    session_start();
      //  $_SESSION['pseudo'] = $pseudo;
        //$_SESSION['password'] = $pass_hache;
        //echo 'Vous êtes connecté !';
    //}
    //else {
      //  echo 'Mauvais identifiant ou mot de passe !';
    //}
//}
?>
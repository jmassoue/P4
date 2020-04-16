// Bouton page connexion
<?php
function pageConnexionSubmit($pseudo, $mdp){
	$memberManager = new MemberManager();

	$member = $memberManager->loginMember($pseudo);
	$mdpCorrect = password_verify($_POST['mdpConnect'], $member['motdepasse']);

	if (!isset($member['id'])){
		throw new Exception("Mauvais identifiant !");
	}
		else {
			if ($mdpCorrect){
<<<<<<< HEAD
				$_SESSION['id'] = $member['user_id'];
=======
				$_SESSION['id'] = $member['id'];
				$_SESSION['pseudo'] = $member['pseudo'];
				$_SESSION['admin'] = $member['admin'];
>>>>>>> 904c56cc315f33245d1229e571147916b93ac3b3
				header('Location: index.php');
			}
				else {
					throw new Exception("Mauvais mot de passe !");
				}
			}
}

?>
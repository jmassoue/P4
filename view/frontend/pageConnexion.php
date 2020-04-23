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
				$_SESSION['id'] = $member['user_id'];
				header('Location: index.php');
			}
				else {
					throw new Exception("Mauvais mot de passe !");
				}
			}
}

?>
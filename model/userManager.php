<?php //modele Admin

require_once('model/ModelManager.php');

class userManager extends ModelManager {

// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, password, e_mail, date_inscription) VALUES(:pseudo, :password, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'password' => $pass_hache,
    'e_mail' => $e_mail));



//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, password FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>
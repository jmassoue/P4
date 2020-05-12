<?php //routeur
session_start();
require('controller/frontend/frontend.php');

class Routeur{

	private $frontController;

	public function __construct(){ 
		$this->frontController = new Frontend;
		$this->run();
	}

	public function run(){
		try{
			if(isset($_GET['action'])){


				if($_GET['action'] === 'postHome') {
					
					$this->frontController->postHome();
				}

				elseif ($_GET['action'] === 'newMember') {
					$this->frontController->addMember();
				}

				elseif ($_GET['action'] === 'log') {
					$this->frontController->connexion();
				}

				elseif ($_GET['action'] === 'disconnect') {
					$this->frontController->disconnect();
				}

			elseif ($_GET['action'] === 'addComment') { // ajout d'un commentaire
			if(isset($_GET['id_post']) && $_GET['id_post']> 0) {
				if(!empty($_POST['author']) && !empty($_POST['content'])) {
					$this->frontController->addComment($_GET['id_post'], $_POST['author'], $_POST['content']);
				}
					else { // si tous les champs ne sont pas remplis
						$this->frontController->postHome();
					}
				}
				else { // aucun id_post présent.
					$this->frontController->postHome();
				}
			}
			elseif ($_GET['action'] === 'reported') {
				if(isset($_GET['id_comment']) && $_GET['id_comment'] > 0) {
					$this->frontController->reported($_GET['id_comment']);
				}else{ // si id_comment <=0
					$this->frontController->postHome();
				}
			}
			elseif ($_GET['action'] === 'comReported') {
				if($_SESSION['role_id'] === '1') {
					$this->frontController->commentReportedView();
				}else{ // si id_post <= 0
					$this->frontController->postHome();
				}
			}	
			elseif ($_GET['action'] === 'update') {
				if($_SESSION['role_id'] === '1') {
					if(isset($_GET['id_post']) && $_GET['id_post'] > 0) {
						$this->frontController->update($_GET['id_post']);
					}else{ // si id_post <=0
						$this->frontController->postHome();
					}
				}
				else{
					$this->frontController->postHome();
				}
			}
			
			elseif ($_GET['action'] === 'delete') {
				if($_SESSION['role_id'] === '1') {
					$this->frontController->delete();
				}
				else{ 
					$this->frontController->postcommentsView();
				}
			}
			elseif ($_GET['action'] === 'addPost') {
				$this->frontController->addPosts();
			}
			elseif ($_GET['action'] === 'postViewId') {
				if(isset($_GET['id_post']) && $_GET['id_post']> 0) {
					$this->frontController->postcommentsView();
				}else{ // si id_post <= 0
					$this->frontController->postHome();
				}
			}else { // si on a un paramètre action inconnu
				$this->frontController->postHome();
			}
		}else{ // si on a pas de paramètre action
			$this->frontController->postHome();
		}
		
	}catch(Exception $e){
		die('Erreur :' .$e->getMessage());
	}
}}

new Routeur;
?>

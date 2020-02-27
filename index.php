<?php //routeur

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
			elseif ($_GET['action'] === 'addPosts') {
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

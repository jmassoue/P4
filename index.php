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


			if($_GET['action'] == 'postHome') {
				
				$this->frontController->postHome();
			}
<<<<<<< HEAD

			elseif ($_GET['action'] == 'addComment') {
				if(isset($_GET['id_post']) && $_GET['id_post']> 0) {
					if(!empty($_POST['user_id']) && !empty($_POST['content'])) {
						addComment($_GET['id_post'], $_POST['user_id'], $_POST['content']);
					}
					else { // si tous les champs ne sont pas remplis
						$this->frontController->postHome();
					}
				}
				else { // aucun id_post présent
					$this->frontController->postHome();
				}
			}
=======
>>>>>>> 13a7b56bb96358324dcd346f6f8ff4e5b558a060
			elseif ($_GET['action'] == 'postViewId') {
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

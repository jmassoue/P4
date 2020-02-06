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
			elseif ($_GET['action'] == 'postViewId') {
				if(isset($_GET['id_post']) > 0) {
					$this->frontController->postcommentsView();
				}
			}
		}else{
			$this->frontController->postHome();
		}
	
	}catch(Exception $e){
		die('Erreur :' .$e->getMessage());
	}
}}

new Routeur;
?>

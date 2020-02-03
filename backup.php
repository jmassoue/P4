// back up 
<?php //routeur

	require('controller/frontend/frontend.php');
	$controllerFrontend = new Frontend;

	try{
		if(isset($_GET['action'])){

		}else{
			$controllerFrontend->postHome();
		}
	}
	catch(Exception $e){
		die('Erreur :' .$e->getMessage());
	}
	
?>

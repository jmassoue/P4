<?php //routeur

	require('controller/frontend/frontend.php');
	$controllerFrontend = new Frontend;

	try{
		if(isset($_GET['action'])){

		}else{
<<<<<<< HEAD
			$controllerFrontend->postHome();
=======
			$controllerFrontend->postAndCommentHome();
>>>>>>> ea943d880097c893997a0d91670cc2a9e76d7df3
		}
	}
	catch(Exception $e){
		die('Erreur :' .$e->getMessage());
	}
	
?>

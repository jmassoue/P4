<?php //routeur

	require('controller/frontend/frontend.php');
	$controllerFrontend = new Frontend;

	try{
		if(isset($_GET['action'])){
<<<<<<< HEAD
			if ($_GET['action'] == 'postHome') {
				postHome();
			}
			elseif ($_GET['action'] == 'postViewId') {
				if (isset($_GET['id_post']) && $_GET['id_comment'] > 0) {
					postViewId();
				}
			}
	}
	
else {
	$controllerFrontend->postHome();
}
=======

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
>>>>>>> 8178d0bb627918d28798f6d308c2d693ffcce828

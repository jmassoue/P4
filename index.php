<?php //routeur

	require('controller/frontend/frontend.php');
	$controllerFrontend = new Frontend;

	try{
		if(isset($_GET['action'])){
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
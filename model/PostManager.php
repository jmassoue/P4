<?php //modele

class PostManager {


	public function getPosts(){

		try
    	{
        	$db = new PDO('mysql:host=localhost;dbname=P4;charset=utf8', 'root', '');
    	}
    	catch(Exception $e)
   		{
        die('Erreur : '.$e->getMessage());
    	}

    	$req = $db->query('SELECT id_post, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM post ORDER BY id_post DESC LIMIT 0, 5' );
   
    	return $req;

	}

}

?>



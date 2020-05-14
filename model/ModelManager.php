<?php 

class ModelManager{ 

	protected function connectDb(){

		try
       {
           $db = new PDO('mysql:host=localhost;dbname=p4;charset=utf8', 'root', '');
       }
       catch(Exception $e)
       {
        die('Erreur : '.$e->getMessage());
    }

    return $db;
}
}
?>
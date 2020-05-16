<?php 

class ModelManager{ 

	protected function connectDb(){

		try
       {
           $db = new PDO('mysql:host=db5000428102.hosting-data.io;port=3306;dbname=dbs409284;charset=utf8', 'dbu728225', 'John060890!');
       }
       catch(Exception $e)
       {
        die('Erreur : '.$e->getMessage());
    }

    return $db;
}
}
?>
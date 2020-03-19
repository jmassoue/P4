<?php // Modele commentaires

require_once('model/ModelManager.php');

class CommentManager extends ModelManager {
	
	public function getComments($postId){

		$db = $this->connectDb();

		$commentsId = $db->prepare('SELECT id_comment,content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment WHERE post_id=? AND reported= false ORDER BY date_creation');
		$commentsId->execute(array($postId));
   
    	return $commentsId;
	}


	public function allComments(){

		$db = $this->connectDb();

		$comments = $db->query('SELECT id_comment,content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
   
    	return $comments;
	}

	public function addComments($postId, $author, $content){

		$db = $this->connectDb();
		$addComments = $db->prepare('INSERT INTO comment(post_id, author, content, date_creation) VALUES(?, ?, ?, NOW())');
		$affectedLines = $addComments->execute(array($postId, $author, $content));
		
    	return $affectedLines;

	}

	public function reportedComment($id_comment){

		$db = $this->connectDb();

		$reported = $db->prepare('UPDATE comment SET reported = 1 WHERE id_comment = ?'); // 1 = true 0 = false
		$reported->execute(array($id_comment));
   
    	return $reported;

    }

    public function deleteComment(){

		$db = $this->connectDb();

		$deleteComment = $db->query('DELETE id_comment, content, post_id, author, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM comment ORDER BY id_comment');
   
    	return $deleteComment;

    }




}
?>
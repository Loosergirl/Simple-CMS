<?php 
class Deletes {

	private $pdo;

	public function __construct($pdo) {
    	$this->pdo = $pdo;
  	}

  	public function deletePost($postID) {
    	$sql = "
		DELETE FROM `simple-cms`.`blog_posts` 
		WHERE `blog_posts`.`postID` = '$postID'";
    	$stmt = $this->pdo->prepare($sql);
    	$stmt->execute();
  	}	
}
?>
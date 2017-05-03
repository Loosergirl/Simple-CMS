<?php
class Post
{
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function postPost()
	{
		$statement = $this->pdo->prepare(
			"INSERT INTO `blog_posts`
			(postTitle, postCont, postDate, memberID, pictureSRC)
			VALUES
			(:postTitle, :postCont, :postDate, :memberID, :pictureSRC)"
		);
		
		$statement->exectue([
			":postTitle"  => $_POST['postTitle'],
			":postCont"   => $_POST['postCont'],
			":postDate"   => $_POST['postDate'],
			":memberID"   => $_POST['memberID'],
			":pictureSRC" => $_POST['pictureSRC']
		]);
	}
	
	public function getAllPosts()
	{
		$statement = $this->pdo->prepare(
      "SELECT * FROM blog_posts");
		$statement->execute();
    	$data = $statement->fetchAll(PDO::FETCH_ASSOC);
    	return $data;
	}
}



/*
  ===Variabler i blog_posts===
  `postTitle` varchar(255) DEFAULT NULL,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `memberID` int(11) unsigned NOT NULL,
  `pictureSRC` varchar(255) DEFAULT NULL,
*/
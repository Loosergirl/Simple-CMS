<?php
require_once  'init.php';

if(isset($_GET['type'], $_GET['id'])){
	$type = $_GET['type'];
	$id = (int)$_GET['id'];

	/*
	===OLD===
	switch ($type) {
		case 'article':
			$db->query("
				INSERT INTO articles_likes (user, article)
					SELECT {$_SESSION['user_id']}, {$id}
					FROM articles
					WHERE EXISTS (
						SELECT id
						FROM articles
						WHERE id = {$id})
					AND NOT EXISTS (
						SELECT id
						FROM articles_likes
						WHERE user = {$_SESSION['user_id']}
						AND article = {$id})
					LIMIT 1
				");
			break;
	}
	*/
	
	/*===NEW===*/
		switch ($type) {
		case 'postID':
			$db->query("
				INSERT INTO likes (memberID, postID)
					SELECT {$_SESSION['memberID']}, {$id}
					FROM blog_posts
					WHERE EXISTS (
						SELECT postID
						FROM blog_posts
						WHERE postID = {$id})
					AND NOT EXISTS (
						SELECT id
						FROM likes
						WHERE memberID = {$_SESSION['memberID']}
						AND postID = {$id})
					LIMIT 1
				");
			break;
	}
	
}
header("Location: index.php");
?>
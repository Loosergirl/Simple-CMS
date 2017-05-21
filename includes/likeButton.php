<?php
session_start();

include '../dbconfig.php';
include '../php-classes/Likes.php';
$memberID = $_SESSION['memberID'];
$postID = $_GET['postID'];
$like = new Likes($pdo);

$isLiked = $like->likeExist($memberID, $postID);
		if ($isLiked){
	$like->unLike($memberID,$postID);
}
else
{
	$like->newLike($postID, $memberID);
}


?>

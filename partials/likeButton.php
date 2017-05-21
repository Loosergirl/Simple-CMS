<?php
session_start();

include '../dbconfig.php';
include '../includes/likes.inc.php';
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

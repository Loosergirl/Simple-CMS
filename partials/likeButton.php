<?php
session_start();
include 'dbconfig.php';
include '../includes/likes.inc.php';
$memberID = $_SESSION['memberID'];
$postID = $_GET['postID'];
$like = new Likes($pdo);

/*
$isLiked = $like->getAllLikes();

if ($isLiked){
	$like->deleteLike($user,$postLikeId);
	$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
	header("Location:".$_SESSION['url']);
}
else
{
	$like->newLike($postID, $memberID);
	$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
	header("Location:".$_SESSION['url']);
}
*/

?>

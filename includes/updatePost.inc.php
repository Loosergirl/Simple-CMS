<?php
session_start();
include '../dbconfig.php';
include '../php-classes/Date.php';

// ===== Get information from postForm.php =====
$blogtitle = $_POST['blogtitle'];
$blogtext = $_POST['blogtext'];
$figure = $_POST['figure'];
$postDate = new Date();

$timestamp = $postDate->timestamp();

$ID = $_GET['ID']; 

// ===== Here we check if the input forms are filled, if not we add ?error=empty to the url and make an error message from there =====

$sql = "
UPDATE `blog_posts` 
SET `postTitle`='$blogtitle',`postCont`='$blogtext',`postDate`='$postDate',`pictureSRC`='$figure' 
WHERE `blog_posts`.`postID` = '$ID'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

header("Location: ../index.php");
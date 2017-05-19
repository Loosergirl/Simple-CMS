<?php
session_start();
include '../dbconfig.php';
include '../php-classes/Date.php';

// ===== Get information from sendTo.php =====
$blogtitle = $_POST['blogtitle'];
$blogtext = $_POST['blogtext'];
$figure = $_POST['figure'];
$ID = $_GET['ID']; 
$postDate = new Date();

$timestamp = $postDate->timestamp();

// ===== Here we check if the input forms are filled, if not we add ?error=empty to the url and make an error message from there =====


$sql = "UPDATE `simple-cms`.`blog_posts` 
SET `postTitle` = '$blogtitle', `postCont` = '$blogtext', `postDate` = '$timestamp', `pictureSRC` = '$figure' 
WHERE `blog_posts`.`postID` = '$ID'";

$stmt = $pdo->prepare($sql);
$stmt->execute();

header("Location: ../index.php");
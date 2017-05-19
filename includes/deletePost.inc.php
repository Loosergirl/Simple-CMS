<?php
include '../dbconfig.php';
include '../partials/post-section.php';

$ID = $_GET['ID']; 

$sql = "
DELETE FROM `simple-cms`.`blog_posts` 
WHERE `blog_posts`.`postID` = '$ID'";

$stmt = $pdo->prepare($sql);
$stmt->execute();

header("Location: ../index.php");
?>
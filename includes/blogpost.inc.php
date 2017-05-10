<?php
session_start();
include '../dbconfig.php';
include '../php-classes/Date.php';
// ===== Get information from postForm.php =====
$blogtitle = $_POST['blogtitle'];
$blogtext = $_POST['blogtext'];
$member = $_SESSION['memberID'];
$figure = $_POST['figure'];
$postDate = new Date();

$timestamp = $postDate->timestamp();

// ===== Here we check if the input forms are filled, if not we add ?error=empty to the url and make an error message from there =====

$sql = "INSERT INTO blog_posts (postTitle, postCont, postDate, memberID, pictureSRC)
VALUES ('$blogtitle', '$blogtext', '$timestamp', '$member', '$figure')";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>

<?php
session_start();

include '../dbconfig.php';
include '../php-classes/deletePost.php';
$memberID = $_SESSION['memberID'];
$postID = $_GET['postID'];
$delete = new Deletes($pdo);
$delete->deletePost($postID);

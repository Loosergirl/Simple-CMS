<?php
session_start();

include '../dbconfig.php';
include '../includes/deletePost.inc.php';
$memberID = $_SESSION['memberID'];
$postID = $_GET['postID'];
$delete = new Deletes($pdo);
$delete->deletePost($postID);

<?php

include 'php-classes/Database.php';
include 'php-classes/Date.php';
include 'php-classes/Post.php';

$date = new Date();
$timestamp = $date->timestamp();
$pdo = Database::connection();
$post = new Post($pdo, $timestamp);

$post->postPost();
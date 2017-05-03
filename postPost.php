<?php

include 'php-classes/Database.php';
include 'php-classes/Post.php';

$pdo = Database::connection();
$post = new Post($pdo);

$post->postPost();
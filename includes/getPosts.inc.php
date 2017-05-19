<?php
include 'dbconfig.php';
ini_set("display_errors", 1);

$sql = "SELECT * FROM blog_posts
        INNER JOIN users
        ON blog_posts.memberID=users.memberID
        ORDER BY postID DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>

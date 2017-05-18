<?php
if (isset($_SESSION['memberID'])) {
$owner = $_SESSION['memberID'];

$sql = "SELECT blog_posts.memberID, blog_posts.postID 
FROM `blog_posts` 
INNER JOIN `users` 
ON blog_posts.memberID = users.memberID 
WHERE blog_posts.memberID = '$owner'";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$ownerRow = $stmt->fetch(PDO::FETCH_ASSOC);


}
?>
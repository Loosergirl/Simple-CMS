<?php
session_start();
include 'dbconfig.php';
ini_set("display_errors", 1);

class Getposts {

  private $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function getPosts() {
    $sql = "SELECT * FROM blog_posts
            INNER JOIN users
            ON blog_posts.memberID=users.memberID
            ORDER BY postID DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getPostId() {
    if (isset($_SESSION['memberID'])) {
    $owner = $_SESSION['memberID'];

    $sql = "SELECT blog_posts.memberID, blog_posts.postID
    FROM `blog_posts`
    INNER JOIN `users`
    ON blog_posts.memberID = users.memberID
    WHERE blog_posts.memberID = '$owner'";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}



/*
$sql = "SELECT * FROM blog_posts
        INNER JOIN users
        ON blog_posts.memberID=users.memberID
        ORDER BY postID DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>
*/
?>

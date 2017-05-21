<?php
include 'dbconfig.php';
ini_set("display_errors", 1);

class Getposts {

  private $pdo;

  public function __construct() {
    $this->pdo = $pdo;
  }

  public function getPosts() {
    $sql = "SELECT * FROM blog_posts
            INNER JOIN users
            ON blog_posts.memberID=users.memberID
            ORDER BY postID DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

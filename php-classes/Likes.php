<?php
ini_set("display_errors", 1);
class Likes {

  private $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function getAllLikes() {
    $sql = "SELECT * FROM likes";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function newLike($postID, $memberID) {
      $sql = "INSERT INTO likes (postID, memberID) VALUES ('$postID', '$memberID')";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
  }

  public function likeExist($memberID, $postID) {
    $sql = "SELECT * FROM likes
    WHERE memberID = '$memberID'
    AND postID = '$postID'";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function unLike($memberID, $postID) {
    $sql = "DELETE FROM likes WHERE memberID = '$memberID' AND postID = '$postID'";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}


 ?>

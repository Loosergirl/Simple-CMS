<?php

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
      $sql = "INSERT into likes (postID, memberID) VALUES (:postID, :memberID)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([
          ":postID" => $postID,
          ":memberID" => $memberID,
      ]);
  }
}


 ?>

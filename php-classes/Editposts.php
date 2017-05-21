<?php
session_start();
ini_set("display_errors", 1);
include 'Date.php';
//include 'Date.php';
$postDate = new Date();

$timestamp = $postDate->timestamp();

Class Editposts {

  private $pdo;
  private $blogTitle;
  private $blogText;
  private $member;
  private $figure;

  public function __construct() {
    $this->pdo = $pdo;
    $this->blogTitle = isset($_POST['blogtitle']) ? $_POST['blogtitle'] : null;
    $this->blogText = isset($_POST['blogtext']) ? $_POST['blogtext'] : null;
    $this->member = isset($_SESSION['memberID']) ? $_SESSION['memberID'] : null;
    $this->figure = isset($_POST['figure']) ? $_POST['figure'] : null;
  }

  public function createPost() {
    $sql = "INSERT INTO blog_posts (postTitle, postCont, postDate, memberID, pictureSRC)
    VALUES ('$this->blogtitle', '$this->blogtext', '$this->timestamp', '$this->member', '$this->figure')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    header("Location: ../index.php");
  }

}

?>

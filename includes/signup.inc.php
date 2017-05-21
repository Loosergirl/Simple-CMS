<?php
session_start();
include '../dbconfig.php';
include 'login.inc.php';
// ===== Gets information from Sign up form (signup.php). =====
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
// ===== Here we check if the input forms are filled, if not we add ?error=empty to the url and make an error message from there =====
if (empty($username)) {
  header("Location: ../signup.php?error=empty");
  exit();
}
if (empty($email)) {
  header("Location: ../signup.php?error=empty");
  exit();
}
if (empty($password)) {
  header("Location: ../signup.php?error=empty");
  exit();
}
// ===== Here we check if the username that is wanted to register does exist or not. If it does-
// ===== we add ?error=username to the url string and make an error message from there. =====
else {
    $sql = "SELECT username FROM users WHERE username='$username'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
    header("Location: ../signup.php?error=username");
      exit();
    } else {
      $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (username, email, password)
      VALUES ('$username', '$email', '$passwordHashed')";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      header("Location: ../index.php");
    }
}

<?php
session_start();
include '../dbconfig.php';
//===== Displays errors =====
ini_set('display_errors', 1);

// ===== Get data from forms =====
$username = $_POST['username'];
$password = $_POST['password'];

// ===== Check if user entered the right password based on a hashed one =====
$sql = "SELECT * FROM users WHERE username='$username'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$hashedPassword = $row['password'];
$hash = password_verify($password, $hashedPassword);

// ===== If the password does not match the hashed password it returns 0 =====
if ($hash == 0) {
  header("Location: ../index.php?error=empty");
  exit();
}
else {
    // ===== Create sql query for the database =====
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
    // ===== Prepare and Execute $sql query =====
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // ===== Start a Session when login is successful, else write a message too the user =====
    if(!$row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "You entered incorrect Username or Password.";
    }
    else {
      $_SESSION['memberID'] = $row['memberID'];
      $_SESSION['isAdmin'] = $row['isAdmin'];
    }

    header("Location: ../index.php");

}

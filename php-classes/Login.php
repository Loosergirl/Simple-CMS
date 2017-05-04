<?php

class Login
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function login()
  {
    $statement = $this->pdo->prepare("
      SELECT * FROM `users` WHERE
      username = :username");
    $statement->execute([
      ":username" => $_POST['username'];
    ]);
  }
}


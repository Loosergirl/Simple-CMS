<?php

session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "root";
$DB_name = "Simple-Cms";

try
{
     $pdo = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

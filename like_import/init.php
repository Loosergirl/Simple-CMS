<?php
session_start();

$_SESSION['memberID'] = (int)2;

$db = new mysqli('localhost', 'ifah', 'password', 'likebutton');
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS blog</title>
    <link rel="stylesheet" href="/Simple-CMS/main.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="/Simple-CMS/index.php">Blog</a></li>
          <?php

          //This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff
          if (isset($_SESSION['memberID'])) {
            echo "<form action='includes/logout.inc.php' method='post'>
                    <button>Log Out</button>
                  </form>";
          } else {
            echo "<form action='includes/login.inc.php' method='post'>
                    <input type='text' name='username' placeholder='Username'>
                    <input type='password' name='password' placeholder='Password'>
                    <button type='submit'>Login</button>
                  </form>";
          }

          ?>
          <li><a href="/Simple-CMS/php-classes/signup.php">Sign Up</a></li>
        </ul>
      </nav>
    </header>

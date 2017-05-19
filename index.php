<?php
  session_start();
  include 'php-classes/header.php';
  include 'partials/postForm.php';
  include 'partials/post-section.php';
 ?>

    <!-- This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff -->
    <?php
    if (isset($_SESSION['memberID'])) {
      echo $_SESSION['memberID'];
      if($_SESSION['isAdmin'] == 1) {
        echo "Vi gjorde det emil!";
    }}

    else {
      echo "You are not logged in.";
    }


    ?>
    <br><br><br>

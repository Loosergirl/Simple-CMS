<?php
  session_start();
  include 'partials/head.php';
  include 'partials/header.php';
  include 'partials/post-section.php';
  include 'partials/footer.php';
 ?>

    <!-- This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff -->
    <?php
    if (isset($_SESSION['memberID'])) {
      if($_SESSION['isAdmin'] == 1) {
    }}

    ?>
    <br><br><br>

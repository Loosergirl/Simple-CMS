<?php
  session_start();
  include 'partials/head.php';
  include 'partials/header.php';
<<<<<<< HEAD
  //include 'php-classes/header.php';
=======
>>>>>>> cd056d7ebc7387767011877c99c116ad1ba677af
  include 'partials/postForm.php';
  include 'partials/post-section.php';
  include 'partials/footer.php';
 ?>

    <!-- This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff -->
    <?php
    if (isset($_SESSION['memberID'])) {
      echo $_SESSION['memberID'];
      if($_SESSION['isAdmin'] == 1) {
    }}

    else {
    }


    ?>
    <br><br><br>

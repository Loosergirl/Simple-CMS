<?php
  include 'header.php';
 ?>

    <?php
    // ===== Here we use function to get information about the url. $_SERVER['HTTP_HOST'] will return localhost:8888 and- =====
    // ===== $_SERVER returns /CMS-blog/signup.php?error=empty =====
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    // ===== If the url have error=empty in it we echo out the error message =====
    if(strpos($url, 'error=empty') !== false) {
      echo "You did not fill out all information needed to register.";
    }
    else if(strpos($url, 'error=username') !== false) {
      echo "Username already exist.";
    }

    ?>
    <br><br>
    <?php
    //This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff
    if (isset($_SESSION['memberID'])) {
      echo "You are already logged in.";
    } else {
      echo  "<div class='signup-form'>
                <h1>Welcome to signup</h1>
                  <form action='../includes/signup.inc.php' method='POST' class='signup__form'><br>
                  <input type='text' name='username' placeholder='Username' class='signup__form--field'><br>
                  <input type='text' name='email' placeholder='Email' class='signup__form--field'><br>
                  <input type='password' name='password' placeholder='Password' class='signup__form--field'><br>
                  <button type='submit'>Sign Up</button>
            </form>
            </div>";
    }
    ?>

    <br><br><br>

  </body>
</html>

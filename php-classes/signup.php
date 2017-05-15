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

    if (isset($_SESSION['memberID'])) {
      echo $_SESSION['memberID'];
    } else {
      echo "You are not logged in.";
    }
    ?>
    <br><br>
    <?php
    //This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff
    if (isset($_SESSION['memberID'])) {
      echo "You are already logged in.";
    } else {
      echo  "<form action='../includes/signup.inc.php' method='POST'>
              <input type='text' name='username' placeholder='Username'><br>
              <input type='text' name='email' placeholder='Email'><br>
              <input type='password' name='password' placeholder='Password'><br>
              <button type='submit'>Sign Up</button>
            </form>";
    }
    ?>

    <br><br><br>

  </body>
</html>

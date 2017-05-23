    <header class="site-header">


      <div class="wrapper">
        <!--===== Hamburger Icon =====-->
        <div class="site-header__menu-icon">
          <div class="site-header__menu-icon__middle"></div>
        </div>

        <!--===== Menu opened by hamburger icon =====-->
        <div class="site-header__menu-content">
          <nav class="site-header__nav">
            <ul class="site-header__list">
            <li class="site-header__listItem"><a href="/Simple-CMS/index.php">Blog</a></li>
            <?php

          //This is how you can decide which user can do what. For example in the If statement you can put admin stuff and in the else the not admin stuff
            if (isset($_SESSION['memberID'])) {
            echo "<form method='post'>
                    <a href='includes/logout.inc.php' class='site-header__listItem site-header__red'>Log Out</a>
                  </form>";
            } else {

            echo "<form class='site-header__form' action='includes/login.inc.php' method='post'>
                    <input type='text' name='username' placeholder='Username'>
                    <input type='password' name='password' placeholder='Password'>
                    <button class='site-header__button site-header__listItem' type='submit'>Log In</button>
                  </form>";
            }

          ?>
            <li class="site-header__listItem"><a class="site-header__green" href="/Simple-CMS/php-classes/signup.php">Sign Up</a></li>
          </ul>
        </nav>
      </div>

        <!--===== Main logo at top center of page =====-->
        <div class="site-header__logo">
            <h1 class="site-header__logo-header-text">EcoArchitecture</h1>
        </div>

        <!--===== Blog-post icon at top right of page =====-->
        <?php
        if (isset($_SESSION['memberID'])) {
          echo "<div class='site-header__blog-post-icon'>
                    <i class='fa fa-thumb-tack fa-2x' aria-hidden='true'></i>
                  </div>";
        }?>


        <!--===== Menu opened by Blog-post icon =====-->
        <div class="site-header__blog-post-content">
          <?php include 'postForm.php'; ?>
          </form>
        </div>


    </div>
              <div class="site-header__bottom-line"></div>
    </header>

      <div class="site-header__jumbotron">
      <!-- <img srcset="images/skyscraper-large1.png 1920w" alt="Photo of skyscraper">-->
      </div>

    <!--<section class="site-header__jumbotron">

      <img srcset="images/header-large.jpg" alt="Photo of skyscraper">
    </section>-->

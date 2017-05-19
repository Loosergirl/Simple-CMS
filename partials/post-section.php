<?php
  include 'dbconfig.php';
  include 'includes/getPosts.inc.php';
  include 'includes/likes.inc.php';


  $likes = new Likes($pdo);
  $likerow = $likes->getAllLikes();
  ?>

  <div class="post-container">
  <?php


  if (isset($_SESSION['memberID'])){

  foreach($row as $i) {?>


    <div class="post-container__post">
    <div class="wrapper__post">
      <p>Created by: <?= $i['username']; ?></p>
    <h2 class="post-container__header"><?= $i['postTitle']; ?></h2>
    <figure class="post-container__figure">
    <figcaption class="post-container__image-text"></figcaption>


    <!--<img class="post-container__image" src="" alt="Post-image">-->
    <a><button type="submit" class="post-container__likebtn" id="likebtn" onclick="like(<?= $i['postID']?>)">Like</button></a>
    </figure>
    <p class="post-container__text"><?= $i['postCont']; ?></p>
    </div>

    <div class="post-container__bottom-line"></div>
    </div>


<?php
  }}?>
    </div>
    <?php
      include 'footer.php'
      ?>

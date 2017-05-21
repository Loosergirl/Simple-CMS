<?php
  session_start();

  include 'dbconfig.php';
  include 'includes/getPosts.inc.php';
  include 'includes/deletePost.inc.php';
  include 'includes/getPostID.inc.php';
  include 'includes/likes.inc.php';

  $likes = new Likes($pdo);
  $allLikes = $likes->getAllLikes();
  $delete = new Deletes($pdo);
  ?>

  <div class="post-container">
  <?php

  foreach($row as $i) {?>

    <div class="post-container__post">
    <div class="wrapper__post">
      <p>Created by: <?= $i['username']; ?></p>
    <h2 class="post-container__header"><?= $i['postTitle']; ?></h2>
    <figure class="post-container__figure">
    <figcaption class="post-container__image-text"></figcaption>


    <?php

      $count = 0;

      foreach($allLikes as $like) {
        if ($like['postID'] === $i['postID']) {
          $count++;
        }
      }
     ?>

    <!--<img class="post-container__image" src="" alt="Post-image">-->
    <a><button type="submit" class="post-container__likebtn" id="likebtn" onclick="like(<?= $i['postID']?>); location.reload();">Like</button></a>
    <p>Likes: <?php echo $count; ?></p>
    </figure>
    <p class="post-container__text"><?= $i['postCont']; ?></p>
    <?php
    if (isset($_SESSION['memberID'])) {
    if ($ownerRow['memberID'] == $i['memberID'] || $_SESSION['isAdmin'] == 1){ ?>
      <a><button type="submit" onclick="deletePost(<?= $i['postID']?>); location.reload();">Delete</button></a>
      <a href="includes/sendToForm.inc.php?ID=<?= $i['postID'] ?>">Edit</a>
    <?php }} ?>
    </div>

    <div class="post-container__bottom-line"></div>
    </div>


<?php
  }?>
    </div>
    <?php
      include 'footer.php'
      ?>

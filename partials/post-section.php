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
    <div class="post-container__bottom-line"></div>
    <div class="post-container__postHeader-con">
    <p class="post-container__postHeader-p">Created by: <?= $i['username']; ?></p>

    <?php
    if (isset($_SESSION['memberID'])) {
    if ($ownerRow['memberID'] == $i['memberID'] || $_SESSION['isAdmin'] == 1){ ?>
      <a><button type="submit" class="post-container__buttonDelete" onclick="deletePost(<?= $i['postID']?>); location.reload();"><i class="fa fa-times" aria-hidden="true"></i>
</button></a>
      <a href="includes/sendToForm.inc.php?ID=<?= $i['postID'] ?>"><button class="post-container__buttonEdit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</button></a>
    </div>
    <?php }} ?>


    <h2 class="post-container__header"><?= $i['postTitle']; ?></h2>
    <figure class="post-container__figure"><img src="<?= $i['pictureSRC'] ?>"></figure>
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
    <div class="post-container__like-con">
    <a><button type="submit" class="post-container__like-button" id="likebtn" onclick="like(<?= $i['postID']?>); location.reload();"></button></a>
    <p>Likes: <?php echo $count; ?></p>
    </div>
    <p class="post-container__text"><?= $i['postCont']; ?></p>
    </div>

    
    </div>


<?php
  }?>
    </div>

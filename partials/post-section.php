<?php
  include 'dbconfig.php';
  include 'includes/getPosts.inc.php';
  include 'includes/getPostID.inc.php';


  ?>

  <div class="post-container">
  <?php
  foreach($row as $i) {
    ?>

    <div class="post-container__post">
    <div class="wrapper__post">
      <p>Created by: <?= $i['memberID']; ?></p>
    <h2 class="post-container__header"><?= $i['postTitle']; ?></h2>
    <figure class="post-container__figure">
    <figcaption class="post-container__image-text"></figcaption>
    <!--<img class="post-container__image" src="" alt="Post-image">-->
    <!--<input type="submit" class="post-container__like-button" value="">-->
    </figure>
    <p class="post-container__text"><?= $i['postCont']; ?></p>
    <?php
    if (isset($_SESSION['memberID'])) {
    if ($ownerRow['memberID'] == $i['memberID'] || $_SESSION['isAdmin'] == 1){ ?>
      <a href="includes/deletePost.inc.php?ID=<?= $i['postID'] ?>">Delete</a>
      <a href="includes/sendToFrom.inc.php?ID=<?= $i['postID'] ?>">Edit</a>
    <?php }} ?>
    </div>
    <div class="post-container__bottom-line"></div>
    </div>


<?php
  }?>
    </div>

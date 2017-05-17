<?php
  include 'dbconfig.php';
  include 'includes/getPosts.inc.php';
  include 'includes/deletePost.inc.php';

  ?>

  <div class="post-container">
  <?php
  if (isset($_SESSION['memberID'])){
  foreach($row as $i) {
    ?>

    <!-- foreach($ownderRow as $j) {
    if ($ownderRow[j] == $row[i]) {
    <button>Hej</button>
  }
  }
-->
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
    </div>
    <?php
          if ($ownerRow[0] == $_SESSION['memberID'] && $ownerRow[1] == $_SESSION[''] || $_SESSION['isAdmin'] == 1) {
            ?>
            <button>Hej</button>
          <?php } ?>
    <div class="post-container__bottom-line"></div>
    </div>


<?php
  }}?>
    </div>

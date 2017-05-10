<?php
  include 'includes/getPosts.inc.php';

  foreach($row as $i) {
    ?>
    <div class="post-container">

    <div class="post-container__post">
    <div class="wrapper__post">
    <h2 class="post-container__header"><?= $i['postTitle']; ?></h2>
    <figure class="post-container__figure">
    <figcaption class="post-container__image-text"></figcaption>
    <!--<img class="post-container__image" src="" alt="Post-image">-->
    <!--<input type="submit" class="post-container__like-button" value="">-->
    </figure>
    <p class="post-container__text"><?= $i['postCont']; ?></p>
    </div>
    <div class="post-container__bottom-line"></div>
    </div>

    </div>
<?php
  }?>

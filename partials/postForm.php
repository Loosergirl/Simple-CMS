<?php
  session_start();
  include '../includes/blogpost.inc.php';
 ?>


<form action="/Simple-CMS/includes/blogpost.inc.php" method="post">
    <input type="text" name="blogtitle" required placeholder="Write Title..">
    <input type="text" name="blogtext" required placeholder="Write Post...">
    <input type="url" name="figure" required placeholder="Picture url">
    <button type="submit">Post</button>
</form>

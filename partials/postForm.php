<?php
  session_start();
  include '../includes/blogpost.inc.php';

  if (isset($_SESSION['memberID'])){
  	?>
  	<div class="edit-page__container2">
		<form class="edit-page__form" action="/Simple-CMS/includes/blogpost.inc.php" method="post">
		    <input type="text" name="blogtitle" required placeholder="Write Title..">
		    <textarea type="text" name="blogtext" required placeholder="Write Post..."></textarea>
		    <input type="url" name="figure" required placeholder="Picture url">
		    <button type="submit">Post</button>
		</form>
	</div>
 <?php }
 ?>

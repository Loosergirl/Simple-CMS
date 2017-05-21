<?php 
session_start();
include '../partials/head.php';

$ID = $_GET['ID'];

if (isset($_SESSION['memberID'])){
  	?>
  	<div class="edit-page__form">
		<form action="/Simple-CMS/includes/updatePost.inc.php?ID=<?= $ID ?>" method="post">
		    <input type="text" name="blogtitle" required placeholder="Write Title...">
		    <input type="text" name="blogtext" required placeholder="Write Post..." >
		    <input type="url" name="figure" required placeholder="Picture url" >
		    <button type="submit">Post</button>
		</form>
	</div>
 <?php }



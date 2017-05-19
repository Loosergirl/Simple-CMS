<?php 

$ID = $_GET['ID']; 

if (isset($_SESSION['memberID'])){
  	?>
		<form action="/Simple-CMS/includes/blogpost.inc.php" method="post">
		    <input type="text" name="blogtitle" required placeholder="Write Title.." value="<?=$_GET['blogtitle'] ?>">
		    <input type="text" name="blogtext" required placeholder="Write Post..." value="<?=$_GET['blogtext'] ?>">
		    <input type="url" name="figure" required placeholder="Picture url" value="<?=$_GET['figure'] ?>">
		    <button type="submit">Post</button>
		</form>

 <?php }

header("Location: ../index.php");

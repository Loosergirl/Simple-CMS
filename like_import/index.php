<?php
require_once  'init.php';

$articleQuery = $db->query("
	SELECT 
	blog_posts.postID, 
	blog_posts.postTitle,
	COUNT(likes.id) AS likes,
	GROUP_CONCAT(users.username SEPARATOR '|') AS liked_by

	FROM blog_posts

	LEFT JOIN likes
	ON blog_posts.postID = likes.postID

	LEFT JOIN users
	ON likes.memberID = users.memberID

	GROUP BY blog_posts.postID
	");

while($row = $articleQuery->fetch_object()){
	$row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
	$blog_posts[] = $row;
}

// echo '<pre>', print_r($blog_posts, true), '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog Posts</title>
  </head>
  <body>
  <!--Uhhhhh...?????-->
  	<?php foreach($blog_posts as $article): ?>
  		<div class="article">
  			<h3><?php echo $article->title; ?></h3>
  			<a href="like.php?type=article&id=<?php echo $article->id; ?>">Like</a>

  			<p>No of people liked this (<?php echo $article->likes; ?>).</p>
  			<?php if(!empty($article->liked_by)): ?>
  				<ul>
  					<?php foreach($article->liked_by as $user): ?>
  						<li><?php echo $user; ?></li>
  					<?php endforeach; ?>
  				</ul>
  			<?php endif; ?>
  		</div>
  	<?php endforeach; ?>
  </body>
</html>
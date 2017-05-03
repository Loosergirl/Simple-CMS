<form action="postPost.php" 
      method="POST" id="form">
  <div class="form-group">
    <input  type="text" 
            class="form-control" 
            name="pictureSRC"
            placeholder="Image url">
  </div>
  <div class="form-group">
    <input  type="text" 
            class="form-control" 
            name="postTitle"
            placeholder="Post heading">
  </div>
  <div class="form-group">
    <textarea rows="14" cols="60"
            class="form-control" 
            name="postCont"
		    placeholder="Post text"></textarea>
  </div>
  <input type="submit">
</form>


<!--
  ===Variabler i blog_posts===
  `postTitle` varchar(255) DEFAULT NULL,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `memberID` int(11) unsigned NOT NULL,
  `pictureSRC` varchar(255) DEFAULT NULL,
-->
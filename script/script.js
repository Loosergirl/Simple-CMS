let like = (postID) => {
    $.ajax({
      method: 'POST',
      data: postID,
      url: '/Simple-CMS/partials/likeButton.php?postID=' + postID,
      success:(response) => {
        console.log("You liked the post!");
      }
    })
}

let deletePost = (postID) => {
    $.ajax({
      method: 'POST',
      data: postID,
      url: '/Simple-CMS/partials/deleteButton.php?postID=' + postID,
      success:(response) => {
        console.log("You deleted a post!");
      }
    })
}

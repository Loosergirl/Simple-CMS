
let like = (postID) => {
    $.ajax({
      method: 'POST',
      data: postID,
      url: '/Simple-CMS/includes/likeButton.php?postID=' + postID,
      success:(response) => {
        console.log("You liked a post!");
      }
    })
}

let deletePost = (postID) => {
    $.ajax({
      method: 'POST',
      data: postID,
      url: '/Simple-CMS/includes/deleteButton.php?postID=' + postID,
      success:(response) => {
        console.log("You deleted a post!");
      }
    })
}

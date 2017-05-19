
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

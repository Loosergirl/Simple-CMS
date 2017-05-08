import $ from "jquery";

class PostMenu {
  constructor() {
    this.postIcon = $('.site-header__blog-post-icon');
    this.postContent = $(".site-header__blog-post-content");
    this.events();
  }

  events() {
    this.postIcon.click(this.toggleMenu.bind(this));
  }

  toggleMenu() {
    this.postContent.toggleClass("site-header__blog-post-content--is-visible");
    this.postIcon.toggleClass("site-header__blog-post-icon--rotate");
  }

}
export default PostMenu;

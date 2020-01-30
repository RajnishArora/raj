import $ from 'jquery';

class MobileMenu {
  constructor() {
  //  alert("Hello from mobile menu")
  //  this.siteHeader = $(".site-header");
    this.menuIcon = $(".site-header__menu-icon");
    this.menuContent = $(".primarynav__ul");
    this.events();
  }

  events() {
    this.menuIcon.on("click", this.toggleTheMenu.bind(this));
  }

  toggleTheMenu() {
    console.log("clicked");
    this.menuContent.toggleClass("primarynav__ul--active");
  //  this.siteHeader.toggleClass("site-header--is-expanded");
    this.menuIcon.toggleClass("site-header__menu-icon--close-x");
  }

}

export default MobileMenu;

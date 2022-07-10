console.log(window.innerWidth);
console.log("init on");
console.log(window.screenY);
console.log(window.innerHeight)


// Swiper init
var swiper = new Swiper(".bg-slider-thumbs", {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 0,
  autoplay: {
    delay: 6000
  }
});
var swiper2 = new Swiper(".bg-slider", {
  loop: true,
  spaceBetween: 0,
  thumbs: {
      swiper: swiper,
  },
  autoplay: {
    delay: 6000
  }
});

// Nav Scroller init
const navScroller = new NavScroller(
  "nav"
)
navScroller.init();



// Menu Hamburguer init
const menuHamburguer = new MenuHamburguer(
  ".menuHamburguer",
  ".list"
)
menuHamburguer.init()


// Smooth Component init
const smoothComponent = new SmoothComponent(
  ".twoCarImage",
  ".cardSecTwo",
  ".carCard"
)
smoothComponent.init()



const titleAutoBoot = document.querySelectorAll(".titleAutoBoot")[0]
titleAutoBoot.style.marginLeft = "0";
titleAutoBoot.style.opacity = "1";
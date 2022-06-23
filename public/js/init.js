console.log(window.innerWidth);
console.log(window.scroll);
const menuHamburguer = new MenuHamburguer("menuHamburguer", ".list", ".item");
menuHamburguer.init();

const navScroll = new NavScroll(
    "nav"
)
navScroll.init();

var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
});

console.log("init on");
console.log(window.screenY);

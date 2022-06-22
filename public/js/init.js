console.log(window.innerWidth);

const menuHamburguer = new MenuHamburguer(
    "menuHamburguer",
    ".list",
    ".item"
);
menuHamburguer.init()



var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
});
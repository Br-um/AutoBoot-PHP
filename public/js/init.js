console.log(window.innerWidth);


var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 5000
  }
});

console.log("init on");
console.log(window.screenY);


console.log(window.innerWidth);

const navScroller = new NavScroller(
  "nav"
)
navScroller.init();


const menuHamburguer = new MenuHamburguer(
  "menuHamburguer",
  ".list"
)
menuHamburguer.init()

var popupViews = document.querySelectorAll('.popup-view');
var popupBtns = document.querySelectorAll('.popup-btn');
var closeBtns = document.querySelectorAll('.close-btn');

//javascript for quick view button
var popup = function(popupClick){
  popupViews[popupClick].classList.add('active');
}

popupBtns.forEach((popupBtn, i) => {
  popupBtn.addEventListener("click", () => {
    popup(i);
  });
});

//javascript for close button
closeBtns.forEach((closeBtn) => {
  closeBtn.addEventListener("click", () => {
    popupViews.forEach((popupView) => {
      popupView.classList.remove('active');
    });
  });
});

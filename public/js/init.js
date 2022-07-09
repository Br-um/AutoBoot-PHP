console.log(window.innerWidth);
console.log("init on");
console.log(window.screenY);


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







const navScroller = new NavScroller(
  "nav"
)
navScroller.init();


const menuHamburguer = new MenuHamburguer(
  ".menuHamburguer",
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


const titleAutoBoot = document.querySelectorAll(".titleAutoBoot")[0]
titleAutoBoot.style.marginLeft = "0";
titleAutoBoot.style.opacity = "1";

const navSmooth = document.querySelectorAll(".nav-principal")[0]
navSmooth.style.opacity = "1";
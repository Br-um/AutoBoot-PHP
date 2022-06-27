console.log(window.innerWidth);

const nav = document.getElementsByTagName("nav")[0];
window.onscroll = () => {
  if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
    nav.style.background = "rgba(0,0,0,0.6)";
  }else{
    nav.style.background = "rgba(0,0,0,0)"
  }
}

var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
});

console.log("init on");
console.log(window.screenY);

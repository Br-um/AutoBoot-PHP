class MenuHamburguer {
  constructor(menu, list, listItens, nav) {
    this.menu = document.getElementById(menu);
    this.list = document.querySelector(list);
    this.listItens = document.querySelectorAll(listItens);
    this.act = "act";
    this.handleClick = this.handleClick.bind(this);
  }
  itensAnim() {
    this.listItens.forEach((e) => {
      e.style.animation
        ? (e.style.animation = "")
        : (e.style.animation = "intensAnimation 0.5s ease forwards");
    });
  }
  
  handleClick() {
    this.menu.classList.toggle(this.act);
    this.list.classList.toggle(this.act);
  }
  eventListener() {
    this.menu.addEventListener("click", this.handleClick);
  }
  init() {
    if (this.menu) {
      this.eventListener();
    }
  }
}

class NavScroll {
    constructor(nav) {
        this.nav = document.getElementsByTagName(nav)[0];
    }
    scrollNavFunction() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            this.nav.style.background = "#000";
        } else {
            this.nav.style.background = "#fff";
        }
    }
    onScroll() {
        window.onscroll = () => {
            this.scrollFunction();
            this.scrollNavFunction();
        }
    }
    init() {
        this.onScroll();
    }
}
console.log("classes on");

class NavScroller{
    constructor(nav){
        this.nav = document.getElementsByTagName(nav)[0];
    }
    scrollEvent(){
        if(document.body.scrollTop > 500 && window.innerWidth < 830){
            this.nav.style.top = "-200vh"
            this.nav.style.transition = "0.8s"
        }else{
            this.nav.style.top = "0"
          }
    }
    onscroll(){
        window.onscroll = () => {
            this.scrollEvent()
        }
    }
    init(){
        this.onscroll();
    }
}

class MenuHamburguer{
    constructor(menu, list){
        this.menu = document.querySelectorAll(menu)[0]
        this.list = document.querySelectorAll(list)[0]
        this.handleClick = this.handleClick.bind(this)

        this.act = "act"
        }

        handleClick() {
            this.list.classList.toggle(this.act)
            this.menu.classList.toggle(this.act)
        }
        clickEvent(){
            this.menu.addEventListener("click", this.handleClick)
        }
        init(){
            if(this.menu){
                this.clickEvent()
            }
            return this
        }
}
console.log("class init")
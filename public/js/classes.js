class NavScroller{
    constructor(nav){

        this.nav = document.getElementsByTagName(nav)[0];
    }
    scrollEvent(){
        if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
            this.nav.style.background = "rgba(0,0,0,0.6)"
        }else{
            this.nav.style.background = "rgba(0,0,0,0)"
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
        this.menu = document.getElementById(menu)
        this.list = document.getElementsByClassName(list)[0]
        this.handleClick = this.handleClick.bind(this)

        this.act = "act"
        }

        handleClick(){
            this.list.classList.toggle(this.act)
            this.menu.classList.toggle(this.act)
        }
        clickEvent(){
            this.menu.addEventListener("click", this.handleClick())
        }
        init(){
            if(this.menu){
                this.clickEvent()
            }
            return this
        }
}


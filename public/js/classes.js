class NavScroller {
    constructor(nav) {
        this.nav = document.getElementsByTagName(nav)[0]
    }
    navSmooth() {
        this.nav.style.opacity = "1";
        return this
    }
    scrollEvent() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500 && window.innerWidth > 830) {
            this.nav.style.top = "-200vh"
            this.nav.style.transition = "0.8s"
        } else {
            this.nav.style.top = "0"
        }
        return this
    }
    onscroll() {
        window.onscroll = () => {
            this.scrollEvent()
        }
        return this
    }
    init() {
        this.onscroll()
        this.navSmooth()
        return this
    }
}



class MenuHamburguer {
    constructor(menu, list) {
        this.menu = document.querySelectorAll(menu)[0]
        this.list = document.querySelectorAll(list)[0]
        this.handleClick = this.handleClick.bind(this)

        this.act = "act"
    }

    handleClick() {
        this.list.classList.toggle(this.act)
        this.menu.classList.toggle(this.act)
    }
    clickEvent() {
        this.menu.addEventListener("click", this.handleClick)
    }
    init() {
        if (this.menu) {
            this.clickEvent()
        }
        return this
    }
}



class SmoothComponent {
    constructor(cardReg, cardTwo, carCard) {
        this.cardReg = document.querySelectorAll(cardReg)[0]
        this.cardTwo = document.querySelectorAll(cardTwo)
        this.carCard = document.querySelectorAll(carCard)
    }
    clientRect(){
        this.carCard.forEach(e => {
            e.getBoundingClientRect()
        })
        return this
    }
    smoothCarCard(){
        if ( document.body.scrollTop == this.clientRect() || document.documentElement.scrollTop == this.clientRect()){
            this.carCard.forEach(e => {
                e.style.opacity = 0
            })
        }
    }
    smoothCardReg() {
        if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
            this.cardReg.style.opacity = "1"
            this.cardReg.style.marginBottom = "50px"
            this.cardTwo.forEach(e => {
                e.style.opacity = "1"
                e.style.transitionDelay = "0.1s"
                e.style.marginBottom = "10px"
            })
        } else {
            this.cardReg.style.opacity = "0"
            this.cardReg.style.marginBottom = "-200px"
            this.cardTwo.forEach(e => {
                e.style.transitionDelay = "0s"
                e.style.opacity = "0"
                e.style.marginBottom = "-100px"
            })
        }
        return this
    }

    onscroll() {
        window.onscroll = () => {
            this.smoothCardReg()
            this.smoothCarCard()
        }
        return this
    }

    init() {
        this.onscroll()
        return this
    }
}
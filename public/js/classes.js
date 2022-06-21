class MenuHamburguer{
    constructor(menu, list, listItens)
    {
        this.menu = document.getElementById(menu);
        this.list = document.querySelector(list);
        this.listItens = document.querySelectorAll(listItens);
        this.act = "act";
        this.handleClick = this.handleClick.bind(this);
    }
        itensAnim(){
            this.listItens.forEach(e => {
                e.style.animation
                ? (e.style.animation = "")
                : (e.style.animation = "intensAnimation 0.5s ease forwards");
            })
        }
        handleClick(){
            this.menu.classList.toggle(this.act);
            this.list.classList.toggle(this.act);
        }
        eventListener(){
            this.menu.addEventListener("click", this.handleClick);
        }
        init(){
            if(this.menu){
                this.eventListener();
            }
        }
}
console.log("classes on")
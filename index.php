<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/home.css">
    <script src="https://kit.fontawesome.com/57a78e002b.js" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>AutoBoot</title>
</head>

<body>

    <header>
        <nav>
            <h3>
                Logo
            </h3>
            <div id="menuHamburguer">
                <span class="line1 item"></span>
                <span class="line2 item"></span>
                <span class="line3 item"></span>
            </div>
            <ul class="list">
                <li><a href="/trabalho"><i class="fa-solid fa-house icon"></i>Home</li></a>
                <li><a href="http://"><i class="fa-solid fa-car icon"></i>Estoque</li></a>
                <li><a href="http://"><i class="fa-solid fa-people-group icon"></i>Nós</li></a>
                <li>
                    <form class="form">
                        <button>
                            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                                <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <input class="input" placeholder="Type your text" required="" type="text">
                        <button class="reset" type="reset">
                            <svg xmlns="http://www.w3.org/2000/sv" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <img src="public/img/ferrari.png" alt="" srcset="">
    </header>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="carFocus"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="public/img/cr1.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="public/img/cr2.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="public/img/cr3.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="public/img/cr4.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="public/img/cr5.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="public/img/cr6.jpg" alt="" srcset=""></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <section class="container">
        <div class="carCard">
            <div></div>
        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
        <div class="carCard">

        </div>
    </section>
    </section>


    <script src="public/js/classes.js"></script>
    <script src="public/js/init.js"></script>
</body>

</html>




<div class="popup-view">
    <div class="popup-card">
        <a><i class="fas fa-times close-btn"></i></a>
        <div class="product-img">
            <img src="images/oleo.png" alt="">
        </div>
        <div class="info">
            <h2>Óleo<br><span>Para Carro</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <span class="price">$250.00</span>
            <a href="#" class="add-cart-btn">Add ao carrinho</a>
            <a href="#" class="add-wish">Add a lista de desejo</a>
        </div>
    </div>
</div>
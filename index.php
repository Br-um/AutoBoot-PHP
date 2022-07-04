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
        <nav class="nav-principal">
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
        <h2>AutoBoot</h2>
        <img src="public/img/ferrari.png" alt="" srcset="">
    </header>
    <!-- Swiper -->
    <section class="home">
        <div class="media-icons">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="swiper bg-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="public/img/cr1.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">AutoBoot</h2>
                    </div>
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="public/img/cr2.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">Como Surgiu?</h2>
                        <p>Surgiu com intuito de facilitar a compra de carros esportivos sem muita demanda presencial.</p>
                        <button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button>
                    </div>
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="public/img/cr3.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">Que itens pode comprar aqui?</h2>
                        <p>Aqui você pode comprar qualquer produto que tenha nos postos desde a gasolina a lubrificante para o carro.</p>
                        <button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="public/img/cr4.jpg" alt="">
                    <div class="text-content">
                        <h2 class="title">Quem Somos?</h2>
                        <p>Nós surgiu com o propósito de ajudar a comunidade usando tecnologia, nosso site tem em mente em resolver o problema na demora para o abastecimento de carro, caminhão, moto, etc... e também ajuda a achar o posto com o melhor custo beneficio perto de sua casa.</p>
                        <button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-slider-thumbs">
            <div class="swiper-wrapper thumbs-container">
                <img src="public/img/cr1.jpg" class="swiper-slide" alt="">
                <img src="public/img/cr2.jpg" class="swiper-slide" alt="">
                <img src="public/img/cr3.jpg" class="swiper-slide" alt="">
                <img src="public/img/cr4.jpg" class="swiper-slide" alt="">
            </div>
        </div>
    </section>
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


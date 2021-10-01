<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/singl-page.css">
    <link rel="stylesheet" href="/css/menu-list.css">

    <title>weycar</title>
</head>

<body>
    <!--header-->
    <section class="wrapper-outer section-header">
        <div class="wrapper-inner">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href='{{route("index")}}'><img src="/image/logo.png" alt="Logo"></a>
                </div>
                <div class="wrapp320">
                    <div class="header-contact">
                        <div class="contact-data">
                            <div class="contact-data__phone">+7 (495) 790 50 61</div>
                            <div class="contact-data__email">info@weycar.ru</div>
                        </div>
                        <div class="contact-image">
                            <img src="/image/phone_ico.png" alt="ico">
                        </div>
                    </div>
                    <div class="header-login">
                        <a href="#">Личный кабинет</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
        <!--footer-->
        <div id="next5" class="footer-bg"></div>
    <section class="wrapper-outer section-footer">
        <div class="wrapper-inner">
            <div class="footer">
                <div class="cat-wrapp">
                    <div class="catalog">
                        <div class="title">Каталог</div>
                        <a href="#">Тахографы</a>
                        <a href="#">CAN считыватели</a>
                        <a href="#">Автомобили <br> спец назначения</a>
                        <a href="#">Блоки мониторинга</a>
                        <a href="#">Видеорегистраторы</a>
                        <a href="#">Датчики уровня <br> топлива</a>
                        <a href="#">Допог</a>
                    </div>
                    <div class="cataog2">
                        <a href="">Дополнительные <br> датчики</a>
                        <a href="">Отопители</a>
                        <a href="">Светодиодные <br> панели</a>
                        <a href="">Сигнализации</a>
                        <a href="">Табло</a>
                        <a href="">Фароносители <br> и освещение</a>
                    </div>
                </div>
                <div class="ms-wrapp">
                    <div class="menu">
                        <div class="title">Меню</div>
                        <a href="">О компании</a>
                        <a href="">Оборудование</a>
                        <a href="">Наши работы</a>
                        <a href="">Личный кабинет</a>
                        <a href="">Статьи</a>
                    </div>
                    <div class="service">
                        <div class="title">Услуги</div>
                        <a href="">Информационное<br>табло</a>
                        <a href="">Отопители</a>
                        <a href="">Спутниковый <br> мониторинг</a>
                        <a href="">Видео мониторинг</a>
                    </div>
                </div>
                <div class="social">
                    <div class="social-button">
                        <div class="social-button-phone-wrapper">
                            <a href="">Связаться с нами</a>
                            <img src="/image/footer-phono-ico.png" alt="logo">
                        </div>
                        <div class="social-button-wrapper">

                            <a href="#">
                                <div class=""><img src="/image/vk-footer.png" alt=""></div>
                            </a>
                            <a href="#">
                                <div class=""><img src="/image/in-footer.png" alt="in"></div>
                            </a>
                            <a href="#">
                                <div class=""><img src="/image/fb-footer.png" alt="fb"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copywrite">© 2021 ВЕЙКАР. Все права защищены.</div>
        </div>
    </section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script>
    </script>
</body>

</html>
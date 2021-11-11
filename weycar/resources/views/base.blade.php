<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/menu-list.css">
    <link rel="stylesheet" href="/css/services.css">
    <link rel="stylesheet" href="/css/nashi-raboty.css">
    <link rel="stylesheet" href="/css/singl-page.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js" integrity="sha512-m5kAjE5cCBN5pwlVFi4ABsZgnLuKPEx0fOnzaH5v64Zi3wKnhesNUYq4yKmHQyTa3gmkR6YeSKW1S+siMvgWtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
                            <a href="tel:+7 (495) 790 50 61"><div class="contact-data__phone">+7 (495) 790 50 61</div></a> 
                            <a href="mailto:info@weycar.ru"><div class="contact-data__email">info@weycar.ru</div></a> 
                        </div>
                        <a href="tel:+7 (495) 790 50 61">
                        <div class="contact-image">
                            <img src="/image/phone_ico.png" alt="ico">
                        </div>
                        </a>
                    </div>
                    <div class="header-login">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Личный кабинет</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">                      

                  <div class="btn">                  
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                 <div class="login-link"><a target="_blank" href="https://hosting.wialon.com/">Мониторинг транспорта<br>Войти </a></div>
                 <div class="login-link"><a target="_blank" href="https://carvis.online/">Видео мониторинг<br>Войти</a></div>
                </div>
            </div>
          </div>
        </div>

    </section>
    @yield('content')
    <!-- Button trigger modal -->


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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    
    

</body>

</html>
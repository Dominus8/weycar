<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Мета для ссылки-->

    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Название страницы"/>
    <meta property="og:description" content="Описание страницы"/>
    <meta property="og:image" content="/image/ourworks-logo.png"/>
    <meta property="og:url" content="http://weycar.ru"/>
    <meta property="og:site_name" content="Weycar"/>


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
<!-- Put this script tag to the <head> of your page -->
<script
  type="text/javascript"
  src="https://vk.com/js/api/share.js?95"
  charset="windows-1251"
></script>    

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
                            <a class="contact-data__phone" href="tel:+7 (495) 790 50 61"><div >+7 (495) 790 50 61</div></a> 
                            <a class="contact-data__email" href="mailto:info@weycar.ru"><div > <span>info@weycar.ru </span> </div></a> 
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
                        <div class="title"></div>
                        <a href="{{route('index')}}">Главная</a><br>
                        <a href="{{route('all_category')}}">Каталог</a><br>
                        <a href="{{route('services')}}">Услуги</a><br>
                        <a href="{{route('ourworks')}}">Наши работы</a><br>
                        <a href="{{route('relatedproducts')}}">Сопутствующие работы</a><br>
                        <a href="{{route('referentlist')}}">Референт лист</a><br>
                        <a href="{{route('category',10)}}">Приборы спутникового мониторинга</a><br>
                    </div>
                    <div class="catalog">
                        <a href="{{route('category',9)}}">Тахографы</a><br>
                        <a href="{{route('category',8)}}">Видеорегистраторы</a><br>
                        <a href="{{route('category',7)}}">Табло Маршрутоуказатели</a><br>
                        <a href="{{route('category',6)}}">Датчики уровня топлива</a><br>
                        <a href="{{route('category',5)}}">Сигнализации</a><br>
                        <a href="{{route('category',4)}}">Отопители</a><br>
                        
                    </div>
                </div>
                <div class="ms-wrapp">
                    <div class="menu">
                        <div class="title"></div>
                        <a href="{{route('category',3)}}">Оборудование для автомобилей спц. назначения</a><br>
                        <a href="{{route('category',2)}}">Система <wbr> нагрузи на ось</a> <br>
                        <a href="{{route('category',1)}}">Топливо-заправочные модули</a><br>
                    </div>
                    <div class="service">

                    </div>
                </div>
                <div class="social">
                    <div class="social-button">
                        <div class="social-button-phone-wrapper">
                            <a href="">Связаться с нами</a>
                            <img src="/image/footer-phono-ico.png" alt="logo">
                        </div>
                        <div class="social-button-wrapper">

                            
                            
                        
                                <div style=" padding: 8px 5px 5px 5px; border: solid 2px #3c96c8; border-radius:5px;" class="">
                                <script type="text/javascript">
                                document.write(VK.Share.button(false,{
                                    type: "custom", text: "<img src='/image/vk-footer.png'>",
                                    url: 'http://weycar.ru/',
                                    title: 'weycar.ru',
                                    image: 'http://212.109.195.83:8989/image/logo.png',
                                    noparse: true
                                }));
                            </script>
                                </div>
                            


                            <a href="https://www.instagram.com/weycar/">
                                <div class="">
                                    <img src="/image/in-footer.png" alt="in">
                                </div>
                            </a>

                            <!--<img src="/image/in-footer.png" alt="in"> -->
                            
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
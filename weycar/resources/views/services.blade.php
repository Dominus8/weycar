@extends('base')

@section('content')
    <!--main-->
    <div class="paginations"><a href="{{route('index')}}">Главная</a> > <a href="{{route('all_category')}}">Каталог</a> > Услуги </div>
    <div class="services-main">
        <section class="wrapper-outer section-services-first">
            <div class="wrapper-inner service-inner">
                <div class="services-first">
                    <div class="services-first__descriptions">
                        Компания “ВЕЙКАР” уже много лет специализируется на установке и наладке оборудования для спутникового мониторинга транспорта в Москве и Московской области. <br>
                        Сертифицированные специалисты нашей компании умеют работать с любым типом оборудования любой сложности. <br>
                        Также, мы являемся дилерами и автоматизированной мастерской по ремонту оборудования спутникового мониторинга транспорта.

                    </div>
                    <div class="ofers-wrapper">
                        <div class="ofers-list">
                            <div class="ofers-list__list-heading">Мы предлогаем такие услуги как:</div>
                            <div class="ofers-list-buttons">
                               <a href="#s1"><div class="ofers-listbuttons__item">Установка видеонаблюдения в транспорте</div></a> <!--type="button" data-bs-toggle="modal" data-bs-target="#serviceModal1" -->
                               <a href="#s2"><div class="ofers-listbuttons__item">Спутниковый мониторинг транспорта</div></a>
                               <a href="#s3"><div class="ofers-listbuttons__item"> <span>Установка тахографов</span> </div></a>
                               <a href="#s4"><div class="ofers-listbuttons__item">Установка информационного табло</div></a>
                               <a href="#s5"><div class="ofers-listbuttons__item"> <span>Установка автономного отопителя</span> </div></a>
                            </div>
                        </div>
                        <div class="ofers-image">
                            <img src="/image/services-firs-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--Видео-->
         <section class="wrapper-outer section-services-video">
            <div class=" wrapper-inner">
                <div class="services-video">
                    <div id="s1" class="services-video__information">
                        <div class="video-information-wrappwer">
                            <div class="video-information__title">Установка видеонаблюдения в транспорте</div>
                            <div class="video-information__body">

                            Видеонаблюдение в автобусах и автомобилях – это <br> неотъемлемый элемент системы безопасности, 
                            которым оснащается практически каждый транспорт. <br><br>

                            Такая мера позволяет вовремя выявить правонарушителя, а также запись с камеры может стать доказательством в 
                            спорной ситуации. Мы предлагаем приобрести такое оборудование на нашем сайте, а также установить видеонаблюдение в автобусе с нашей помощью.<br><br>

                            В нашем ассортименте представлена продукция торговой марки CARVIS — видеорегистраторы, камеры, сопутствующее оборудование и типовые комплексы для создания централизованной системы видеонаблюдения и видеомониторинга.<br><br>

                            Благодаря появлению новых профильных it-технологий сегодня установка видеонаблюдения на транспорте позволяет контролировать средство передвижения круглосуточно, из любой точки мира, с любого гаджета либо стационарного устройства, интегрированного в сеть Интернет.<br><br>

                            Установка видеонаблюдения на транспорте удобна как физическим владельцам, так и диспетчерам, работникам охраны. Она адаптирована для любого вида транспорта: видеозапись ведется на запоминающее устройство, расположенное в видеорегистраторе.Оптимальна установка видеонаблюдения на транспорте без привязки к персональному компьютеру.<br><br>

                            Доступный ценовой диапазон, подбор видеооборудования опытными консультантами, оперативная доставка и установка, а также быстрое последующее обслуживание, — преимущества сотрудничества с нашей компанией на договорной основе.

                            </div>
                        </div>
                    </div>
                    <div class="services-video__catalog-button">
                        <a href="{{route('index')}}/category/8" class="video-catalog-button">
                            Каталог
                        </a>
                    </div>
                </div>
            </div>
        </section>

       <section class="wrapper-outer section-services-monitoring">
            <div class="service-inner wrapper-inner ">
                <div id="s2" class="services-monitoring">
                    <div class="services-monitoring-information">
                        <div class="services-monitoring-information__top">
                            <div class="information-top-text">
                                <div  class="information-top-text__title">Спутниковый мониторинг транспорта</div>
                                <div class="information-top-text__body">
                                    С помощью компании «Вейкар» можно подключить спутниковый мониторинг транспорта. Эта технология обеспечивает непрерывный контроль грузовых или пассажирских машин, находящихся в рейсе. Отслеживание ведется в режиме реального времени. <br><br>

                                    Спутниковая система мониторинга автотранспорта нужна, в первую очередь, любым логистическим фирмам. Она пригодится также службам доставки крупных интернет-магазинов, электронных маркетплейсов и площадок онлайн-торговли.<br><br>

                                    Однако спутниковый контроль транспорта заметно облегчит работу всем компаниям, чья деятельность так или иначе связана с регулярными перевозками. Это добывающие предприятия, заводы тяжелых отраслей индустрии, фирмы по бытовому обслуживанию.
                                </div>
                            </div>
                            <div class="information-top-catalog-button">
                                <a href="{{route('index')}}/category/10" class="monitoring-catalog-button">
                                    Каталог
                                </a>
                            </div>
                        </div>
                        <div class="services-monitoring-information__bottom">
                        <div class="information-bottom-buttons">
                            <a type="button" id="p1" tu="1" class="information-bottom-button">Стоимость</a> <!--data-bs-toggle="modal" data-bs-target="#serviceModal6"-->
                            <script>
                                $( document ).ready( function (){
                                    var y = $("#p1").attr("tu");
                                    var x = $(".information-bottom-price").attr("style");
                                    
                                    $("#p1").on('click',function (){
                                        
                                        if(y==1){
                                           $("#p1").attr("tu",2);
                                           $(".information-bottom-price").attr("style","visibility:visible;");
                                       }
                                        if(y==2){
                                           $("#p1").attr("tu",1);
                                           $(".information-bottom-price").attr("style","visibility:hidden;");   
                                       }
                                       y = $("#p1").attr("tu");
                                       
                                    });
                                    
                                    
                                    
                                    
                                });
                                
                            </script>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#serviceModal7" class="information-bottom-button">Что дает спутниковый мониторинг</a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#serviceModal8" class="information-bottom-button">Как устроена система слежения за транспортом</a>
                        </div>
                        <div class="information-bottom-price" style='visibility: hidden;'>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Услуга</div>
                                <div class="information-bottom-price-cost">Цена</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Устновка терминала</div>
                                <div class="information-bottom-price-cost">от 2000 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Установка датчика уровня топлива</div>
                                <div class="information-bottom-price-cost">от 4000 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Уст. Датчика темпертуры (проводной)</div>
                                <div class="information-bottom-price-cost">от 2500 руб</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Уст. Датчик температуры BL (блютуз)</div>
                                <div class="information-bottom-price-cost">от 1500руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Концевик двери (проводной)</div>
                                <div class="information-bottom-price-cost">от 2500 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Концевик двери BL (блютуз)</div>
                                <div class="information-bottom-price-cost">от 1500руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Датчик работы двигателя</div>
                                <div class="information-bottom-price-cost">от 2000 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Блокировка двигателя</div>
                                <div class="information-bottom-price-cost">от 2000 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Блокировка двигателя (радио реле)</div>
                                <div class="information-bottom-price-cost">от 2000 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Датчики работы агрегатов</div>
                                <div class="information-bottom-price-cost">от 1000руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Подключение к CAN-шине автомобиля</div>
                                <div class="information-bottom-price-cost">от 2500 руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Выезд специалиста за МКАД</div>
                                <div class="information-bottom-price-cost">20руб. За 1 км.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Установка тревожной кнопки</div>
                                <div class="information-bottom-price-cost">от 1500руб.</div>
                            </div>
                            <div class="information-bottom-price-wrapper">
                                <div class="information-bottom-price-name">Установка громкой связи</div>
                                <div class="information-bottom-price-cost">от 1500руб.</div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!--<section class="wrapper-outer section-services-tachographs">
            <div class="wrapper-inner service-inner ">
                <div id="s3" class="services-tachographs">
                    <div class="services-tachographs-installation">
                        <div class="tachographs-installation__text">
                            <div  class="installation-text__title">
                                Установка тахографов
                            </div>
                            <div class="installation-text__body">
                            Установка качественного сопутствующего автооборудования — одна из гарантий безопасности водителя и пассажиров во время езды, а также сохранности груза. <br><br>

                            Одна из услуг нашей компании — установка тахографа под ключ. Мы берем на себя подбор оптимальной модели, оперативную доставку, установку, плановое сервисное обслуживание и ситуационный ремонт. С нашей помощью вы установите тахограф в короткие сроки по разумной цене с полным спектром гарантий.<br><br>

                            Установка тахографа на автомобиль — обязательное мероприятие, регламентированное Приказом Министерства транспорта № 36 от 13 февраля 2013 года. Согласно документу, установка тахографов в Москве и Московской области обязательна для пассажирских транспортных средств вместительностью от восьми мест, а также для грузового транспорта с начальной массой 3,5 тонны.<br><br>

                            Установка сертифицированного тахографа обеспечивает контроль пробега, числа оборотов двигателя, времени в пути, способствуя формированию оптимального графика движения.<br><br>

                            Мы сотрудничаем с логистическими компаниями, обязанными, согласно вышеупомянутому Приказу, обеспечить наличие тахографов в принадлежащих им автомобилях. Отсутствие оборудования является серьезным нарушением, влекущим за собой штрафные санкции.
                            </div>
                        </div>
                        <div class="tachographs-installation__button">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#serviceModal9" class="installation-button">Установка тахографа под ключ <wbr> —  Москва и Подмосковье</a>
                        </div>
                    </div>
                    <div class="services-tachographs-catalog">
                        <div class="tachographs-catalog__button">
                            <a href="{{route('index')}}/category/9" class="catalog-button">
                                Каталог</a>
                        </div>
                        <div class="tachographs-catalog__description">
                        Установка тахографа под ключ подразумевает комплекс единовременных и последующих услуг: <br><br>

                        - монтаж осуществляется по месту нахождения автомобиля в автопарке:<br>
                        - установка тахографа сопровождается тестированием со снятием запротоколированных контрольных показаний;<br>
                        - в ближайшее время производится повторная проверка показаний%<br>
                        - заключение договора на гарантийное и обычное сервисное обслуживание с устранением сбоев, обработкой и анализом показаний;<br>
                        - мелкий ремонт осуществляется без демонтажа, серьезный — с доставкой оборудования на базу компании;<br>
                        - оперативную доставку сменных деталей.<br><br>

                        Установка тахографов в Москве весьма востребована, что обусловлено ростом спроса на логистические услуги, тем не менее, обратившись в компанию «Вейкар», вы можете быть уверены в установке тахографа под ключ в самые быстрые сроки. Ваша заявка немедленно поступит в обработку.<br><br>

                        Выполнение заявки в оговоренные сроки контролируется консультантом компании.<br><br>

                        Стоимость комплексной услуги варьируется в зависимости от спектра услуг, — как правило, выгоднее воспользоваться позицией «под ключ».
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper-outer section-services-scoreboards">
            <div class="wrapper-inner service-inner">
                <div id="s4" class="services-scoreboards">
                    <div class="services-scoreboards__information">
                        <div class="scoreboards-information-wrappwer">
                            <div  class="scoreboards-information__title">
                                Информационное табло
                            </div>
                            <div class="scoreboards-information__body">

                                Современные светодиодные панели применяются в различных отраслях, помогая привлекать новых клиентов, а также информировать их.
                                Существуют основные направления, где активно применяют информационное табло, например: <br> <br>

                                Табло для транспорта <br>
                                Табло для остановок <br>
                                Табло для вокзалов <br>
                                Табло для АЗС <br>
                                Часы-метеостанции <br>
                                Спортивные табло <br>
                                Табло валют <br>
                                Промышленные табло <br> <br>

                                Информационное табло, является визитной карточкой вашего автопарка. При выборе соответствующего оборудования, необходимо обращать внимание на такие характеристики как качество и долговечность. <br> <br>

                                Информационное табло предназначено для отображения номеров маршрута общественного транспорта, названия остановок, распространение рекламы, и демонстрации различной информации. <br> <br>

                                Яркость светодиодов и их качество позволяют людям увидеть различную информацию с достаточно дальних расстояний, будь это задние места общественного транспорта и пассажира ожидающего своего транспорта.
                            </div>
                        </div>
                    </div>
                    <div class="services-scoreboards__catalog-button">
                        <a href="{{route('index')}}/category/7" class="scoreboards-catalog-button">
                             Каталог
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper-outer section-services-heaters">
            <div class="wrapper-inner service-inner">
                <div id="s5" class="services-heaters">
                    <div  class="services-heaters__information">
                        <div  class="heaters-information-wrappwer">
                            <div  class="heaters-information__title">
                                Отопители
                            </div>
                            <div class="heaters-information__body">
                            Установка автономного отопителя на автомобиль не означает отказа от использования входящей в базовую комплектацию транспортного средства штатной отопительной системы. <br><br>

                            Преимущества установки автономного отопителя на автомобиль по доступной в нашей компании цене очевидны:<br><br>

                            предпусковой аппарат работает на обогрев без взаимодействия с двигателем и другими узлами, что особенно важно в зимнее время;<br><br>
                            подкапотное пространство прогревается более эффективно;<br>
                            беспроблемный запуск ДВС;<br>
                            более быстрый нагрев салона до комфортной температуры в холодный сезон;<br>
                            удобное дистанционное включение.

                            Установка отопителя в автомобиль — выбор водителей, заботящихся о долговечности транспортного средства. Быстрый запуск без предварительного прогревания при низких температурах неизбежно ведет к скорому износу, так как густое масло не успевает смазать детали в достаточной степени.<br><br>

                            Установка автономного отопителя на автомобиль в Москве<br><br>
                            В нашей компании — доступная цена на установку автономного отопителя на грузовой автомобиль.<br><br>

                            Вашему вниманию — воздушные, жидкостные, масляные агрегаты, функционирующие на газе, природном газе, бензине, дизельном топливе. Конструктивный принцип устройства оборудования общий: агрегат состоит из теплообменника, вентилятора, камеры сгорания. Ряд моделей оснащен баком для горючего.<br><br>

                            Установка отопителей на грузовики осуществляется по месту базовой парковки, в самые короткие сроки после оформления заявки.<br><br>
                            </div>
                        </div>
                    </div>
                    <div class="services-heaters__catalog-button">
                        <a href="{{route('index')}}/category/4" class="heaters-catalog-button">
                             Каталог
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div> -->
 
    <!-- Modal 1 -->
    <div class="modal fade" id="serviceModal1" tabindex="-1" aria-labelledby="serviceModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal1Label">Установка видеонаблюдения в транспорте</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Установка видеонаблюдения в транспорте
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 2 -->
    <div class="modal fade" id="serviceModal2" tabindex="-1" aria-labelledby="serviceModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal2Label">Спутниковый мониторинг транспорта</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Спутниковый мониторинг транспорта
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 3 -->
    <div class="modal fade" id="serviceModal3" tabindex="-1" aria-labelledby="serviceModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal3Label">Установка тахографов</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Установка тахографов
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 4 -->
    <div class="modal fade" id="serviceModal4" tabindex="-1" aria-labelledby="serviceModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal4Label">Установка информационного табло</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Установка информационного табло
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 5 -->
    <div class="modal fade" id="serviceModal5" tabindex="-1" aria-labelledby="serviceModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal5Label">Установка автономного отопителя</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Установка автономного отопителя
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 6 -->
    <div class="modal fade" id="serviceModal6" tabindex="-1" aria-labelledby="serviceModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal6Label">Стоимость</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Стоимость
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 7 -->
    <div class="modal fade" id="serviceModal7" tabindex="-1" aria-labelledby="serviceModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal7Label">Что дает спутниковый мониторинг</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Что дает спутниковый мониторинг
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 8 -->
    <div class="modal fade" id="serviceModal8" tabindex="-1" aria-labelledby="serviceModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal8Label">Как устроена система слежения за транспортом</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Как устроена система слежения за транспортом
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
 
    <!-- Modal 9 -->
    <div class="modal fade" id="serviceModal9" tabindex="-1" aria-labelledby="serviceModal9Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="serviceModal9Label">Установка тахографа под ключ — Москва и Подмосковье</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              Установка тахографа под ключ — Москва и Подмосковье
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
              </div>
            </div>
        </div>
    </div>
@endsection
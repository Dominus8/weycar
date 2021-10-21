@extends('base')

@section('content')
<div class="paginations">Главная > Каталог > Регистраторы </div>
    <div class="main-content">
        <section class="wrapper-outer section-menu-list">
            <div class="wrapper-inner">
                <div class="menu-list">
                    <div class="menu-list-wrapper">
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/services.png" alt="">
                                </div>
                                <div class="item__title">Услуги
                                </div>
                            </div>
                        </div>
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/ourw.png" alt="">
                                </div>
                                <div class="item__title">Наши работы
                                </div>
                            </div>
                        </div>
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/sr.png" alt="">
                                </div>
                                <div class="item__title">Сопутствующие работы
                                </div>
                            </div>
                        </div>
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/refer-list.png" alt="">
                                </div>
                                <div class="item__title">Референт-лист</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper-outer section-video-recorders-category-info">
            <div class="wrapper-inner">
                <div class="video-recorders-category-info">
                    <div class="category-info-title">
                        Оборудование
                    </div>
                    <div class="category-info-subtitle">

                    </div>
                </div>
            </div>
        </section>

        <!--Секция с подменю-->
        <section class="wrapper-outer section-equipment">
            <div class="wrapper-inner">
                <div class="equipment">
                    <div class="equipment-wrapper">
                
                        <!-- <div class="equipment__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/vr-soputstvuiyshie.png" alt="">
                                </div>
                                <div class="item__title">Приборы спутникового мониторинга</div>
                            </div>
                        </div> -->

                        <!-- @foreach($subcategory as $el)
                        
                            <div class="equipment__item">
                                <div class="item-wrapper">
                                    <a href="{{route('subcategory', ['catid'=>$el->category->category_id, 'subcatid'=>$el->subcategory_id] )}}">
                                    <div class="item__image">
                                        <img src="/storage/subcategory_image/{{$el->image}}" alt="">
                                    </div>
                                    <div class="item__title">
                                        {{$el->title}}
                                    </div>
                                </a>
                                </div>
                            </div>
                        
                    @endforeach -->

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 1)}}{{route('category', 1)}}">
                                <div class="item__image">
                                    <img src="image/s-monitor.png" alt="">
                                </div>
                                <div class="item__title">
                                   Приборы спутникового мониторинга
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 2)}}">
                                <div class="item__image">
                                    <img src="image/tachographs.png" alt="">
                                </div>
                                <div class="item__title">
                                   Тахографы
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 3)}}">
                                <div class="item__image">
                                    <img src="image/vr-camera.png" alt="">
                                </div>
                                <div class="item__title">
                                   Видеорегистраторы
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 4)}}">
                                <div class="item__image">
                                    <img src="image/tablo.png" alt="">
                                </div>
                                <div class="item__title">
                                   Табло Маршрутоуказатели
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 5)}}">
                                <div class="item__image">
                                    <img src="image/fuil-dat.png" alt="">
                                </div>
                                <div class="item__title">
                                   Датчики уровня топлива Доп. датчики
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 6)}}">
                                <div class="item__image">
                                    <img src="image/alerts.png" alt="">
                                </div>
                                <div class="item__title">
                                   Сигнализации
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 7)}}">
                                <div class="item__image">
                                    <img src="image/heaters.png" alt="">
                                </div>
                                <div class="item__title">
                                   Отопители
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 8)}}">
                                <div class="item__image">
                                    <img src="image/mass-button.png" alt="">
                                </div>
                                <div class="item__title">
                                   Оборудование для автомобилей спц. назначения
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 9)}}">
                                <div class="item__image">
                                    <img src="image/sno.png" alt="">
                                </div>
                                <div class="item__title">
                                   Система нагрузки на ось
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="equipment__item">
                        <div class="item-wrapper">
                            <a href="{{route('category', 10)}}">
                                <div class="item__image">
                                    <img src="image/tzm.png" alt="">
                                </div>
                                <div class="item__title">
                                   Топливо-<br>заправочные модули
                                </div>
                            </a>
                        </div>
                    </div>
                        
                        <!---->
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
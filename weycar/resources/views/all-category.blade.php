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
                                    <img src="/image/vr-complect.png" alt="">
                                </div>
                                <div class="item__title">Услуги
                                </div>
                            </div>
                        </div>
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/vr.png" alt="">
                                </div>
                                <div class="item__title">Наши работы
                                </div>
                            </div>
                        </div>
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/vr-camera.png" alt="">
                                </div>
                                <div class="item__title">Сопутствующие работы
                                </div>
                            </div>
                        </div>
                        <div class="menu-list__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/vr-soputstvuiyshie.png" alt="">
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

                        @foreach($subcategory as $el)
                        
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
                        
                    @endforeach

                        <!---->
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
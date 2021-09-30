@extends('base')

@section('content')
<!--main-->
<div class="paginations">Главная > Каталог > Регистраторы </div>
    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                    <div class="singl-page-wrapper">
                        <div class="singl-page__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/tablo.png" alt="">
                                </div>
                                <div class="item__title">Табло
                                </div>
                            </div>
                        </div>
                        <div class="singl-page__item">
                            <div class="item-wrapper">
                                <div class="item__image">
                                    <img src="/image/nabor.png" alt="">
                                </div>
                                <div class="item__title">Комплекты
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper-outer section-singl-page-category-info">
            <div class="wrapper-inner">
                <div class="singl-page-category-info">
                    <div class="category-info-title">
                    </div>
                    <div class="category-info-subtitle">
                    </div>
                </div>
            </div>
        </section>

        <!--Секция с карточкой товара-->

        <section class="wrapper-outer section-singl-page-product-cards">
            <div class="wrapper-inner">
                <div class="singl-page-product-cards">
                    <div class="product-cards-wrapper">
                        <div class="product-cards__body">
                            <div class="product-cards__body-image-area">
                                <div class="cards-image"><img src="" alt=""></div>
                                <div class="cards-image"><img src="" alt=""></div>
                                <div class="cards-image"><img src="" alt=""></div>
                                <div class="cards-image"><img src="" alt=""></div>
                                <div class="cards-image"><img src="" alt=""></div>
                            </div>
                            <div class="product-cards__body-text-area">
                                <div class="body-text-area-title">Заголовок товара</div>
                                <div class="body-text-area-subtitle">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию
                                    размеров
                                </div>
                            </div>
                        </div>
                        <div class="product-cards__buttons">
                            <div class="product-cards__buttons-top">
                                <div class="product-cards-price">1500₽</div>
                                <div class="product-cards-order">Заказать</div>
                            </div>
                            <div class="product-cards__buttons-bottom">
                                <div class="product-cards-share">
                                    <img src="/image/product-cards-share.png" alt="">
                                </div>
                                <div class="product-cards-specifications">Характеристики</div>
                                <div class="product-cards-accessories">Комплектующие</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
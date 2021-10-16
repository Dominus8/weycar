@extends('base')

@section('content')
<!--main-->
<div class="paginations">  <a href="{{route('index')}}">Главнаяa</a> > {{ $catid }} >  </div>
    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                    <div class="singl-page-wrapper">
                    @foreach($subcategory as $el)
                        <a href="{{route('subcategory', ['catid'=>$catid, 'subcatid'=>$el->subcategory_id] )}}">
                            <div class="singl-page__item">
                                <div class="item-wrapper">
                                    <div class="item__image">
                                        <img src="/storage/subcategory_image/{{$el->image}}" alt="">
                                    </div>
                                    <div class="item__title">
                                        {{$el->title}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
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
            @foreach($product as $el)
                <div class="singl-page-product-cards">
                    <div class="product-cards-wrapper">
                        <div class="product-cards__body">
                            <div class="product-cards__body-image-area">
                            @if(is_array($el->image))
                                @foreach($el->image as $i)
                                 <div class="cards-image"><img src="/storage/product_image/{{$i}}" alt=""></div>
                                @endforeach
                            @endif 
                            </div>
                            <div class="product-cards__body-text-area">
                                <div class="body-text-area-title">{{$el->name}}</div>
                                <div class="body-text-area-subtitle">
                                    {{$el->description}}
                                </div>
                            </div>
                        </div>
                        <div class="product-cards__buttons">
                            <div class="product-cards__buttons-top">
                                <div class="product-cards-price">{{$el->price}}₽</div>
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
            @endforeach
            </div>
        </section>
    </div>
@endsection
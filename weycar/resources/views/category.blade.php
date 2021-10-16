@extends('base')

@section('content')
<!--main-->
<div class="paginations">  <a href="{{route('index')}}">Главнаяa</a> > {{ $category->category_name }} </div>
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
                                <div type="button" class="product-cards-order" data-bs-toggle="modal" data-bs-target="#orderModal{{$el->id}}">Заказать</div>
                            </div>
                            <div type="button" class="product-cards__buttons-bottom">
                                <div class="product-cards-share">
                                    <img src="/image/product-cards-share.png" alt="">
                                </div>
                                <div type="button" class="product-cards-specifications" data-bs-toggle="modal" data-bs-target="#specificationsModal{{$el->id}}">Характеристики</div>
                                <div type="button" class="product-cards-accessories" data-bs-toggle="modal" data-bs-target="#accessoriesModal{{$el->id}}">Комплектующие</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal -->
                <div  class="modal fade" id="orderModal{{$el->id}}" tabindex="-1" aria-labelledby="orderModal{{$el->id}}Label" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="orderModal{{$el->id}}Label">Купить</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="specificationsModal{{$el->id}}" tabindex="-1" aria-labelledby="specificationsModal{{$el->id}}Label" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="specificationsModal{{$el->id}}Label">Характеристики</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        {{$el->specifications}}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="accessoriesModal{{$el->id}}" tabindex="-1" aria-labelledby="accessoriesModal{{$el->id}}Label" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="accessoriesModal{{$el->id}}Label">Комплектация</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        {{$el->accessories}}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach

            </div>
        </section>
    </div>
@endsection
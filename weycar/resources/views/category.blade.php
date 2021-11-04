@extends('base')

@section('content')
<!--main-->
<div class="paginations">  <a href="{{route('index')}}">Главнаяa</a> >
@if(isset($subcatid))
<a href="{{route('category', $category->category_id )}}">{{ $category->category_name }}</a> > {{$subcategory_title}}
@else
{{ $category->category_name }}
@endif
 </div>
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
                    </div><br>
                    @if(isset($subcatid))
                    <div class=""><h5>{{$subcategory_subtitle}}</h5></div>
                    @endif
                    @if(count($subcategory)==1 and !isset($subcatid))
                    <div class=""><h5>{{$subcategory[0]->subtitle}}</h5></div>
                    
                    @endif
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
                          <div class="product-body__image-wrapper">
                            <div class="slider slider-block{{$el->id}} swiper" >
                              <div class="swiper-wrapper">
                                @if(is_array($el->image))
                                    @foreach($el->image as $i)
                                     <div class="cards-image swiper-slide"><img src="/storage/product_image/{{$i}}" alt=""></div>
                                    @endforeach
                                @endif 
                              </div>
                            </div>

                            <div class="product-cards__body-image-area">

                            @if(is_array($el->image))
                                @foreach($el->image as $i)
                                 <div class="cards-image slider-nav s{{$el->id}}"><img src="/storage/product_image/{{$i}}" alt=""></div>
                                @endforeach
                            @endif 
                          </div>
                            </div>


                            <div class="product-cards__body-text-area">
                                <div class="body-text-area-title">{{$el->name}}</div>
                                <div class="body-text-area-subtitle">
                                    {!!$el->description!!}
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
                  <div  class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div style="z-index: 9999" class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="orderModal{{$el->id}}Label">Купить</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="contactform" method="POST" class="validateform">
                            {{ csrf_field() }}

                            <!-- <div id="sendmessage">
                                Ваше сообщение отправлено!
                            </div> -->
                            <!-- <div id="senderror">
                                При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12 field">
                                    <input class="form-control" type="text" name="name" placeholder="* Введите ваше имя" required />
                                </div>
                              </div><br>
                                <div class="row">
                                <div class="col-lg-12 field">
                                    <input class="form-control" type="email" name="email" placeholder="* Введите ваш email" required />
                                </div>
                                </div><br>
                                <div class="row">
                                <div class="col-lg-12 field">
                                    <input class="form-control" type="text" name="subject" placeholder="{{$el->name}}" required />
                                </div><br><br>
                                
                                <div class="col-lg-12 margintop10 field">
                                    <textarea class="form-control" rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>
                                    <br>
                                    <p>
                                        <button class="btn btn-success margintop10 pull-right" type="submit">Отправить</button>
                                        <!-- <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span> -->
                                    </p>
                                </div>
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
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
                        {!!$el->specifications!!}
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
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
                        {!!$el->accessories!!}
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
                      </div>
                    </div>
                  </div>
                </div>

              <script>
                const mySwiper{{$el->id}} = new Swiper(".slider-block{{$el->id}}", {
                    slidesPerView: 1,
                    loop: true,
                });

                const sliderNavItems{{$el->id}} = document.querySelectorAll('.s{{$el->id}}');

                sliderNavItems{{$el->id}}.forEach((el, index) => {
                    el.setAttribute('data-index', index +1);
                    
                    el.addEventListener('click', (e) => {
                        const index = parseInt(e.currentTarget.dataset.index);
                        mySwiper{{$el->id}}.slideTo(index);
                        console.log(index);
                    })
                });
              </script>
            @endforeach

            </div>
        </section>
    </div>
@endsection
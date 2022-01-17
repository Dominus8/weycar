@extends('base')

@section('content')


<!--main-->
<div class="paginations">  <a href="{{route('index')}}">Главнаяa</a> > <a href="{{route('all_category')}}">Каталог</a> >
@if(isset($subcatid))
<a href="{{route('category', $category->category_id )}}">{{ $category->category_name }}</a> > <div class="catsubtitle">{{$subcategory_title}}</div> 
@else
<div class="catsubtitle">{{ $category->category_name }}</div>
@endif
 </div>

    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner category-single">
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
                    <div class="subcategory_subtitle"><h5>{{$subcategory_subtitle}}</h5></div>
                    @endif
                    @if(count($subcategory)==1 and !isset($subcatid))
                    <div class="subcategory_subtitle"><h5>{{$subcategory[0]->subtitle}}</h5></div>
                    
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
                            <div class="slider slider-block{{$el->id}} swiper">
                              <div  class="swiper-wrapper">
                                <!--Основной слайд-->
                                @if(is_array($el->image))
                                    @foreach($el->image as $i)
                                      <div style="cursor: zoom-in" class="cards-image-container swiper-slide" type="button" data-bs-toggle="modal" data-bs-target="#imageModal{{$el->id}}">
                                        
                                          <img src="/storage/product_image/{{$i}}">
                                        
                                      </div>
                                      <!-- <script>
                                          $(document).ready(function(){
                                            $('.cards-image-container').zoom();
                                          });
                                      </script> -->
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
                              @if(strlen($el->price) > 3)
                                <div id="pr{{$el->id}}" class="product-cards-price product-cards-price--big"> </div>
                                <script>
                                  $('#pr{{$el->id}}').text(({{$el->price}}).toLocaleString('ru-RU')+" ₽");
                                </script>
                              @else
                                <div class="product-cards-price  ">{{$el->price}}₽</div>
                              @endif
                                <div type="button" class="product-cards-order" data-bs-toggle="modal" data-bs-target="#orderModal{{$el->id}}">Заказать</div>
                            </div>
                            <div type="button" class="product-cards__buttons-bottom">
                                <div class="product-cards-share">
                                    <script src="https://yastatic.net/share2/share.js"></script>
                                    <div class="ya-share2" data-size="l" data-shape="normal" data-color-scheme="whiteblack" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,telegram"></div>
                                </div>
                                <div type="button" class="product-cards-specifications" data-bs-toggle="modal" data-bs-target="#specificationsModal{{$el->id}}">Характеристики</div>
                                <div type="button" class="product-cards-accessories" data-bs-toggle="modal" data-bs-target="#accessoriesModal{{$el->id}}">Комплектующие</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal заказать -->
                <div  class="modal fade" id="orderModal{{$el->id}}" tabindex="-1" aria-labelledby="orderModal{{$el->id}}Label" aria-hidden="true">
                  <div  class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div style="z-index: 9999" class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="orderModal{{$el->id}}Label">Купить</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="contactform" method="POST" action="{{route('sendmail')}}" class="validateform">
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
                                    <input class="form-control" type="text" name="subject" placeholder="" value="{{$el->name}}" required />
                                </div><br><br>
                                
                                <div class="col-lg-12 margintop10 field">
                                    <textarea class="form-control" rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>
                                    <br>
                                    <p>
                                        <button class="btn send-btn margintop10 pull-right" type="submit">Отправить</button>
                                        <!-- <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span> -->
                                    </p>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal характеристики -->
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
                    </div>
                  </div>
                </div>
                <!-- Modal комплектация -->
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
                    </div>
                  </div>
                </div>
                <!-- Modal с картинками -->
                <div class="modal modal-image-slider fade" data-local="#myCarousel" id="imageModal{{$el->id}}" style="top:20px" tabindex="-1" aria-labelledby="imageModal{{$el->id}}Label" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="imageModal{{$el->id}}Label">Изображения</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Slider main container -->
                        <div class="swiper slider-init-container swiper{{$el->id}}" >
                          <!-- Additional required wrapper -->
                          <div class="swiper-wrapper" >
                            <!-- Slides -->

                            @if(is_array($el->image))
                                @foreach($el->image as $i)

                                <div class="swiper-slide">
                                  <img src="/storage/product_image/{{$i}}">
                                </div>   

                                @endforeach
                            @endif
                          </div>
                          <!-- If we need pagination -->
                          <div class="swiper-pagination"></div>

                          <!-- If we need navigation buttons -->
                          <div class="swiper-button-prev"></div>
                          <div class="swiper-button-next"></div>

                          <!-- If we need scrollbar -->
                          <!-- <div class="swiper-scrollbar"></div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <script>
                const swiperimg{{$el->id}} = new Swiper('.swiper{{$el->id}}', {
                  // Optional parameters
                  
                  loop: true,

                  // If we need pagination
                  pagination: {
                    el: '.swiper-pagination',
                  },
                
                  // Navigation arrows
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                
                  // And if we need scrollbar
                  scrollbar: {
                    el: '.swiper-scrollbar',
                  },
                });

                const mySwiper{{$el->id}} = new Swiper(".slider-block{{$el->id}}", {
                    slidesPerView: 1,
                    loop: true,
                    allowTouchMove:false,
                });

                const sliderNavItems{{$el->id}} = document.querySelectorAll('.s{{$el->id}}');

                  sliderNavItems{{$el->id}}.forEach((el, index) => {
                    el.setAttribute('data-index', index +1);
                    
                    el.addEventListener('click', (e) => {
                        const index = parseInt(e.currentTarget.dataset.index);
                        mySwiper{{$el->id}}.slideTo(index); 
                    })
                });

              </script>
            @endforeach
          </div>
        </section>
    </div>

@endsection
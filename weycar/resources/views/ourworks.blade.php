@extends('base')

@section('content')
<!--main-->
<div class="paginations"> <a href="{{route('index')}}">Главная </a>> <a href="{{route('all_category')}}"> Каталог </a> ><wbr> Наши работы </div>
    <div class="ourworks-main">

        <div class="ourworks-label-bg"></div>
        <section class="wrapper-outer section-ourworks-label">

            <div class="wrapper-inner">

                <div class="ourworks">
                    <div class="ourworks-wrapper">
                        <div class="ourworks-logo">
                            <img src="/image/ourworks-logo.png" alt="">
                        </div>
                        <div class="ourworks-title">
                            Наши работы
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper-outer section-ourworks-buttons">
            <div class="wrapper-inner">
                <div class="ourworks-buttons">
                    <div>   
                        <div class="accordion ourworks-buttons-wrapper" id="accordionPanel">
                            @foreach($owslide as $slide)
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading{{$slide->id}}">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$slide->id}}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{$slide->id}}">
                                    {{$slide->owtitle}}
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse{{$slide->id}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading{{$slide->id}}" data-bs-parent="#accordionPanel"> 
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">
                                                <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        @foreach($slide -> owimage as $image)
                                                            <div class="slider-nav__item s{{$slide->id}}"><img src="/storage/owimage/{{$image}}" class="rounded" alt="{{$slide->owalt}}"></div>
                                                        @endforeach
                                                    </div> 
                                                    <div class="swiper card-slider__block slider-block{{$slide->id}}">
                                                        <div class="swiper-wrapper">
                                                        @foreach($slide -> owimage as $image)
                                                            <div class="swiper-slide"><img src="/storage/owimage/{{$image}}" class="rounded" alt="{{$slide->owalt}}"></div>
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $( document ).ready(function() {
                                // слайдер наши работы Установка GPS
                                    const mySwiper{{$slide->id}} = new Swiper(".slider-block{{$slide->id}}", {
                                        slidesPerView: 1,
                                        loop: true,
                                    });
                                    const sliderNavItems{{$slide->id}} = document.querySelectorAll('.s{{$slide->id}}');
                                    sliderNavItems{{$slide->id}}.forEach((el, index) => {
                                        el.setAttribute('data-index', index);
                                    
                                        el.addEventListener('click', (e) => {
                                            const index = parseInt(e.currentTarget.dataset.index) + 1;
                                            console.log(index);
                                            mySwiper{{$slide->id}}.slideTo(index);
                                        })
                                    });
                                });    
                            </script>
                        </div>                            
                            @endforeach


                        <!-- <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                                    Установка видеорегистраторов
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2" data-bs-parent="#accordionPanel"> 
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                                <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s2" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block2">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                                    Электронное табло
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3" data-bs-parent="#accordionPanel">
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                                <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s3" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block3">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading4">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                                    Тахографы
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4" data-bs-parent="#accordionPanel">
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                            <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s4" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block4">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading5">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                                    Ограничитель скорости
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5" data-bs-parent="#accordionPanel">
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                            <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s5" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading6">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                                    Установка оборудования на спецтехнику
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6" data-bs-parent="#accordionPanel">
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                            <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s6" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block6">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading7">
                                  <button class=" collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapse7">
                                    Рации
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7" data-bs-parent="#accordionPanel">
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                            <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s7" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block7">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="ourworks-buttons-item">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-heading8">
                                  <button class="collapsed ourworks-buttons-item__btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapse8">
                                    Датчики уровня топлива + блок
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading8" data-bs-parent="#accordionPanel">
                                    <div class="accordion-body">
                                        <div class="ourworks-buttons-item__hidden">
                                            <div class="item-hidden-wrapper">

                                            <div class="card-slider">
                                                    <div class="cart-slider__nav slider-nav">
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        <div class="slider-nav__item s8" tabindex="0"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                    </div>
                                                    <div class="swiper card-slider__block slider-block8">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                            <div class="swiper-slide"><img src="/image/slideItem.jpg" class="rounded" alt="..."></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        </div>    
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
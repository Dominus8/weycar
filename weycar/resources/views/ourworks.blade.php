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
                                                            <div class="slider-nav__item s{{$slide->id}}">
                                                                <img src="/storage/owimage/{{$image}}" class="rounded" alt="{{$slide->owalt}}">
                                                            </div>
                                                        @endforeach
                                                    </div> 
                                                    <div class="swiper card-slider__block slider-block{{$slide->id}}">
                                                        <div class="swiper-wrapper">
                                                        @foreach($slide -> owimage as $image)
                                                            <div class="swiper-slide">
                                                                <img style= "width: 270px;height: 230px;" src="/storage/owimage/{{$image}}" class="rounded" alt="{{$slide->owalt}}">
                                                            </div>
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
                        </div>    
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@extends('base')

@section('content')
<!--main-->
<div class="paginations">test</div>
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
                    <div class="ourworks-buttons-wrapper">
                            <!-- <div class="ourworks-buttons-item__btn">
                                <div class="ourworks-buttons-item__btn-title">текст кнопки 1</div>
                            </div>
                            <div class="ourworks-buttons-item__hidden">
                                <div class="item-hidden-wrapper">
                                    <div class="item-hidden">

                                    </div>
                                    <div class="item-hidden">

                                    </div>
                                    <div class="item-hidden">

                                    </div>
                                    <div class="item-hidden">

                                    </div>
                                    <div class="item-hidden">

                                    </div>
                                    <div class="item-hidden">

                                    </div>
                                    <div class="item-hidden">

                                    </div>
                                </div>
                            </div> -->
                            <div class="accordion ourworks-buttons-item" id="accordionPanelsStayOpenExample">
                              <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                  <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    текст кнопки 1
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                  <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                  </div>
                                </div>
                              </div>
                            </div>
                        
                        <div class="ourworks-buttons-item">
                            <div class="ourworks-buttons-item__btn">
                                <div class="ourworks-buttons-item__btn-title">текст кнопки 2</div>
                            </div>
                            <div class="ourworks-buttons-item__hidden">
                                <div class="item-hidden-wrapper">

                                </div>

                            </div>
                        </div>

                        <div class="ourworks-buttons-item">
                            <div class="ourworks-buttons-item__btn">
                                <div class="ourworks-buttons-item__btn-title">текст кнопки 3</div>
                            </div>
                            <div class="ourworks-buttons-item__hidden">
                                <div class="item-hidden-wrapper">

                                </div>

                            </div>
                        </div>

                        <div class="ourworks-buttons-item">
                            <div class="ourworks-buttons-item__btn">
                                <div class="ourworks-buttons-item__btn-title">текст кнопки 4</div>
                            </div>
                            <div class="ourworks-buttons-item__hidden">
                                <div class="item-hidden-wrapper">

                                </div>

                            </div>
                        </div>

                        <div class="ourworks-buttons-item">
                            <div class="ourworks-buttons-item__btn">
                                <div class="ourworks-buttons-item__btn-title">текст кнопки 5</div>
                            </div>
                            <div class="ourworks-buttons-item__hidden">
                                <div class="item-hidden-wrapper">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
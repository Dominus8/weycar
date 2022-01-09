@extends('base')

@section('content')
    <!--main-->
    <div class="paginations"></div>
    <div class="services-main">
        <section class="wrapper-outer section-referent-first">
            <div class="wrapper-inner">
                <div class="referent-first">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link button_tab  active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">2022</button>
                        <button class="nav-link button_tab " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">2021</button>
                        <button class="nav-link button_tab " id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">2020</button>
                        <button class="nav-link button_tab " id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">2019</button>
                      </div>
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        ООО “НикоАвтоТранс”<br>
                            ООО “КИНГ-ФРОСТ”<br>
                            ООО “СантехПартнер”<br>
                            ООО "СК"<br>
                            ООО “Квест”<br>
                            ООО “Азбука вкуса”<br>
                            ООО “КЕТТЕЙ”<br>
                            ООО “Сантехсервис ПТК”<br>
                            ООО “Мегастройсервис”<br>
                            ООО “МОСТРАНСГРУНТ”<br>
                            ООО “РБК-СТРОЙИНВЕСТ”<br>
                            ООО “НаучТехСтрой плюс”<br>
                            ПАО “Газпром”<br>
                            АО “Вольво Групп Трак Центр”<br>
                            ПАО “Банк Авангард”<br>
                            ООО “ФОРТПАРК”<br>
                            ЗАО “Биокард”<br>
                            ООО “Гострансавто”<br>
                            ООО “Геогаз”<br>
                            И др. 
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            ООО “НикоАвтоТранс”<br>
                            ООО “КИНГ-ФРОСТ”<br>
                            ООО “СантехПартнер”<br>
                            ООО "СК"<br>
                            ООО “Квест”<br>
                            ООО “Азбука вкуса”<br>
                            ООО “КЕТТЕЙ”<br>
                            ООО “Сантехсервис ПТК”<br>
                            ООО “Мегастройсервис”<br>
                            ООО “МОСТРАНСГРУНТ”<br>
                            ООО “РБК-СТРОЙИНВЕСТ”<br>
                            ООО “НаучТехСтрой плюс”<br>
                            ПАО “Газпром”<br>
                            АО “Вольво Групп Трак Центр”<br>
                            ПАО “Банк Авангард”<br>
                            ООО “ФОРТПАРК”<br>
                            ЗАО “Биокард”<br>
                            ООО “Гострансавто”<br>
                            ООО “Геогаз”<br>
                            И др. 

                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        ООО “НикоАвтоТранс”<br>
                            ООО “КИНГ-ФРОСТ”<br>
                            ООО “СантехПартнер”<br>
                            ООО "СК"<br>
                            ООО “Квест”<br>
                            ООО “Азбука вкуса”<br>
                            ООО “КЕТТЕЙ”<br>
                            ООО “Сантехсервис ПТК”<br>
                            ООО “Мегастройсервис”<br>
                            ООО “МОСТРАНСГРУНТ”<br>
                            ООО “РБК-СТРОЙИНВЕСТ”<br>
                            ООО “НаучТехСтрой плюс”<br>
                            ПАО “Газпром”<br>
                            АО “Вольво Групп Трак Центр”<br>
                            ПАО “Банк Авангард”<br>
                            ООО “ФОРТПАРК”<br>
                            ЗАО “Биокард”<br>
                            ООО “Гострансавто”<br>
                            ООО “Геогаз”<br>
                            И др. 
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        ООО “НикоАвтоТранс”<br>
                            ООО “КИНГ-ФРОСТ”<br>
                            ООО “СантехПартнер”<br>
                            ООО "СК"<br>
                            ООО “Квест”<br>
                            ООО “Азбука вкуса”<br>
                            ООО “КЕТТЕЙ”<br>
                            ООО “Сантехсервис ПТК”<br>
                            ООО “Мегастройсервис”<br>
                            ООО “МОСТРАНСГРУНТ”<br>
                            ООО “РБК-СТРОЙИНВЕСТ”<br>
                            ООО “НаучТехСтрой плюс”<br>
                            ПАО “Газпром”<br>
                            АО “Вольво Групп Трак Центр”<br>
                            ПАО “Банк Авангард”<br>
                            ООО “ФОРТПАРК”<br>
                            ЗАО “Биокард”<br>
                            ООО “Гострансавто”<br>
                            ООО “Геогаз”<br>
                            И др. 
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@extends('base')

@section('content')
<div class="paginations">Главная > Каталог > Регистраторы </div>
    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                <div class="admin-section directions-admin">
        <div class="admin-section__title">
            <h2>Создать товар</h2>
        </div>
        <div class="admin-section__form" style="color:white;">
        <form action="/admin/create-product" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    <lable for="pcat" class="form-label"> <h6>Категория товара</h6> </lable>

                    <select id="pcat" name="product_subcategory_id" size="1" >
                      <option selected value="1">Топливозаправочные модули</option>
                      <option value=2>Системы нагрузки на ось</option>
                      <option value=3>Оборудование для спец. техники</option>
                      <option value=4>Отопители</option>
                      <option value=5>Сигнализации</option>
                      <option value=6>Датчики уровня топлива</option>
                      <option value=7>Табло</option>
                      <option value=8>Видеорегистраторы</option>
                      <option value=9>Тахографы</option>
                      <option value=10>Приборы спутникового мониторинга</option>
                    </select> 
                    <br>
    
                    <lable for="pi" class="form-label"> <h6>Изображение продукта</h6>  </lable>
                    <input id="pi" type="file" class="form-control" name='product_image'multiple> <br>

                    <lable for="pt" class="form-label"> <h6>Название</h6>  </lable>
                    <input id="pt" type="text" class="form-control" name='product_name' placeholder="" > <br>
                    
                    <lable for="ps" class="form-label"> <h6>Описание</h6> </lable>
                    <input id="ps"  class="form-control" name="product_description" placeholder=""></input> <br>
                    
                    <lable for="psp" class="form-label"> <h6>Спецификация</h6> </lable>
                    <input id="psp"  class="form-control" name="product_specifications" placeholder=""></input> <br>
                    
                    <lable for="pa" class="form-label"> <h6>Комплектующие</h6> </lable>
                    <input id="pa"  class="form-control" name="product_accessories" placeholder=""></input> <br>
                    
                    <lable for="pp" class="form-label"> <h6>Цена</h6> </lable>
                    <input id="pp"  class="form-control" name="product_price" placeholder=""></input> <br>

                    <lable for="ph" class="form-label"> <h6>Горячий товар да</h6> </lable>
                    
                    <input id="ph" type="radio"  name="product_code" value=1 >
                    <lable for="ph" class="form-label"> <h6>Горячий товар нет</h6> </lable>
                </input><input id="ph0" type="radio"  name="product_code" value=0 checked></input>
                    
                    
                     <br>
                   
                    <button class="btn btn-primary" type="sucsess"> Создать продукт</button>
                </div>
            </form>
        </div>
    </div>
                </div>
            </div>                
        </section>
</div>
@endsection
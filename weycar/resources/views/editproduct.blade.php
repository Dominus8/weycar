@extends('base')

@section('content')
<div class="paginations"> Админка </div>

    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                <div class="admin-section directions-admin">
        <div class="admin-section__title">
            <h2 style="color:white;">Изменить товар</h2> <br>
        </div>
        <div class="admin-section__form" style="color:white;">
            <form action="{{route('update-product',$product->id)}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 

                    <lable for="pcat" class="form-label"> <h6>Категория товара</h6> </lable>
                    <select id="pcat" name="product_subcategory_id" size="1">
                        @foreach($category as $el)
                            <optgroup label="{{$el->category_name}}">
                                @foreach($el->subcat as $el)
                                <option value="{{$el->subcategory_id}}">{{$el->title}}</option>
                                @endforeach
                                
                            </optgroup>
                        @endforeach
                    </select> 
                    <br>
                    
                    <lable for="pi" class="form-label"> <h6>Изображение продукта</h6>  </lable>
                    <input id="pi" type="file" class="form-control" name='product_image[]' multiple> <br> <!---->
                    
                    <lable for="pt" class="form-label"> <h6>Название</h6>  </lable>
                    <input id="pt" type="text" class="form-control" name='product_name' value="{{$product->name}}" placeholder=""></input> <br>
                    
                    <lable for="ps" class="form-label"> <h6>Описание</h6> </lable>
                    <input id="ps"  class="form-control" name="product_description" value="{{$product->description}}" placeholder=""></input> <br>
                    
                    <lable for="psp" class="form-label"> <h6>Спецификация</h6> </lable>
                    <input id="psp"  class="form-control" name="product_specifications" value="{{$product->specifications}}" placeholder=""></input> <br>
                    
                    <lable for="pa" class="form-label"> <h6>Комплектующие</h6> </lable>
                    <input id="pa"  class="form-control" name="product_accessories" value="{{$product->accessories}}" placeholder=""></input> <br>
                    
                    <lable for="pp" class="form-label"> <h6>Цена</h6> </lable>
                    <input id="pp"  class="form-control" name="product_price" value="{{$product->price}}" placeholder=""></input> <br>

                    <lable for="ph" class="form-label"> <h6>Горячий товар да</h6> </lable>
                    <input id="ph" type="radio"  name="product_code" value=1 >
                    <lable for="ph" class="form-label"> <h6>Горячий товар нет</h6> </lable>
                    <input id="ph0" type="radio"  name="product_code" value=0 checked></input>
                    <br>
                   
                    <button class="btn btn-primary" type="sucsess">Обновить продукт</button>
                </div>
            </form> <br> <br> <br>

            
        </div>
    </div>
                </div>
            </div>                
        </section>
</div>
@endsection
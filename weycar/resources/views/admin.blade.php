@extends('base')

@section('content')
<div class="paginations"> Админка </div>

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
                    
                    <lable for="pi" class="form-label"> <h6>Изображение продукта</h6> </lable>
                    <input id="pi" type="file" class="form-control" name='product_image[]' multiple> <br> <!---->
                    
                    <lable for="pt" class="form-label"> <h6>Название</h6> </lable>
                    <input id="pt" type="text" class="form-control" name='product_name' placeholder=""></input> <br>
                    

                    <lable for="ps" class="form-label"> <h6>Описание</h6> </lable>
                    <textarea id="info_sms_id" rows="5"  wrap="physical" id="ps" type="text" class="form-control" name="product_description"  placeholder=""></textarea> <br>

                    <lable for="psp" class="form-label"> <h6>Спецификация</h6> </lable>
                    <textarea rows="5"  wrap="physical" id="psp" type="text" class="form-control" name="product_specifications"   placeholder=""></textarea> <br>

                    <lable for="pa" class="form-label"> <h6>Комплектующие</h6> </lable>
                    <textarea rows="5"  wrap="physical" id="pa" type="text" class="form-control" name="product_accessories"  placeholder=""></textarea> <br>

                    <lable for="pp" class="form-label"> <h6>Цена</h6> </lable>
                    <input id="pp" type="number" step="0.001" class="form-control" name="product_price" ></input> <br>

                    <lable for="ph" class="form-label"> <h6>Горячий товар да</h6> </lable>
                    
                    <input id="ph" type="radio"  name="product_code" value=1 >
                    <lable for="ph" class="form-label"> <h6>Горячий товар нет</h6> </lable>
                    <input id="ph0" type="radio"  name="product_code" value=0 checked></input>
                    <br>
                   
                    <button class="btn btn-primary" type="sucsess"> Создать продукт</button>
                </div>
            </form> <br> <br> <br>

            <div style="color:black; background-color:white; border:2px solid; border-radius:5px; max-height:350px; overflow:scroll; " class="col-md-12">
                @foreach($product as $el)
                    <div class="" style="display:flex; justify-content:space-between; margin:0; padding:5px 10px 0 10px;"> {{$el->name}}&nbsp <div class="" style="margin:0; padding:0;"> <a class="btn btn-warning" href="{{route('edit-product', $el->id)}}">edit</a>&nbsp<a style="right:0;" class="btn btn-danger" href="{{route('delete-product', $el->id)}}">delet</a></div></div><br>
                @endforeach
            </div> <br> <br> <br>

            <div class="admin-section__form" style="color:white;">
            <form action="/admin/create-subcategory" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">

                    <lable for="sсi" class="form-label"> <h6>Изображение категории</h6>  </lable>
                    <input id="sсi" type="file" class="form-control" name='subcategory_image'> <br> <!---->

                    <lable for="scat" class="form-label"> <h6>id категории</h6> </lable>
                    <select id="scat" name="category_id" size="1">
                        @foreach($category as $el)
                            <option value="{{$el->category_id}}">{{$el->category_name}}</option>
                        @endforeach
                    </select> 
                    <br>
                    <br>

                    <lable for="sсsi" class="form-label"> <h6>id подкатегории</h6> </lable>
                    <input id="sсsi" class="form-control" name="subcategory_id" placeholder=""></input> <br>
                    
                    <lable for="sсs" class="form-label"> <h6>название</h6> </lable>
                    <input id="sсs" class="form-control" name="subcategory_name" placeholder=""></input> <br>
                    
                    <lable for="sсsp" class="form-label"> <h6>описание</h6> </lable>
                    <input id="sсsp" type="text" class="form-control" name="subcategory_description" placeholder=""></input> <br>
                                  
                     <br>
                   
                    <button class="btn btn-primary" type="sucsess"> Создать подкатегорию</button>
                </div>
            </form> <br>

            <div class="admin-section__form" style="color:white;">
            <form action="/admin/create-category" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group"> 

                    <lable for="сt" class="form-label"> <h6>id категории</h6> </lable>
                    <input id="сt" class="form-control" name='category_id' placeholder=""></input> <br>
                    
                    <lable for="сs" class="form-label"> <h6>название</h6> </lable>
                    <input id="сs" class="form-control" name="category_name" placeholder=""></input> <br>
                              
                    <br>
                   
                    <button class="btn btn-primary" type="sucsess"> Создать категорию</button>
                </div>
            </form> <br>
        </div>
    </div>
                </div>
            </div>                
        </section>
</div>

@endsection
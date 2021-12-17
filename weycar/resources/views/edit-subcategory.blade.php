@extends('base')

@section('content')
<div class="paginations"> <a href="{{route('admin')}}">Админка</a>>Редактирование "{{$subcategory->title}}" </div>

    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                <div class="admin-section directions-admin">
        <div class="admin-section__title">
            <h2 style="color:white;">Изменить Подкатегорию - "{{$subcategory->title}}"</h2> <br>
        </div>
        <div class="admin-section__form" style="color:white;">
        <form action="{{route('update-subcategory',$subcategory->id)}}" method="post" enctype="multipart/form-data">
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

                        <!-- <lable for="sсsi" class="form-label"> <h6>id подкатегории</h6> </lable>
                        <input id="sсsi" class="form-control" name="subcategory_id" placeholder=""></input> <br> -->

                        <lable for="sсs" class="form-label"> <h6>название</h6> </lable>
                        <input id="sсs" class="form-control" name="subcategory_name" placeholder="" value="{{$subcategory->title}}" ></input> <br>

                        <lable for="sсsp" class="form-label"> <h6>описание</h6> </lable>
                        <input id="sсsp" type="text" class="form-control" name="subcategory_description" placeholder="" value="{{$subcategory->subtitle}}"></input> <br>

                        <br>

                        <button class="btn btn-primary" type="sucsess"> Обновить подкатегорию</button>
                    </div>
                </form> <br>

            
        </div>
    </div>
                </div>
            </div>                
        </section>
</div>
@endsection
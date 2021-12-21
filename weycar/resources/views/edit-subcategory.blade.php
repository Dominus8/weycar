@extends('base')

@section('content')
<div class="paginations"> <a href="{{route('admin')}}">Админка</a>>Редактирование "{{$subcategory->title}}" </div>

    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                    <div class="admin-section directions-admin">
                        <div class="admin-section__title">
                            <h2>Наши работы: создать группу слайдов</h2>
                        </div>
                        <div class="admin-section__form" style="color:white;">
                        <form action="/admin/edit-owslidegroup" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group"> 
                                    <br>
                                    <lable for="pi" class="form-label"> <h6>Изображения</h6> </lable>
                                    <input id="pi" type="file" class="form-control" name='owimage[]' multiple> <br> <!---->
                                    
                                    <lable for="pt" class="form-label"> <h6>Название кнопки</h6> </lable>
                                    <input id="pt" type="text" class="form-control" name='owtitle' placeholder=""></input> <br>
                                    
                                    <lable for="ps" class="form-label"> <h6>Описание (не обязательно)</h6> </lable>
                                    <textarea id="info_sms_id" rows="5"  wrap="physical" id="ps" type="text" class="form-control" name="owsubtitle"  placeholder=""></textarea> <br>

                                    <lable for="psp" class="form-label"> <h6>Альт (не обязательно)</h6> </lable>
                                    <textarea rows="5"  wrap="physical" id="psp" type="text" class="form-control" name="owimage_alt"   placeholder=""></textarea> <br>

                                    <lable for="pa" class="form-label"> <h6>Дескриптион (не обязательно)</h6> </lable>
                                    <textarea rows="5"  wrap="physical" id="pa" type="text" class="form-control" name="owimage_desc"  placeholder=""></textarea> <br>
                                    <br>
                                
                                    <button class="btn btn-primary" type="sucsess"> Создать категорию</button>
                                </div>
                            </form> <br> <br> <br>
                        </div>  
                    </div>
                </div>
            </div>                
        </section>
    </div>
@endsection
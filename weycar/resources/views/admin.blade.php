@extends('base')

@section('content')
<div class="paginations">Главная > Каталог > Регистраторы </div>
    <div class="main-content">
        <section class="wrapper-outer section-singl-page">
            <div class="wrapper-inner">
                <div class="singl-page">
                    <form action="" method="post" nectype="myltipart/form-data">
                        @csrf
                        
                    </form>
                </div>
            </div>                
        </section>
</div>
@endsection
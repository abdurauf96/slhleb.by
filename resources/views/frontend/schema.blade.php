@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/contact">Контакты</a></li>
@endsection
@section('child')
@lang('messages.schema')
@endsection

@section('content')
<div class="section__wrapper section-sheme">
    <div class="section__content section-contact s-sheme" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="bg-right bg-top"><img src="/frontend/images/page-images/s-sheme-compass.png" alt=""></div>
        <div class="section__content-wrap">
            <div class="container">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                @lang('messages.schema')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div id="map"></div>
    </div>

   @include('layouts.footer')

</div>
@endsection

@section('scripts')
<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">
</script>
<script type="text/javascript">
// Функция ymaps.ready() будет вызвана, когда
// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
ymaps.ready(init);
function init(){
    var myMap = new ymaps.Map("map", {
        center: [55.76, 37.64],
        zoom: 7
    });
}
</script>
@endsection
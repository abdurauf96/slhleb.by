@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('contact') }}">Контакты</a></li>
@endsection
@section('child')
@lang('messages.sxema')
@endsection

@section('content')
<div class="section__wrapper section-sheme">
    <div class="section__content section-contact s-sheme" style="background-image: url('/frontend/images/bg-main.jpg')">
        
        <div class="bg-right bg-top section-bg-floating" style="width:600px;top:50%;right:-10%;height:600px!important;">
            <div class="bg-floating no-repeat" style="background-image:url(/frontend/images/page-images/s-sheme-compass.png);"></div>
        </div>
        
        <div class="section__content-wrap">
            <div class="container">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                @lang('messages.sxema')
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

<script src="https://api-maps.yandex.ru/2.1/?apikey=6c5b0e27-e437-4252-852c-0e76cda81c18&lang=ru_RU" type="text/javascript"></script>
    
    <script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
                center: [53.032843, 27.533103],
                zoom: 16,
                controls: []
            });
            var myPlacemark = new ymaps.Placemark([53.032843, 27.533103], null,{
                iconLayout: 'default#image',
                iconImageHref: "/frontend/images/placemark.png",
                iconImageSize: [40, 40],
              });
              myMap.geoObjects.add(myPlacemark);
    }
</script>

@endsection
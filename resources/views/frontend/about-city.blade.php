@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/interesting">Это интересно</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper company">
    <div class="section__header h-100" style="background-image: url('/frontend/images/city.jpg')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="title">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                        <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }}
                            </p>
                        </div>
                    </div>
                </div>             
            </div>         
        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
            <p>Какой хлеб подходит вам?</p>
            <img src="/frontend/images/slider-label.png" alt="">
        </a>
    </div>
    <div class="section__content" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-custom">
            <a href="/page/city/history" class="item__card" style="background-image: url('/frontend/images/city-history.jpg')">
                <div class="item__card-tittle">
                    <h2>История города Слуцк</h2>
                </div>
            </a>
            <a href="/page/city/travel" class="item__card" style="background-image: url('/frontend/images/city-history-2.jpg')">
                <div class="item__card-tittle">
                    <h2>Слуцк. Куда пойти?</h2>
                </div>
            </a>
        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
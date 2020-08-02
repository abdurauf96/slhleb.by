@extends('layouts.site')
@section('child')
Компания
@endsection
@section('content')

<div class="section__wrapper company">
    <div class="section__header" style="background-image: url('/images/pages/{{ $page->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="title" data-aos="fade-down" data-aos-delay="100">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-md-7">
                        <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }}</p>
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
            @foreach ($menu->children() as $item)
            <a href="{{ $item->url }}" class="item__card"  data-aos="fade-up" data-aos-delay="100" style="background-image: url('/images/menus/{{ $item->image }}')">
                <div class="item__card-tittle">
                    <h2>{{ $item['title_'.\App::getLocale()] }}</h2>
                </div>
            </a>
            @endforeach
        </div>
        
        @include('layouts.footer')

    </div>
</div>
<a href="#" class="back-top"><i class="fal fa-chevron-up"></i></a>

@endsection
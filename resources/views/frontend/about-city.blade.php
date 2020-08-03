@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/interesting">@lang('messages.eto-int')</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper company">
    <div class="section__header h-100" style="background-image: url('/images/pages/{{ $page->image }}')">
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
            <p>@lang('messages.kakoy')</p>
            <img src="/frontend/images/slider-label.png" alt="">
        </a>
    </div>
    <div class="section__content" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-custom">
            @foreach ($bloks as $blok)
            <a href="/page/city/{{ $blok->key }}" class="item__card" style="background-image: url('/images/about/{{ $blok->image }}')">
                <div class="item__card-tittle">
                    <h2>{{ $blok['title_'.\App::getLocale()] }}</h2>
                </div>
            </a>
            @endforeach
            
        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('interesting') }}">@lang('messages.eto-int')</a></li>
<li class="breadcrumb-item"><a href="{{ route('holidayScripts') }}">@lang('messages.senariy')</a></li>
@endsection

@section('child')
{{ $holiday['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="wrapper-kwiz">
        <p class="close-kvis"><i class="fal fa-times"></i></p>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>@lang('messages.kakoy')</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
    </div>
<div class="section__wrapper news-page inner__page">
    <div class="section__header h-100" style="background-image: url('/images/holidays/{{ $holiday->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-date">
                            <p><span>{{ \Carbon\Carbon::parse($holiday->day)->format('d') }} </span>{{\Carbon\Carbon::parse($holiday->date)->shortMonthName}} {{ \Carbon\Carbon::parse($holiday->day)->format('Y') }}</p>
                        </div>
                        <div class="header-title">
                            {{ $holiday['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="#section04"><span></span></a>
        </div>

    </div>
    <div class="section__content section-p" style="background-image: url('/frontend/images/bg-main.jpg');background-size:contain;">
        <div class="section__content-wrap s-content-holiday">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">
                            {!! $holiday['body_'.\App::getLocale()] !!}
                        </div>       
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection
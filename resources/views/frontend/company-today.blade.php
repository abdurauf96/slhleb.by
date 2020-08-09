@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/company">@lang('messages.company')</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper company-activity">
    <div class="section__header h-100" style="background-image: url('/images/pages/{{ $page->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-title" data-aos="fade-down" data-aos-delay="100">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                        <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }} </p>
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
    <div class="section__content section-today" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-fluid">
            <div class="section__content-wrap">
                <div class="description-block">
                    <div class="container">
                        <div class="row">
                            @foreach ($features as $f)
                            <div class="col-xl-4 item" data-aos="fade-up" data-aos-delay="100">
                                <div class="item-image">
                                    <img src="/images/features/{{ $f->image }}" alt="">
                                </div>
                                <div class="item-title">
                                    {{ $f['title_'.\App::getLocale()] }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>

        @include('layouts.footer')

    </div>
</div>
@endsection
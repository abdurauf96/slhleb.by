@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/company">@lang('messages.company')</a></li>
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
    </div>
    <div class="section__content section-histiry" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-fluid">
            <div class="section__content-wrap">
                <div class="description-block">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="image" data-aos="fade-right" data-aos-delay="100">
                                <img src="/frontend/images/page-images/earth-image.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="text">
                                <h2 data-aos="fade-up" data-aos-delay="200">@lang('messages.title')</h2>
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <p> {{ $page['content_'.\App::getLocale()] }}</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="certificate-block">
                    <div class="container certificate-slider-wrap">
                        <h2 class="content-title" data-aos="fade-up" data-aos-delay="100"> @lang('messages.nagrads')</h2>
                        <div class="slider-nav style-dots">
                            <div class="cert__slider-dots"></div>
                            <div class="cert__slider-arrows d-flex"></div>
                        </div>
                        <div class="certificate-slider">
                            @foreach ($sertificats as $item)
                            <a href="/images/sertificats/{{ $item->sertificat }}" class="certificate-slider-item">
                                <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                <img src="/images/sertificats/{{ $item->sertificat }}" alt="">
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="history-block">
                    <div class="image-bread bg-image" >
                        <img src="/frontend/images/page-images/bread-white.png" alt="">
                    </div>
                    <div class="container history-block-wrap">
                        <div class="history-slider-thumb">
                            @foreach ($years as $y)
                            <li>{{ $y->year }}</li>
                            @endforeach
                        </div>
                        <div class="history-slider">
                            @foreach ($years as $year)
                            <div class="history-slider-item" style="background-image: url('/images/histories/{{ $year->image }}')">
                                <div class="slider-info">
                                    {!! $year['body_'.\App::getLocale()] !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="image-onion bg-image">
                            <img src="/frontend/images/page-images/onion-img-history.png" alt="">
                        </div>
                    </div>
                    <div class="image-beetroot bg-image">
                        <img src="/frontend/images/page-images/beetroot-img-history.png" alt="">
                    </div>
                    <div class="image-ear bg-image">
                        <img src="/frontend/images/page-images/ear-img-histiry.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    </div>
</div>
@endsection
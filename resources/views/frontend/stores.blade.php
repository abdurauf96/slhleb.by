@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/contact">@lang('messages.contacts')</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-trade" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="bg-left bg-bottom"><img src="/frontend/images/page-images/s-bread-trade.png" alt=""></div>
        <div class="bg-right bg-top"><img src="/frontend/images/page-images/s-bread-tradecirkle.png" alt=""></div>
        <div class="bg-right bg-bottom"><img src="/frontend/images/page-images/s-cake-trade.png" alt=""></div>
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                {{ $page['title_'.\App::getLocale()] }}
                            </div>
                            <div class="description">
                                <h3>{{ $page['desc_'.\App::getLocale()] }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        @foreach ($stores as $store)
                        <div class="col-xl-6">
                            <div class="item">
                                <img src="/images/stores/{{ $store->image }}" alt="">
                                    <div class="item-wrap">
                                        <div class="item-title">
                                        <h2>{{ $store['title_'.\App::getLocale()] }}</h2>
                                    </div>
                                    <div class="item-description">
                                        {!! $store['content_'.\App::getLocale()] !!}
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection
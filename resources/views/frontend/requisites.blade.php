@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('contact') }}">@lang('messages.contacts')</a></li>
@endsection
@section('child')
@lang('messages.requisites')
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-requisite" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="bg-right section-bg-floating bg-book">
            <div class="bg-floating no-repeat" style="background-image:url(/frontend/images/page-images/s-requisite-book.png);" >
            </div>
    </div>
        <div class="bg-right bg-bottom section-bg-floating bg-pen">
            <div class="bg-floating no-repeat" style="background-image:url(/frontend/images/page-images/s-requisite-pen.png);"></div>
        </div>
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                @lang('messages.requisites')
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="description">
                                <h3> {{ $req->translate(\App::getLocale())->title }}</h3>
                            </div>
                            <div class="content">
                                {!! $req->translate(\App::getLocale())->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
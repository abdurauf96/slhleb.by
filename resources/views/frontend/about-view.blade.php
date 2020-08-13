@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/interesting">@lang('messages.eto-int')</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper inner__page">
    <div class="section__header h-100" style="background-image: url('/images/about/{{ $page->image_fon }}')">

        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-9">
                        <div class="header-title">
                           {{ $page['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
    </div>
    <div class="section__content section-history-page-inner" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">
                            {{ $page['body_'.\App::getLocale()] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    </div>
</div>
@endsection
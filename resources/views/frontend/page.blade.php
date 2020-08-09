@extends('layouts.site')

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
                            <p>{{ $page['desc_'.\App::getLocale()] }}</p>

                        </div>

                    </div>
                </div>              
            </div>         
        </div>
        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
    </div>
    <div class="section__content section-activity" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-custom">
            <div class="section__content-wrap">
                <div class="row">
                    {!! $page['content_'.\App::getLocale()] !!}
                    
                </div>
            </div>
        </div>
        
        @include('layouts.footer')
    </div>
</div>
@endsection
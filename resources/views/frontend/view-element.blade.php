@extends('layouts.site')

@section('parent')
@isset($menu)
<li class="breadcrumb-item"><a href="{{ $menu->getParent($menu->parent_id)->url }}">{{ $menu->getParent($menu->parent_id)['title_'.\App::getLocale()] }}</a></li>
@endisset
@endsection
@section('child')
{{ $menu['title_'.\App::getLocale()] }} 
@endsection
@section('subchild')
<li class="breadcrumb-item">{{ $element['title_'.\App::getLocale()] }}</li>
@endsection


@section('content')
<div class="wrapper-kwiz">
        <p class="close-kvis"><i class="fal fa-times"></i></p>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>@lang('messages.kakoy')</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
    </div>
<div class="section__wrapper company-activity">
    <div class="section__header h-100" style="background-image: url('/images/pages/elements/{{ $element->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-title" data-aos="fade-down" data-aos-delay="100">
                            {{ $element['title_'.\App::getLocale()] }}
                        </div>
                        {{-- <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }}</p>

                        </div> --}}

                    </div>
                </div>              
            </div>         
        </div>
        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>

    </div>
    <div class="section__content section-activity" style="background-image: url('/frontend/images/bg-main.jpg');background-size:auto;">
        <div class="container-custom">
            <div class="section__content-wrap">
                <div class="row">
                    <div class="col-lg-10">
                    {{ $element['content_'.\App::getLocale()] }}
                    
                </div>
                </div>
                
            </div>
            

        </div>
        
        @include('layouts.footer')
    </div>
</div>
@endsection
@extends('layouts.site')



@section('content')
<div class="wrapper-kwiz">
        <p class="close-kvis"><i class="fal fa-times"></i></p>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>@lang('messages.kakoy')</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
    </div>
    
<div class="main-section">
    
    <div id="section-slide">
        @include('sections.main-slider')
        @include('sections.interesting')
        <div class="section section-recipes" style="background-image: url('/frontend/images/section-interes-bg1.jpg')">
            <div class="section-bg-floating ">
                    <div class="bg-floating-recipe"></div>
                </div>
            <div class="section-page__title">@lang('messages.recipes')</div>
            <div class="section__wrapper">
                @include('sections.recipes')
                @include('layouts.footer')
            </div>
        </div>
        
    </div>
    <p class="vis-kvis"><span>Т</span><span>Е</span> <span>С</span><span>Т</span></i></p>
</div>

@endsection


@section('scripts')

@endsection
@extends('layouts.site')

@section('styles')

@endsection

@section('content')
    
<div class="main-section">
    <div id="section-slide">
        @include('sections.main-slider')
        @include('sections.interesting')
        <div class="section section-recipes">
            <div class="section-bg-floating ">
                    <div class="bg-floating-recipe"></div>
                </div>
            <div class="section-page__title">Рецепты</div>
            <div class="section__wrapper" style="background-image: url('/frontend/images/section-interes-bg.jpg')">
                @include('sections.recipes')
                @include('layouts.footer')
            </div>
        </div>
        
    </div>
</div>

@endsection


@section('scripts')

@endsection
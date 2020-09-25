@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('company') }}">@lang('messages.company')</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="wrapper-kwiz">
        <p class="close-kvis"><i class="fal fa-times"></i></p>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>@lang('messages.kakoy')</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
    </div>
<div class="section__wrapper">
    <div class="section__header h-100" style="background-image: url('/images/pages/{{ $page->image }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="title title-style">
                        {{ $page['title_'.\App::getLocale()] }}
                    </div>
                    <div class="text scroll-pane">
                        <p>{{ $page['desc_'.\App::getLocale()] }}  </p>

                    </div>
                </div>
                <div class="scroll-down">
                    <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>

        </div>

    </div>

    <div class="section-recipe section__content" style="background-image: url('/frontend/images/bg-main.jpg');background-size:auto;">
        
        <div class="section-recipe__list" style="padding-top:100px;">
            <div class="container-custom">
                <div class="item-list">
                    <div class="row mb-5">
                        @foreach ($videos as $video)
                        <div class="col-xl-6 mb-5 videogallery">
                            <a href="https://www.youtube.com/watch?v={{ $video->link }}" class="videogallery-item item-card">
                                <div class="item-small f-small">
                                <img src="/images/video/{{$video->image}}">
                             
                              <div class="item-card__tittle">
                                <h2>{{ $video['title_'.\App::getLocale()] }}</h2>
                              </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>  
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination">
                           {{ $videos->links('components.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>  
</div>
@endsection

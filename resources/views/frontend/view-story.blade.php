@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/stories">Истории</a></li>
@endsection
@section('child')
{{ $story['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/history-page-bg.jpg')">

        <div class="navbar-info-share">
            <div class="dropdown-custom">			
                <a href="#" class="dropdown-toggle">Поделиться
                    <i class="fal fa-share-alt"></i>
                </a>	    	        
                <ul class="dropdown-menu dropdown-content">
                    <li><a href="https://facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
                    <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                    <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                    <li><a href="https://vk.com" target="_blank" class="fab fa-vk"></a></li>
                </ul>	
            </div>	
        </div>

        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-9">
                        <div class="header-title">
                            {{ $story['title_'.\App::getLocale()] }}
                        </div>
                        <div class="header-auth-name">
                            {{-- <p>Ганс Христиан Андерсен</p> --}}
                        </div>
                    </div>
                </div>
            </div>   
        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
    </div>
    <div class="section__content section-history-page" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">
                            {{ $story['body_'.\App::getLocale()] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-recommend" style="background-image: url('/frontend/images/section-recommend-bg.png')">
        <div class="section-recommend-wrap">
            <div class="container-custom">
                <div class="title title-style">
                    Похожие истории
                </div>
            </div>
            <div class="section-recipe__slider section-recipe-page">
                <div class="recipie-slider">
                    @foreach ($story->category->stories as $item)
                    <a href="{{ route('viewStory', $item->id) }}" class="recipie-slider__item">
                        <div class="slider__item-image" style="background-image: url('/images/stories/{{ $item->image }}')"></div>
                        <div class="slider__item-info">                   
                            <div class="top">
                                <h2>{{ $story['title_'.\App::getLocale()]  }}</h2>
                            </div>                        
                            <div class="absolute">  
                                
                            </div>                   
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="slider-nav">
                    <div class="recipie__slider-dots"></div>
                    <div class="recipie__slider-arrows d-flex"></div>
                </div>
            </div>

        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
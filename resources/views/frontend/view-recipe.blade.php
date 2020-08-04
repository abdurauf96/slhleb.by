@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/recipes">@lang('messages.recipes')</a></li>
@endsection
@section('child')
{{ $recipe['name_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/recipe-page-bg.jpg')">
        <div class="navbar-info-share">
            <div class="dropdown-custom">			
                <a href="#" class="dropdown-toggle">@lang('messages.share')
                    <i class="fal fa-share-alt"></i>
                </a>	    	        
                <ul class="dropdown-menu dropdown-content">
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.example.com&title={{ $recipe['name_'.\App::getLocale()] }}" target="_blank" class="fab fa-facebook-f"></a></li>
                    <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                    <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                    <li><a href="http://vk.com/share.php?url=http%3A%2F%2Fwww.example.com&title={{ $recipe['name_'.\App::getLocale()] }}&noparse=false" target="_blank" class="fab fa-vk"></a></li>
                </ul>	
            </div>	
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="title title-style">
                        {{ $recipe['name_'.\App::getLocale()] }}
                    </div>
                    
                </div>
                <div class="scroll-down">
                    <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
        </div>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
            <p>@lang('messages.kakoy')</p>
            <img src="/frontend/images/slider-label.png" alt="">
        </a>
    </div>

    <div class="section-recipe section__content recipe-page" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section-bg-floating">
            <div class="bg-floating"></div>
        </div>
        <div class="section-recipe__list">
            <div class="container">
                <div class="item-list">
                    <div class="row mb-5">
                        <div class="col-xl-6">
                            <div class="recipe-page-title">
                                <h2>@lang('messages.ing')</h2>
                            </div>
                            <div class="recipe-page-description">
                                {!! $recipe['consist_'.\App::getLocale()] !!}
                            </div>	
                        </div>
                        <div class="col-xl-6">
                            <div class="recipe-page-title">
                                <h2>@lang('messages.prig')</h2>
                            </div>
                            @foreach ($recipe->steps as $step)
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="recipe-thumbnail-gallery">
                                        <a href="/images/recipes/steps/{{ $step->image }}" class="recipe-thumbnail">
                                            <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                            <img src="/images/recipes/steps/{{ $step->image }}" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-8">
                                    <div class="item-card__tittle">
                                        <h2>@lang('messages.shag') {{ $loop->iteration }}</h2>
                                        <p>{{ $step['title_'.\App::getLocale()] }}</p>
                                    </div>
                                </div>	
                            </div> 
                            @endforeach
                          
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
                    @lang('messages.poxojie')
                </div>
            </div>
            <div class="section-recipe__slider section-recipe-page">
                <div class="recipie-slider">
                    @foreach ($recipe->tag->recipes as $item)
                    <a href="{{ route('viewRecipe', $item->id) }}" class="recipie-slider__item">
                        <div class="slider__item-image" style="background-image: url('/images/recipes/{{ $item->image }}')"></div>
                        <div class="slider__item-info">                   
                            <div class="top">
                                <h2>{{ $item['name_'.\App::getLocale()] }}</h2>
                            </div>                        
                            <div class="absolute">  
                                <span><img src="/frontend/images/clock.png" alt="">{{ $item->time }}</span>
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
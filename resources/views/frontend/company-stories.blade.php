@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/interesno">@lang('messages.eto-int')</a></li>
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
                        <p>{{ $page['desc_'.\App::getLocale()] }}</p>

                    </div>
                </div>
                <div class="scroll-down">
                  <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
            
        </div>

    </div>

    <div class="section__content section-recipe" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section-recipe__top">
            <div class="container-custom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ct-filtr">
                            <div class="row">
                                <div class="col-md-10">
                                    <ul class="list-inline">
                                        <li class="list-inline-item {{ \Request::route('slug')==''? 'active' : '' }} "><a href="/interesno/stories">Все истории</a></li>
                                        @foreach ($categories as $cat)
                                        <li class="list-inline-item {{ \Request::route('slug')==$cat->slug ? 'active' : '' }}" >
                                            <a href="/interesno/stories/category/{{ $cat->slug }}">{{ $cat['name_'.\App::getLocale()] }}</a></li> 
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-recipe__list">
            <div class="container-custom">
                <div class="item-list">
                    <div class="row mb-5">
                        @foreach ($stories as $story)             
                            <div class="col-xl-6">
                                <a href="{{ route('viewStory', $story->slug) }}" class="item-card item-small mb-5 f-large" style="background-image: url(/images/stories/{{ $story->image }})">
                                    <div class="item-card-tags">
                                        <span>{{ $story->category['name_'.\App::getLocale()] }}</span>
                                    </div>
                                    <div class="item-card__tittle">
                                        <h2>{{ $story['title_'.\App::getLocale()] }}</h2>
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
                            {{ $stories->links('components.pagination') }}
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.footer')
        </div>
    </div>

</div>
@endsection
@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/company">Это интересно</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
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
            <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>Какой хлеб подходит вам?</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
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
                                        <li class="list-inline-item {{ \Request::get('category_id')==''? 'active' : '' }} "><a href="/page/stories">Все истории</a></li>
                                        @foreach ($categories as $cat)
                                        <li class="list-inline-item {{ \Request::get('category_id')==$cat->id? 'active' : '' }}" >
                                            <a href="/page/stories?category_id={{ $cat->id }}">{{ $cat['name_'.\App::getLocale()] }}</a></li> 
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
                                <a href="{{ route('viewStory', $story->id) }}" class="item-card item-small mb-5 f-large" style="background-image: url(/frontend/images/recipes-image.jpg)">
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
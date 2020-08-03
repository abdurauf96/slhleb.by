@extends('layouts.site')

@section('child')
Поиск по сайту
@endsection
@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-search" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-title">
                                Поиск по сайту
                            </div>
                        </div>
                        <div class="col-md-8 search-block">
                            <p>Результаты поиска по зпросу «{{ $q }}»</p>
                            <form action="/search" method="GET" role="form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="q" value="" class="form-control" placeholder="Введите ваш поисковый запрос" required="">
                                    <button type="submit" class="btn">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @isset($products)
                    <div class="row">
                        <div class="col-md-7">
                            @foreach ($products as $prod)
                            <div class="item-result">
                                <span class="tag">{{ $prod->category->translate(\App::getLocale())->name }}</span>
                                <h2><a href="{{ route('viewProduct', $prod->id) }}">{{ $prod->translate(\App::getLocale())->name }}</a></h2>
                                <p>{{ $prod->translate(\App::getLocale())->name }}</p>
                            </div>
                            @endforeach   
                        </div>
                    </div>
                    @endisset

                    @isset($posts)
                    <div class="row">
                        <div class="col-md-7">
                            @foreach ($posts as $post)
                            <div class="item-result">
                                <span class="tag">Новости</span>
                                <h2><a href="{{ route('viewNews', $post->id) }}">{{ $post['title_'.\App::getLocale()] }}</a></h2>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endisset

                    @isset($recipes)
                    <div class="row">
                        <div class="col-md-7">
                            @foreach ($recipes as $rec)
                            <div class="item-result">
                                <span class="tag">рецепты</span>
                                <h2><a href="{{ route('viewRecipe', $rec->id) }}">{{ $rec['name_'.\App::getLocale()] }}</a></h2>
                               
                            </div>
                            @endforeach   
                        </div>
                    </div>
                    @endisset

                    @isset($stories)
                    <div class="row">
                        <div class="col-md-7">
                            @foreach ($stories as $story)
                            <div class="item-result">
                                <span class="tag">Истории</span>
                                <h2><a href="{{ route('viewStory', $story->id) }}">{{ $story['title_'.\App::getLocale()] }}</a></h2>
                               
                            </div>
                            @endforeach   
                        </div>
                    </div>
                    @endisset
                   
                </div>
                
            </div>
        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
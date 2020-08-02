@extends('layouts.site')

@section('child')
{{ $category->translate(\App::getLocale())->name }}
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__header" style="background-image: url('/images/categories/{{ $category->image }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="title title-style">
                        {{ $category->translate(\App::getLocale())->name }}
                    </div>
                    <div class="text scroll-pane">
                        <p>{{ $category->translate(\App::getLocale())->description }}</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
            <p>Какой хлеб подходит вам?</p>
            <img src="/frontend/images/slider-label.png" alt="">
        </a>
    </div>

    <div class="section-catalog">
        <div class="section-catalog__top" style="background-image: url('/frontend/images/common-bg-section.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ct-filtr">
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="list-inline">
                                        <li class="list-inline-item {{ \Request::get('filter')==''? 'active' : '' }} "><a href="{{ route('products', $category->id) }}">Все сценарии </a></li>
                                        @foreach ($filters as $filter)
                                        <li class="list-inline-item {{ \Request::get('filter')==$filter->id ? 'active' : '' }}"><a href="?filter={{ $filter->id }}">{{ $filter->translate(\App::getLocale())->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="ct-search">
                                    <div class="ct-search__form">
                                        <form action="">
                                            <input type="search" class="ct-form-control form-control" placeholder="Поиск по названия">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-catalog__list">
            <div class="container">
                <div class="cl-slider">
                    <div class="cl-slider-wrap">
                        <div class="catalog-slider">
                            <div class="cl-slider-item item__card">
                                <img src="/frontend/images/banner-catalog.jpg" alt="">
                            </div>
                            <div class="cl-slider-item item__card">
                                <img src="/frontend/images/banner-catalog.jpg" alt="">
                            </div>
                            <div class="cl-slider-item item__card">
                                <img src="/frontend/images/banner-catalog.jpg" alt="">
                            </div>
                        </div>
                        <div class="slider-nav style-dots">
                            <div class="catalog__slider-dots"></div>
                            <div class="catalog__slider-arrows d-flex"></div>
                        </div>
                    </div>
                </div>
                <div class="catalog-list">
                    <div class="row">
                        @foreach ($products as $prod)
                        <a href="/catalog-cart.php" class="col-md-6 col-lg-4 catalog-list__item">
                            <div class="item-image">
                                <img src="/images/products/{{ $prod->image }}" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>{{ $prod->translate(\App::getLocale())->name }}</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon/weight-icon.png" alt=""></span>
                                    <p>{{ $prod->weight }}</p>
                                </div>
                            </div>
                            <div class="new">
                                @if($prod->status=='new')
                                <img src="/frontend/images/new-catalog.png" alt="">
                                @elseif($prod->status=='xit')
                                <img src="/frontend/images/hit-catalog.png" alt="">
                                @else
                                @endif
                            </div>
                        </a>
                        @endforeach
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination">
                                <ul class="list-inline">
                                    <li class="list-inline-item active"><a href="">1</a></li>
                                    <li class="list-inline-item"><a href="">2</a></li>
                                    <li class="list-inline-item"><a href="">3</a></li>
                                    <li class="list-inline-item"><a href="">4</a></li>
                                    <li class="list-inline-item"><a href="">5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
            
            @include('layouts.footer')
        </div>
    </div>

</div>
@endsection
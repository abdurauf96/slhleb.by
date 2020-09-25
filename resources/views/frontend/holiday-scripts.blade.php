@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('interesting') }}">@lang('messages.eto-int')</a></li>
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
                    @if($page['desc_'.\App::getLocale()])
                    <div class="text scroll-pane">
                        <p>{{ $page['desc_'.\App::getLocale()] }}</p>

                    </div>
                    @endif
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
                                        <li class="list-inline-item {{ \Request::route('slug')==''? 'active' : '' }} "><a href="{{ route('holidayScripts') }}">@lang('messages.all_scripts') </a></li>
                                        @foreach ($scripts as $script)
                                        <li class="list-inline-item {{ \Request::route('slug')==$script->slug ? 'active' : '' }}">
                                            <a href="/interesno/holiday-scripts/category/{{ $script->slug }}">{{ $script['name_'.\App::getLocale()] }}</a>
                                        </li>
                                        @endforeach
                                         
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-recipe__list pt-5">
            <div class="container-custom">
                <div class="item-list">
                    <div class="row mb-5">
                        @foreach ($holidays as $holiday)
                        <div class="col-xl-6">
                            <a href="{{ route('viewHolidayScript', $holiday->slug) }}" class="item-card item-small mb-5 f-large" style="background-image: url(/images/holidays/{{$holiday->image}})">

                                <div class="item-card__tittle">
                                    <h2>{{ $holiday['title_'.\App::getLocale()] }} </h2>
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
                            {{ $holidays->links('components.pagination')}}
                        </div>
                    </div>
                </div>
            </div>

               @include('layouts.footer')

        </div>
    </div>

</div>
@endsection
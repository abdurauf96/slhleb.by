@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/interesting">Это интересно</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__header h-100" style="background-image: url('/frontend/images/holidays-image.jpg')">
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
                                        <li class="list-inline-item {{ \Request::get('script')==''? 'active' : '' }} "><a href="{{ route('holidayScripts') }}">Все сценарии </a></li>
                                        @foreach ($scripts as $script)
                                        <li class="list-inline-item {{ \Request::get('script')==$script->id ? 'active' : '' }}"><a href="/page/holiday-scripts?script={{ $script->id }}">{{ $script['name_'.\App::getLocale()] }}</a></li>
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
                            <a href="{{ route('viewHolidayScript', $holiday->id) }}" class="item-card item-small mb-5 f-large" style="background-image: url(/images/holidays/{{$holiday->image}})">

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
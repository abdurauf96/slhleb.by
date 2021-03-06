@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/company">@lang('messages.company')</a></li>
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
<div class="section__wrapper company-activity">
    
    <div class="section__header h-100" style="background-image: url('/images/pages/{{ $page->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-title" data-aos="fade-up" data-aos-delay="100">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
        
    </div>
    <div class="section__content section-news" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-fluid">
            <div class="section__content-wrap">
                <div class="container-custom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="filter-year">
                                <div class="dropdown-custom">		
                                    <div class="dropdown-toggle">Год
                                        <span>{{ Request::get('year') ? Request::get('year'): 'Все' }}<i class="far fa-chevron-down"></i></span>
                                    </div>	    	        
                                    <ul class="dropdown-menu dropdown-content">
                                        <li><a href="/company/news" class="">ВСЕ</a></li>
                                        <li><a href="/company/news/year/2014"  class="">2014</a></li>
                                        <li><a href="/company/news/year/2015"  class="">2015</a></li>
                                        <li><a href="/company/news/year/2016"  class="">2016</a></li>
                                        <li><a href="/company/news/year/2017"  class="">2017</a></li>
                                        <li><a href="/company/news/year/2018"  class="">2018</a></li>
                                        <li><a href="/company/news/year/2019" class="">2019</a></li>
                                        <li><a href="/company/news/year/2020" class="">2020</a></li>
                                        
     
                                    </ul>	
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-xl-12 item">
                            <a href="{{ route('viewNews', $post->slug) }}" class="item__card" style="background-image: url('/images/posts/{{ $post->image }}')">
                                <div class="item__card-date">
                                    <div class="day">{{ \Carbon\Carbon::parse($post->date)->format('d') }}</div>
                                    <div class="m-y">
                                        <span>{{\Carbon\Carbon::parse($post->date)->shortMonthName}}</span>
                                        <span>{{\Carbon\Carbon::parse($post->date)->format('Y') }}</span>
                                    </div>
                                </div>
                                <div class="item__card-tittle">
                                    <h2>{{ $post['title_'.\App::getLocale()] }}</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination">
                                {{ $posts->links('components.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footer')


    </div>
</div>
@endsection
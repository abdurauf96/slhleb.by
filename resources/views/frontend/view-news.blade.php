@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/company-news">@lang('messages.novosti')</a></li>
@endsection
@section('child')
{{ $post['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper news-page inner__page">
    <div class="section__header h-100" style="background-image: url('/images/posts/{{ $post->image_fon }}')">
        <div class="navbar-info-share">
            <div class="dropdown-custom">			
                <a href="#" class="dropdown-toggle">@lang('messages.share')
                    <i class="fal fa-share-alt"></i>
                </a>	    	        
                <ul class="dropdown-menu dropdown-content">
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.example.com&title={{ $post['title_'.\App::getLocale()] }}" target="_blank" class="fab fa-facebook-f"></a></li>
                    <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                    <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                    <li><a href="http://vk.com/share.php?url=http%3A%2F%2Fwww.example.com&title={{ $post['title_'.\App::getLocale()] }}&noparse=false" target="_blank" class="fab fa-vk"></a></li>
                </ul>	
            </div>	
        </div>
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-date">
                            <p><span>{{\Carbon\Carbon::parse($post->date)->format('d')}} </span>{{\Carbon\Carbon::parse($post->date)->format('M Y')}}</p>
                        </div>
                        <div class="header-title">
                            {{ $post['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="#section04"><span></span></a>
        </div>
    </div>
    <div class="section__content section-news-page" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">

                            {!! $post['body_'.\App::getLocale()] !!} 
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-recommend recommend-news" style="background-image: url('/frontend/images/section-recommend-bg.png')">
        <div class="section-recommend-wrap">
            <div class="container-custom offset-right">
                <div class="title title-style">
                    @lang('messages.other_news')
                </div>
                <div class="recommend-slider-wrap">
                    
                    <div class="news-slider">
                        @foreach ($posts as $post)
                        <a href="{{ route('viewNews', $post->id) }}" class="slider-item item__card" style="background-image: url('/images/posts/{{ $post->image }}')">
                            <div class="item__card-date">
                                <span>{{\Carbon\Carbon::parse($post->date)->format('d M Y')}}</span>
                            </div>
                            <div class="item__card-tittle">
                                <h2>{{ $post['title_'.\App::getLocale()] }}</h2>
                            </div>
                        </a>
                        @endforeach
                        
                    </div>
                    <div class="slider-nav">
                        <div class="news__slider-dots"></div>
                        <div class="news__slider-arrows d-flex"></div>
                    </div>
                </div>
            </div>

        </div>
        
        @include('layouts.footer')
    </div>
</div>
@endsection
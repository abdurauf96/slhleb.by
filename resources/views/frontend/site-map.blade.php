@extends('layouts.site')
@section('child')
Карта сайта
@endsection
@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-contact" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                            <div class="header-title">
                                @lang('messages.karta')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-block">
                    <div class="row">
                        
                        <div class="col-xl-6 item" style="margin-bottom: 40px;">
                            <div class="item-title">
                                <h2 style="margin-bottom: 10px;"><a href="" style="color: #ffd5a5;">@lang('messages.products')</a></h2>
                                <ul style="padding-left: 1rem;">
                                    @foreach ($products as $prod)
                                    <li><a href="{{ route('viewProduct', $prod->slug) }}">{{ $prod->translate(\App::getLocale())->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        @foreach ($menus as $menu)
                        <div class="col-xl-6 item" style="margin-bottom: 40px;">
                            <div class="item-title">
                                <h2 style="margin-bottom: 10px;"><a href="{{ $menu->url }}" style="color: #ffd5a5;">{{ $menu['title_'.\App::getLocale()] }}</a></h2>
                                <ul style="padding-left: 1rem;">
                                    @foreach ($menu->children() as $child)
                                    <li><a href="{{ $child->url }}">{{ $child['title_'.\App::getLocale()] }}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </div>  
                        @endforeach
                        
                        
                        
                    </div>
                    

                </div>
                
                
            </div>
            @include('layouts.footer')
        </div>
        
    </div>
@endsection
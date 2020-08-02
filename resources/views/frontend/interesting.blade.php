@extends('layouts.site')

@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')

<div class="section__wrapper company">
    <div class="section__header h-100" style="background-image: url('/images/pages/{{ $page->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="title">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                        <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }}
                            </p>

                        </div>
                        
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
    <div class="section__content" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-custom">
            @foreach ($menu->children() as $item)
            <a href="{{ $item->url }}" class="item__card" style="background-image: url('/images/menus/{{ $item->image }}')">
                <div class="item__card-tittle">
                    <h2>{{ $item['title_'.\App::getLocale()] }}</h2>
                </div>
            </a>
            @endforeach
            
        </div>
        
       @include('layouts.footer')

    </div>
</div>


@endsection
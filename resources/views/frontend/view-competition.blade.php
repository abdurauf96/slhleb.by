@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('interesting') }}">@lang('messages.eto-int')</a></li>
<li class="breadcrumb-item"><a href="{{ route('stockCompetitions') }}">@lang('messages.stocks')</a></li>
@endsection
@section('child')
{{ $competition['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__header h-100" style="background-image: url('/images/stocks//{{ $competition->image_fon }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="title title-style">
                        {{ $competition['title_'.\App::getLocale()] }}
                    </div>
                    <div>{{ \Carbon\Carbon::parse($competition->end_time) > \Carbon\Carbon::today()? "" : "(конкурс завершено)" }}</div>
                    <div class="block-group-btn">
                        <h2>@lang('messages.ozna'):</h2>
                        <div class="block-info-btn">
                            <a href="#modal-competition-conditions" data-toggle="modal" class="btn btn-transparent">@lang('messages.usloviya')</a>
                            <a href="#modal-position" data-toggle="modal" class="btn btn-transparent">@lang('messages.polojenie')</a>
                        </div>
                    </div>
                    
                </div>
                <div class="scroll-down">
                    <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section__content section-stock" style="background-image: url('/frontend/images/bg-main.jpg')">
        <!-- <div class="section-bg-floating">
            <div class="bg-floating"></div>
        </div> -->
        <div class="section-recipe__list">
            <div class="container">
                @if(\Carbon\Carbon::parse($competition->end_time) < \Carbon\Carbon::today() )   
                <div class="section-stock-wrap">
                    <div class="title title-style">
                        @lang('messages.pobedi')
                    </div>
                    <div class="row">
                        @foreach ($participants as $item)
                       
                        <div class="col-md-4">
                            <div class="item">
                                <span><img src="/frontend/images/icon/place-{{ $loop->iteration }}.png" alt="">{{ $loop->iteration }} @lang('messages.mesto')</span>

                                <div class="item-thumbnail-gallery">
                                    <a href="/images/competitions/participiants/{{ $item->image }}" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/images/competitions/participiants/{{ $item->image }}" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h3>{{ $item['name_'.\App::getLocale()] }}</h3>
                                    <div class="votes" style="display: flex">
                                        <p>Всего голосов:   </p> 
                                        <p class="num_votes">{{ $item ->vote }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($loop->iteration==3)
                        @break
                        @endif  
                        @endforeach
                      
                    </div>
                </div>
                @endif
                <div class="section-stock-wrap">
                    <div class="title title-style">
                        @lang('messages.uchast')
                    </div>
                    <div class="row">
                        @foreach ($participants as $part)
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/images/competitions/participiants/{{ $part->image }}" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/images/competitions/participiants/{{ $part->image }}" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>@lang('messages.uchas') № {{ $loop->iteration }}</h2>
                                    <h3>{{ $part['name_'.\App::getLocale()] }}</h3>
                                    <p>{{ $part['desc_'.\App::getLocale()] }}</p>
                                    <div class="votes" style="display: flex">
                                        <p>Всего голосов:   </p> 
                                        <p class="num_votes">{{ $part->vote }}</p>
                                    </div>
                                    @if(\Carbon\Carbon::parse($competition->end_time) > \Carbon\Carbon::today() ) 
                                    <a class="btn btn-info to_vote" href="#" data-participant_id="{{ $part->id }}" data-user_ip="{{ $_SERVER['REMOTE_ADDR'] }}" data-competition_id="{{ $competition->id }}" >Голосовать</a>
                                    @endif
                                    <h6 class="vote_res"></h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        
        @include('layouts.footer')

    </div>

</div>


<div class="modal fade modal-competition-conditions" id="modal-competition-conditions">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <a href="#" class="modal-logo">
                        <img src="/frontend/images/logo.png" alt="">
                    </a>
                    <h5 class="header-title">@lang('messages.usloviya')</h5>
                    <div class="content">
                        <p><a href="/images/stocks/{{ $competition->rules }}">Скачать</a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-position" id="modal-position">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <a href="#" class="modal-logo">
                        <img src="/frontend/images/logo.png" alt="">
                    </a>
                    <h5 class="header-title">@lang('messages.polojenie')</h5>
                    <div class="content">
                        <p> <a href="/images/stocks/{{ $competition->state }}">Скачать</a> </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

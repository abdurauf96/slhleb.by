@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/interesting">@lang('messages.eto-int')</a></li>
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
                        {{ $page['title_'.\App::getLocale()]  }}
                    </div>
                    <div class="text scroll-pane">
                        <p>{{ $page['desc_'.\App::getLocale()]  }}</p>

                    </div>
                </div>
                <div class="scroll-down">
                    <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
        </div>

    </div>

    <div class="section__content section-recipe" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section-recipe__list pt-5">
            <div class="container-custom">
                <div class="item-list">
                    <div class="row mb-5">
                        @foreach ($stocks as $st)
                        <div class="col-xl-6">
                            <a href="{{ $st->type=='stock'? route('viewStock',$st->id) : route('viewCompetition', $st->id) }}" class="item-card item-small mb-5 f-large" style="background-image: url(/images/stocks/{{ $st->image }})">
                                <div class="item-card-tags">
                                    <span>{{ $st->type=='stock'? 'Акция' : 'Конкурс' }}</span>
                                </div>
                                <div class="item-card__tittle">
                                    <h2>{{ $st['title_'.\App::getLocale()] }}</h2>
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
                            {{ $stocks->links('components.pagination') }}
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.footer')


        </div>
    </div>

</div>
@endsection
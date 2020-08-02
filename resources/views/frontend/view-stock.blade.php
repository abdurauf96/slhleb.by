@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="{{ route('stockCompetitions') }}">Акции и конкурсы</a></li>
@endsection
@section('child')
{{ $stock['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/city.jpg')">

        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-9">
                        <div class="header-title">
                            {{ $stock['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
    </div>
    <div class="section__content section-p" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">
                            {{ $stock['body_'.\App::getLocale()] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection
@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/contact">Контакты</a></li>
@endsection
@section('child')
Реквизиты
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-requisite" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="bg-right"><img src="/frontend/images/page-images/s-requisite-book.png" alt=""></div>
        <div class="bg-right bg-bottom"><img src="/frontend/images/page-images/s-requisite-pen.png" alt=""></div>
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                Реквизиты
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="description">
                                <h3> {{ $req->translate(\App::getLocale())->title }}</h3>
                            </div>
                            <div class="content">
                                {!! $req->translate(\App::getLocale())->content !!}
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
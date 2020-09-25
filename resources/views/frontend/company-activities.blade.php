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
                        <div class="header-title" data-aos="fade-down" data-aos-delay="100">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                        <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }}</p>

                        </div>

                    </div>
                </div>              
            </div>         
        </div>
        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
 
    </div>
    <div class="section__content section-activity" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-custom">
            <div class="section__content-wrap">
                <div class="row">
                    @foreach ($activities as $act)
                    <div class="col-xl-6 doc-block" data-aos="fade-up" data-aos-delay="100">
                        <div class="doc-block__name"><span>{{ ($activities->currentpage()-1) * $activities->perpage() + $loop->index + 1 }}.</span>{{  $act['title_'.\App::getLocale()] }}</div>
                        <a href="/files/activities/{{ $act->file }}" target="_blank">@lang('messages.view')
                            {{ $act->format }} </a>
                    </div>
                    @endforeach
                    
                </div>
                <div class="row activities-paginate">
                        <div class="col-md-12">
                            <div class="pagination">
                                {{ $activities->links('components.pagination') }}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
        @include('layouts.footer')
    </div>
</div>
@endsection
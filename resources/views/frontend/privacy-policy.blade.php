@extends('layouts.site')


@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-policy" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                {{ $page['title_'.\App::getLocale()] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-block policy">
                    <p>{{ $page['desc_'.\App::getLocale()] }}</p>

                    {!! $page['content_'.\App::getLocale()] !!}
                </div>
                
                
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-container">
                <div class="row mb-50">
                    <div class="col-md-6 col-xl-4">
                        <div class="copy-right">
                            © 2020 ОАО «Слуцкий хлебозавод»  Все права защищены
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-2">
                        <div class="ftr-phone">8(01795) 5-60-27 </div>
                    </div>
                    <div class="col-md-6 col-xl-2 ftr-mail">market@slhleb.by</div>
                    <div class="col-md-6 col-xl-4 social__links-wrap">
                        <ul class="social__links">
                            <li><a href="" class="fab fa-instagram"></a></li>
                            <li><a href="" class="fab fa-instagram"></a></li>
                            <li><a href="" class="fab fa-instagram"></a></li>
                            <li><a href="" class="fab fa-instagram"></a></li>
                        </ul>
                        <a href="/contact-obrashcheniye.html" class="btn btn-transparent">Электронное обращение</a>
                    </div>

                </div>
                <div class="row column-reverse-mobile pb-40">
                    <div class="col-xl-7">
                        <div class="slider-wrap">
                            <div class="slider-nav">
                                <div class="internet-portal__slider-arrows d-flex"></div>
                            </div>
                            <div class="slider-internet-portal">
                                <div class="internet-portal-item">
                                    <p>Интернет-портал Президента РБ: <a href="www.president.gov.by" target="_blank">www.president.gov.by</a></p>
                                </div>
                                <div class="internet-portal-item">
                                    <p>Интернет-портал Президента РБ: <a href="www.president.gov.by" target="_blank">www.president.gov.by</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <a href="http://scroll.by/" target="_blank" class="studio_developer">
                            <small class="mr-2 font-l">Сайт испечен</small>
                            <img src="/frontend/images/scroll-logo.png" alt="Scroll Media Solutions">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
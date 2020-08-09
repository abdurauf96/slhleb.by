<div class="section section-interesting">
    <div class="section-bg-floating ">
            <div class="bg-floating-interesting"></div>
        </div>
    <div class="section-page__title">@lang('messages.eto-int')</div>
    <div class="section__wrapper" style="background-image: url('/frontend/images/section-interes-bg.jpg')">
        <div class="container-section-interesting">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider-wrapper">
                        <div class="slider-new__wrapper">
                            <div class="slider-new-product">
                                @foreach ($banners as $banner)
                                <div class="new-products-item">
                                    <a href="{{ $banner->url }}" class="item__card card__big" style="background-image: url('/images/homebanners/{{ $banner->image }}')">
                                        <div class="label__new">
                                            @if($banner->type=='xit')
                                             <img src="/frontend/images/hit.png" width="80" height="100" alt=""> @else <img src="/frontend/images/new.png" width="80" height="100" alt="">  @endif
                                            
                                            </div>
                                        <div class="item__card-tittle">
                                            <h2>{{ $banner['title_'.\App::getLocale()] }}</h2>
                                        </div>
                                    </a>
                                </div> 
                                @endforeach
                            </div>
                            <div class="slider-nav style-dots">
                                <div class="new__slider-dots"></div>
                                <div class="new__slider-arrows d-flex"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($bloks as $blok)
                        <div class="col-xl-12">
                            <a href="{{ $blok->url }}" class="item__card card__small" style="background-image: url('/images/bloks/{{ $blok->image }}')">
                                <div class="item__card-tittle">
                                    <h2>{{ $blok['title_'.\App::getLocale()] }}</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>	
        </div>
    </div>	
</div>
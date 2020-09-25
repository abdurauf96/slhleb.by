<div class="section section-header">
    <div class="section-header__slider">
        <div class="slideshow">
            <div class="header-slider">
                @foreach ($sliders as $slid)
                <div class="header-slider__item bg" style="background-image: url('/images/sliders/{{ $slid->image_fon }}')">
                    <div class="ear-image">
                        <img src="/images/sliders/{{ $slid->image_effekt }}" alt="">
                    </div>
                    <div class="container">
                        <div class="slider-item-text">
                            <div>
                                <span class="slow">{{ $slid['title_'.\App::getLocale()] }}</span>
                                <h2>{{ $slid['desc_'.\App::getLocale()] }}</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            
        </div>
        
        <div class="slider-nav">
            <div class="header__slider-dots"></div>
            <div class="header__slider-arrows d-flex"></div>
        </div>
    </div>	
</div>
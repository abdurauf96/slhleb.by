
    <div class="section-recipe__slider">
        <div class="recipie-slider">
            @foreach ($recipes as $item)
            <a href="{{ route('viewRecipe', $item->id) }}" class="recipie-slider__item">
                <div class="slider__item-image" style="background-image: url('/images/recipes/{{ $item->image }}')"></div>
                <div class="slider__item-info">                   
                    <div class="top">
                        <h2>{{ $item['name_'.\App::getLocale()] }}</h2>
                    </div>                        
                    <div class="absolute">  
                        <span><img src="/frontend/images/clock.png" alt="">{{ $item->time }}</span>
                    </div>                   
                </div>
            </a>
            @endforeach
        </div>
        <div class="slider-nav">
            <div class="recipie__slider-dots"></div>
            <div class="recipie__slider-arrows d-flex"></div>
        </div>
    </div>




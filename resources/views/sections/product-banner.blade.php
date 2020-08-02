<div class="cl-slider-wrap">
    <div class="catalog-slider">
        @foreach ($banners as $item)
        <div class="cl-slider-item item__card">
            <img src="/images/productbanners/{{ $item->image }}" alt="">
        </div>
        @endforeach
    </div>
    <div class="slider-nav style-dots">
        <div class="catalog__slider-dots"></div>
        <div class="catalog__slider-arrows d-flex"></div>
    </div>
</div>
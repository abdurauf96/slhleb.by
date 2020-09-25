@foreach ($products as $prod)
<div class="slider-item recommend-slider-item">
    <div class="slider-item-image">
        <img src="/images/quizproducts/{{ $prod->image }}" alt="">
    </div>
    <div class="item-info">
        <div class="item-info-title">
            <h2>{{ $prod->name }}</h2>
        </div>
        <div class="item-info-weight">
            <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
            <p>{{ $prod->weight }}</p>
        </div>
    </div>
</div>
@endforeach

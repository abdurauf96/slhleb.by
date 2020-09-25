<div class="menu-left-products hidden-sm">
    <div class="menu-container scroll-menu">
        <ul class="parent-menu">
        <div class="dot-menu"></div>
        @foreach ($categories as $cat)
        <li class="parent">

            <a href="{{ $cat->id == 7 ? 'http://xn--80aaah0bb7b.xn--90ais/' : route('products', $cat->slug) }}" class="parent-link">
                <div class="icon"><img src="/images/categories/{{ $cat->icon }}" alt=""></div>
                <div class="name">{{ $cat->translate(\App::getLocale())->name }}</div>
            </a>
            <ul class="sub__menu">
                @foreach ($cat->filters as $filter)
                <li><a href="/products/{{$cat->slug}}/filter/{{ $filter->slug }}">{{ $filter->translate(\App::getLocale())->name }}</a></li>
                @endforeach
            </ul>
        </li>  
        @endforeach
        
      
    </ul>
    </div>
    
</div>

<div class="menu-left-products menu-mobile-product">
    <div class="menu-mobile-product-wrap">
        <ul class="parent-menu">
        @foreach ($categories as $cat)
        <li class="parent">
            <a href="{{ $cat->id == 7 ? 'http://laravel.nolimit.by/' : route('products', $cat->slug) }}" class="parent-link">
                <div class="icon"><img src="/images/categories/{{ $cat->icon }}" alt=""></div>
                <div class="name">{{ $cat->translate(\App::getLocale())->name }}</div>
            </a>
        </li>
        @endforeach
    </ul>
    </div>
</div>
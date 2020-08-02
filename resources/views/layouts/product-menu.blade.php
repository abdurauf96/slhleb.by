<div class="menu-left-products hidden-sm">
    <ul class="parent-menu">
        <div class="dot-menu"></div>
        @foreach ($categories as $cat)
        <li class="parent">

            <a href="{{ route('products', $cat->id) }}" class="parent-link">
                <div class="icon"><img src="/images/categories/{{ $cat->icon }}" alt=""></div>
                <div class="name">{{ $cat->translate(\App::getLocale())->name }}</div>
            </a>
            <ul class="sub__menu">
                @foreach ($cat->filters as $filter)
                <li><a href="/products/{{$cat->id}}?filter={{ $filter->id }}">{{ $filter->translate(\App::getLocale())->name }}</a></li>
                @endforeach
            </ul>
        </li>  
        @endforeach
        
      
    </ul>
</div>

<div class="menu-left-products menu-mobile-product">
    <div class="menu-mobile-product-wrap">
        <ul class="parent-menu">
        @foreach ($categories as $cat)
        <li class="parent">
            <a href="{{ route('products', $cat->id) }}" class="parent-link">
                <div class="icon"><img src="/images/categories/{{ $cat->icon }}" alt=""></div>
                <div class="name">{{ $cat->translate(\App::getLocale())->name }}</div>
            </a>
        </li>
        @endforeach
    </ul>
    </div>
</div>
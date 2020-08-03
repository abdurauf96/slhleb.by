@extends('layouts.site')


@section('parent')
<li class="breadcrumb-item"><a href="{{ route('products',$product->category->id) }}">{{ $product->category->translate(\App::getLocale())->name }}</a></li>
@endsection
@section('child')
{{ $product->translate(\App::getLocale())->name }}
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section-product__header" style="background-image: url('/frontend/images/catalog-cart-bg.jpg')">
        <div class="container-custom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-cart">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="row" data-aos="fade-in" data-aos-delay="100">
                                    <div class="col-xl-12">
                                        <div class="section-product-slider">
                                            <div class="product-slider">
                                                <div class="product-slider-item">
                                                    <div class="product-hit">
                                                        @if($product->status=='new')
                                                        <img src="/frontend/images/new-catalog.png" alt="">
                                                        @elseif($product->status=='xit')
                                                        <img src="/frontend/images/hit-catalog.png" alt="">
                                                        @else
                                                        @endif
                                                    </div>
                                                    <div class="img-comp-container">
                                                        <div class="img-comp-container">
                                                            <div class="img-comp-img img-comp-overlay">
                                                                <img src="/images/products/{{ $product->image_out }}">
                                                            </div>
                                                            <div class="img-comp-img ">
                                                                
                                                                <img src="/images/products/{{ $product->image_in}}">
                                                            </div>
                                                        </div>									
                                                    </div>
                                                    <div class="product-weight"><p>{{ $product->weight }}</p></div>
                                                </div>
                                                
                                                @php
                                                    $images=json_decode($product->images);
                                                @endphp
                                                @isset($images)
                                                @foreach ($images as $image)
                                                <div class="product-slider-item" style="background-image: url('/images/products/{{ $image }}')">  
                                                </div>
                                                @endforeach
                                                @endisset
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="product-nav-wrapper">
                                            <div class="product-nav-slider">
                                                
                                                @php
                                                    $images=json_decode($product->images);
                                                @endphp
                                               @isset($images)
                                                @foreach ($images as $image)
                                                <div class="product-nav-slider-item" style="background-image: url('/images/products/{{ $image }}')">   
                                                </div>
                                                @endforeach
                                                @endisset
                                            </div>
                                            <div class="scrollbar">
                                                <input type="range" id="range" min="1" value="1" step="1" max="" />
                                            </div>
                                            <!-- <div class="product-nav-slider-scrollbar scrollbar">

                                                <div class="scrollbar-thumb"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7">
                                <div class="section-product-info">
                                    <div class="navbar-info-share">

                                        <div class="dropdown-custom">			
                                            <div class="dropdown-toggle">Поделиться
                                                <i class="fal fa-share-alt"></i>
                                            </div>	    	        
                                            <ul class="dropdown-menu dropdown-content">
                                                
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.example.com&title={{ $product->translate(\App::getLocale())->name }}" target="_blank" class="fab fa-facebook-f"></a></li>
                                                <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                                                <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                                                <li><a href="http://vk.com/share.php?url=http%3A%2F%2Fwww.example.com&title={{ $product->translate(\App::getLocale())->name }}&noparse=false" target="_blank" class="fab fa-vk"></a></li>
                                                	
                                            </ul>	
                                        </div>	
                                    </div>
                                    <div class="product-description">
                                        <div class="product-title">
                                            {{-- <span data-aos="fade-left">Хлеб</span> --}}
                                            <h2 class="title" data-aos="fade-left" data-aos-delay="100">{{ $product->translate(\App::getLocale())->name }}</h2>
                                            <p data-aos="fade-left" data-aos-delay="300">{{ $product->translate(\App::getLocale())->description }}</p>
                                        </div>
                                        <div class="panel-product panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true" data-aos="fade-left" data-aos-delay="400">
                                            <div class="panel">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                            Состав продукта
                                                            <span class="open"></span>
                                                        </a>

                                                    </h4>
                                                </div>
                                                <div id="collapse-1" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        {{ $product->translate(\App::getLocale())->consist }}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of panel -->

                                            <div class="panel">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                            Описание
                                                            <span class="open"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        {{ $product->translate(\App::getLocale())->about }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-block-info">
                                            <h3>В 100 г. продукта содежится:</h3>
                                            <div class="wrap">
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        Белков
                                                    </div>
                                                    <div class="info-item__body">
                                                        {{ $product->protein }}
                                                    </div>
                                                </div>
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        Углеводов
                                                    </div>
                                                    <div class="info-item__body">
                                                        {{ $product->carbo }}
                                                    </div>
                                                </div>
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        Жиров
                                                    </div>
                                                    <div class="info-item__body">
                                                        {{ $product->fat }}
                                                    </div>
                                                </div>
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        <small>Энергетическая ценность
                                                        (калорийность)</small>
                                                    </div>
                                                    <div class="info-item__body">
                                                        <small>{{ $product->callory }}</small>	

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-block-table">
                                            <table>
                                                
                                                <tr>
                                                    <td class="td-desc"><img src="/images/icon/weight-icon.png" alt="">kg</td>
                                                    @foreach ($product->attributes  as $attr)
                                                    <td>{{ $attr->weight }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td class="td-desc">час</td>
                                                    @foreach ($product->attributes  as $attr)
                                                    <td>{{ $attr->time }}</td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td class="td-desc">шт</td>
                                                    @foreach ($product->attributes  as $attr)
                                                    <td>{{ $attr->qty }}</td>
                                                    @endforeach
                                                </tr>
                                                
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="section-recommend" style="background-image: url('/frontend/images/section-recommend-bg.png')">
        <div class="section-recommend-wrap">
            <div class="container-custom">
                <div class="title title-style">
                    Рекомендуем с этим продуктом
                </div>
                <div class="recommend-slider-wrap">
                    <div class="slider-nav style-dots">
                        <div class="recommend__slider-dots"></div>
                        <div class="recommend__slider-arrows d-flex"></div>
                    </div>
                    <div class="recommend-slider">
                        @foreach ($product->filter->products as $prod)
                        <a href="{{ route('viewProduct', $prod->id) }}" class="recommend-slider-item catalog-list__item">
                            <div class="item-image">
                                <img src="/images/products/{{ $prod->image }}" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>{{ $prod->translate(\App::getLocale())->name }}</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon/weight-icon.png" alt=""></span>
                                    <p>{{ $prod->weight }}</p>
                                </div>
                            </div>	
                        </a>
                        @endforeach         
                    </div>
                </div>
            </div>

        </div>
        
    @include('layouts.footer')
    </div>

</div>
@endsection
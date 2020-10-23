@extends('layouts.site')





@section('parent')

<li class="breadcrumb-item"><a href="{{ route('products',$product->category->slug) }}">{{ $product->category->translate(\App::getLocale())->name }}</a></li>

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

                                                @if($product->image_out || $product->image_in)

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

                                                                 <!-- The before image is first -->

                                                                 <img src="/images/products/{{ $product->image_out }}"

                                                                 <!-- The after image is last -->

                                                                 <img src="/images/products/{{ $product->image_in}}">

                                                                </div>

                                                        

                                                        <!--<div class="img-comp-container">-->

                                                        <!--    <div class="img-comp-container">-->

                                                        <!--        <div class="img-comp-img img-comp-overlay">-->

                                                        <!--            <img src="/images/products/{{ $product->image_out }}">-->

                                                        <!--        </div>-->

                                                        <!--        <div class="img-comp-img ">-->

                                                                    

                                                        <!--            <img src="/images/products/{{ $product->image_in}}">-->

                                                        <!--        </div>-->

                                                        <!--    </div>									-->

                                                        <!--</div>-->

                                                        <div class="product-weight"><p>{{ $product->weight }}</p></div>

                                                    </div>

                                                @endif

                                                

                                                @foreach ($product->photos as $image)

                                                <div class="product-slider-item" style="background-image: url('/images/products/{{ $image->image }}')">  

                                                </div>

                                                @endforeach

                                                

                                                

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-xl-12">

                                        <div class="product-nav-wrapper">

                                            <div class="product-nav-slider">

                                                @if($product->image_out || $product->image_in)

                                                    <div class="product-nav-slider-item" style="background-image: url('/images/products/{{ $product->image_out}}')">   

                                                    </div>

                                                @endif

                                                    

                                               @foreach ($product->photos as $image)

                                                <div class="product-nav-slider-item" style="background-image: url('/images/products/{{ $image->image }}')">   

                                                </div>

                                                @endforeach

                                               

                                            </div>

                                            @if(count($product->photos) >1)

                                            <div class="scrollbar">

                                                <input type="range" id="range" min="1" value="1" step="1" max="" />

                                            </div>

                                            @endif

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

                                            <div class="dropdown-toggle">@lang('messages.share')

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

                                            <h1 class="title" data-aos="fade-left" data-aos-delay="100">{{ $product->translate(\App::getLocale())->name }}</h1>

                                            <p data-aos="fade-left" data-aos-delay="300">{{ $product->translate(\App::getLocale())->description }}</p>

                                        </div>

                                        <div class="panel-product panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true" data-aos="fade-left" data-aos-delay="400">

                                             @if($product->consist)

                                            <div class="panel">

                                                <div class="panel-heading" role="tab" id="headingOne">

                                                    <h4 class="panel-title">

                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">

                                                            @lang('messages.sostav')

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

                                            @endif

                                            <!-- end of panel -->

                                            @if($product->about)

                                            <div class="panel">

                                                <div class="panel-heading" role="tab" id="headingTwo">

                                                    <h4 class="panel-title">

                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">

                                                            @lang('messages.desc')

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

                                            @endif

                                        </div>

                                        <div class="product-block-info">

                                            <h3>@lang('messages.soderj'):</h3>

                                            <div class="wrap">

                                                <div class="info-item">

                                                    <div class="info-item__title">

                                                        @lang('messages.belki')

                                                    </div>

                                                    <div class="info-item__body">

                                                        {{ $product->protein }}

                                                    </div>

                                                </div>

                                                <div class="info-item">

                                                    <div class="info-item__title">

                                                        @lang('messages.uglev')

                                                    </div>

                                                    <div class="info-item__body">

                                                        {{ $product->carbo }}

                                                    </div>

                                                </div>

                                                <div class="info-item">

                                                    <div class="info-item__title">

                                                        @lang('messages.jirov')

                                                    </div>

                                                    <div class="info-item__body">

                                                        {{ $product->fat }}

                                                    </div>

                                                </div>

                                                <div class="info-item">

                                                    <div class="info-item__title">

                                                        <small>@lang('messages.energy')</small>

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

                                                    <td class="td-desc"><img src="/frontend/images/icon/weight-icon.png" alt="">@lang('messages.ves')</td>

                                                    @foreach ($product->attributes  as $attr)

                                                   <td>{{ $attr['weight_'.\App::getLocale()] }}</td>


                                                    @endforeach

                                                </tr>

                                                <tr>

                                                    <td class="td-desc"><img src="/frontend/images/icon/icon-time.png" alt="">@lang('messages.chas')</td>

                                                    @foreach ($product->attributes  as $attr)

                                                    <td>{{ $attr->time }}</td>

                                                    @endforeach

                                                </tr>

                                                <tr>

                                                    <td class="td-desc bb-none"><img src="/frontend//images/icon/icon-count.png" alt="">@lang('messages.sht')</td>

                                                    @foreach ($product->attributes  as $attr)

                                                    <td class="bb-none">{{ $attr->qty }}</td>

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

                @if(count($rec_products)>0)

                    <div class="title title-style">

                        @lang('messages.recom')

                    </div>

                @endif

                <div class="recommend-slider-wrap">

                    <div class="slider-nav style-dots">

                        <div class="recommend__slider-dots"></div>

                        <div class="recommend__slider-arrows d-flex"></div>

                    </div>

                    <div class="recommend-slider">

                        @foreach ($rec_products as $prod)

                        <a href="{{ route('viewProduct', $prod->slug) }}" class="recommend-slider-item catalog-list__item">

                            <div class="item-image">

                                <span class="shadow-prd"></span>

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

<div class="modal fade modal-order" id="modal-order">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true"><i class="fal fa-times"></i></span>

                </button>

            </div>

            <div class="modal-body">

                <div class="container">

                    <a href="#" class="modal-logo">

                        <img src="/frontend/images/logo.png" alt="">

                    </a>

                    <h5 class="header-title">@lang('messages.order')</h5>

                    <div class="form">

                        <form action="" id="order-product" method="POST">

                            @csrf

                            <input type="hidden" name="name_product" value="{{$product->slug}}">

                            <div class="form-group">

                                <label for="name">@lang('messages.name') <span>*</span></label>

                                <input type="text" name="name" class="form-control" id="name" required="" value="">

                            </div>

                            <div class="form-group">

                                <label for="email">E-mail<span>*</span></label>

                                <input type="text" name="email" class="form-control" id="email" required="" value="">

                            </div>

                            <div class="form-group">

                                <label for="addres">@lang('messages.tel') <span>*</span></label>

                                <input type="text" name="phone" class="form-control" id="phone" required="" value="">

                            </div>

                            <div class="form-group">

                                <label for="company">@lang('messages.company') <span>*</span></label>

                                <input type="text" name="company" class="form-control" id="company" required="" value="">

                            </div>

                            <div class="form-group mb-0">

                                <label for="message">@lang('messages.msg') <span>*</span></label>

                                <textarea class="form-control" id="message" required="" name="msg" rows="6" value=""></textarea>

                            </div>

                            <p class="my-4 d-flex"><span class="mr-1">*</span>@lang('messages.req')</p>

                            

                            <div class="g-recaptcha-wrap" style="text-align:center;">

                                                <div class="g-recaptcha" data-sitekey="6LdjZ8wZAAAAAAJVyzY0xLgl_OQGcGeJkBJXTZDV"  data-callback="enableBtnOrder" data-theme="dark"></div>

                                            </div>



                            <button type="submit" id="order-button" class="btn btn-red">@lang('messages.send')</button>

                        </form>

                    </div>

                </div>

                

            </div>

        </div>

    </div>

</div>

@endsection



@section('scripts')

    <script type="text/javascript">

        var submitOrder = $('.g-recaptcha').closest('#order-product').find('[type="submit"]');

                submitOrder.prop("disabled",true);

                function enableBtnOrder(){

                    $('#order-button').prop("disabled",false);

                }

    </script>

@endsection




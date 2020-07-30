@extends('layouts.site')

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
                                                    <div class="product-hit"><img src="/frontend/images/hit.png" alt=""></div>
                                                    <div class="img-comp-container">
                                                        <div class="img-comp-container">
                                                            <div class="img-comp-img img-comp-overlay">
                                                                <img src="/frontend/images/chusovskoy1.png">
                                                            </div>
                                                            <div class="img-comp-img ">
                                                                
                                                                <img src="/frontend/images/chusovskoy.png">
                                                            </div>
                                                        </div>									
                                                    </div>
                                                    <div class="product-weight"><p>460 гр.</p></div>
                                                </div>
                                            <div class="product-slider-item" style="background-image: url('/frontend/images/slider-nav-2.jpg')">
                                                <div class="product-hit"><img src="/frontend/images/hit.png" alt=""></div>
                                            </div>
                                            <div class="product-slider-item" style="background-image: url('/frontend/images/slider-nav-1.jpg')">
                                                
                                            </div>
                                            <div class="product-slider-item" style="background-image: url('/frontend/images/slider-nav-2.jpg')">
                                                
                                            </div>
                                            <div class="product-slider-item" style="background-image: url('/frontend/images/slider-nav-1.jpg')">
                                                
                                            </div>
                                            <div class="product-slider-item" style="background-image: url('/frontend/images/slider-nav-1.jpg')">
                                                
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="product-nav-wrapper">
                                            <div class="product-nav-slider">
                                                <div class="product-nav-slider-item" style="background-image: url('/frontend/images/slider-nav-1.jpg')">
                                                    <div><img src="/frontend/images/icon/weight-icon-2.png" alt="">560 г.</div>
                                                </div>
                                                <div class="product-nav-slider-item" style="background-image: url('/frontend/images/slider-nav-2.jpg')">
                                                </div>
                                                <div class="product-nav-slider-item" style="background-image: url('/frontend/images/slider-nav-1.jpg')">
                                                </div>
                                                <div class="product-nav-slider-item" style="background-image: url('/frontend/images/slider-nav-2.jpg')">
                                                </div>
                                                <div class="product-nav-slider-item" style="background-image: url('/frontend/images/slider-nav-1.jpg')">
                                                </div>
                                                <div class="product-nav-slider-item" style="background-image: url('/frontend/images/slider-nav-2.jpg')">
                                                </div>
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
                                                <li><a href="https://facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
                                                <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                                                <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                                                <li><a href="https://vk.com" target="_blank" class="fab fa-vk"></a></li>
                                            </ul>	
                                        </div>	
                                    </div>
                                    <div class="product-description">
                                        <div class="product-title">
                                            <span data-aos="fade-left">Хлеб</span>
                                            <h2 class="title" data-aos="fade-left" data-aos-delay="100">«Слуцкий»</h2>
                                            <p data-aos="fade-left" data-aos-delay="300">Есть такой хлеб, аромат и вкус которого мы помним с детства, он напоминает о воскресном утре и становится дорог для каждой белорусской семьи, о таком хлебе говорят – классический!</p>
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
                                                        мука пшеничная  2 с М12-25, мука ржаная сеяная, вода, солод ржаной сухой, соль поваренная пищевая йодированная (противослеживающая добавка Е 536), дрожжи хлебопекарные прессованные, сахар белый кристаллический.
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
                                                        мука пшеничная  2 с М12-25, мука ржаная сеяная, вода, солод ржаной сухой, соль поваренная пищевая йодированная (противослеживающая добавка Е 536), дрожжи хлебопекарные прессованные, сахар белый кристаллический.
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
                                                        7,0 г
                                                    </div>
                                                </div>
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        Белков
                                                    </div>
                                                    <div class="info-item__body">
                                                        7,0 г
                                                    </div>
                                                </div>
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        Белков
                                                    </div>
                                                    <div class="info-item__body">
                                                        7,0 г
                                                    </div>
                                                </div>
                                                <div class="info-item">
                                                    <div class="info-item__title">
                                                        <small>Энергетическая ценность
                                                        (калорийность)</small>
                                                    </div>
                                                    <div class="info-item__body">
                                                        <small>998 кДж <br>
                                                        228 кал</small>	

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-block-table">
                                            <table>
                                                <tr>
                                                    <td class="td-desc"><img src="/images/icon/weight-icon.png" alt="">kg</td>
                                                    <td>0,5/0,55</td>
                                                    <td>0,25 <br>упак. нарез.</td>
                                                    <td class="br-none">0,25 <br>упак. нарез.</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-desc"><img src="/images/icon/icon-time.png" alt="">час</td>
                                                    <td>24</td>
                                                    <td>24</td>
                                                    <td class="br-none">48</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-desc bb-none"><img src="/images/icon/weight-icon.png" alt="">шт.</td>
                                                    <td class="bb-none">10/5</td>
                                                    <td class="bb-none">10/5</td>
                                                    <td class="br-none brb-none">8</td>
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
                        <a href="" class="recommend-slider-item catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-2.png" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>Хлеб «Слуцкий»</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                    <p>10 / 20</p>
                                </div>
                            </div>	
                        </a>
                        <a href="" class="recommend-slider-item catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-2.png" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>Хлеб «Слуцкий»</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                    <p>10 / 20</p>
                                </div>
                            </div>	
                        </a>
                        <a href="" class="recommend-slider-item catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-2.png" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>Хлеб «Слуцкий»</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                    <p>10 / 20</p>
                                </div>
                            </div>	
                        </a>
                        <a href="" class="recommend-slider-item catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-2.png" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>Хлеб «Слуцкий»</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                    <p>10 / 20</p>
                                </div>
                            </div>	
                        </a>
                        <a href="" class="recommend-slider-item catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-2.png" alt="">
                            </div>
                            <div class="item-info">
                                <div class="item-info-title">
                                    <h2>Хлеб «Слуцкий»</h2>
                                </div>
                                <div class="item-info-weight">
                                    <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                    <p>10 / 20</p>
                                </div>
                            </div>	
                        </a>
                    </div>
                </div>
            </div>

        </div>
        
    @include('layouts.footer')
    </div>

</div>
@endsection
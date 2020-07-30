@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__header h-100" style="background-image: url('/frontend/images/stocks-page-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="title title-style">
                        Фотоконкурс
                        «Я люблю сладости»
                        2019
                    </div>
                    <div class="block-group-btn">
                        <h2>Ознакомиться подробнее:</h2>
                        <div class="block-info-btn">
                            <a href="#modal-competition-conditions" data-toggle="modal" class="btn btn-transparent">Условия проведения</a>
                            <a href="#modal-position" data-toggle="modal" class="btn btn-transparent">Положение</a>
                        </div>
                    </div>
                    
                </div>
                <div class="scroll-down">
                    <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section__content section-stock" style="background-image: url('/frontend/images/bg-main.jpg')">
        <!-- <div class="section-bg-floating">
            <div class="bg-floating"></div>
        </div> -->
        <div class="section-recipe__list">
            <div class="container">
                <div class="section-stock-wrap">
                    <div class="title title-style">
                        Победители
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <span><img src="/frontend/images/icon/place-1.png" alt="">1 место</span>

                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h3>Ясли-сад № 7</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <span><img src="/frontend/images/icon/place-2.png" alt="">2 место</span>

                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h3>Казак Вадим</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <span><img src="/frontend/images/icon/place-3.png" alt="">3 место</span>

                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h3>Ясли-сад № 7</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-stock-wrap">
                    <div class="title title-style">
                        Участники
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>Участник № 1</h2>
                                    <h3>Ясли-сад № 7</h3>
                                    <p>«Ну оооочень хочется попробовать эту вкуснятину»</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>Участник № 2</h2>
                                    <h3>Ясли-сад № 7</h3>
                                    <p>«Ну оооочень хочется попробовать эту вкуснятину»</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>Участник №3</h2>
                                    <h3>Ясли-сад № 7</h3>
                                    <p>«Ну оооочень хочется попробовать эту вкуснятину»</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>Участник №3</h2>
                                    <h3>Ясли-сад № 7</h3>
                                    <p>«Ну оооочень хочется попробовать эту вкуснятину»</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>Участник №3</h2>
                                    <h3>Ясли-сад № 7</h3>
                                    <p>«Ну оооочень хочется попробовать эту вкуснятину»</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="item-thumbnail-gallery">
                                    <a href="/frontend/images/stock-img1.jpg" class="item-thumbnail">
                                        <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                        <img src="/frontend/images/stock-img1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-name">
                                    <h2>Участник №3</h2>
                                    <h3>Ясли-сад № 7</h3>
                                    <p>«Ну оооочень хочется попробовать эту вкуснятину»</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        @include('layouts.footer')

    </div>

</div>
@endsection
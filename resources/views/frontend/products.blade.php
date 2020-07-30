@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__header" style="background-image: url('/frontend/images/catalog-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="title title-style">
                        Хлеб
                    </div>
                    <div class="text scroll-pane">
                        <p>Слуцкий хлебозавод - это динамично развивающаяся компания с более чем полувековой историей. Правильное сочетание современных технологий и многовековых традиций с творческим и добросовестным отношением к любимому занятию - вот секрет команды.

                            Продукция, выпускаемая на заводе, под брендом «Слуцкий хлеб» широко известна не только в своем регионе, но и во многих районах Минской области. Наш свежий хлеб всегда приносит дому особую атмосферу уюта и благополучия - для этого и даже за необычный вкус и выбор его покупателей. Сегодня ассортимент хлебобулочных изделий включает около 50 наименований хлебобулочных изделий и столько же кондитерских изделий.
                            Широкий ассортимент продукции, индивидуальный подход к каждому клиенту, 
                            Продукция, выпускаемая на заводе, под брендом «Слуцкий хлеб» широко известна не только в своем регионе, но и во многих районах Минской области. Наш свежий хлеб всегда приносит дому особую атмосферу уюта и благополучия - для этого и даже за необычный вкус и выбор его покупателей. Сегодня ассортимент хлебобулочных изделий включает около 50 наименований хлебобулочных изделий и столько же кондитерских изделий.
                            Широкий ассортимент продукции, индивидуальный подход к каждому клиенту,
                            атмосферу уюта и благополучия - для этого и даже за необычный вкус и выбор его покупателей. Сегодня ассортимент хлебобулочных изделий включает около 50 наименований хлебобулочных изделий и столько же кондитерских изделий.
                        Широкий ассортимент продукции, индивидуальный подход к каждому клиенту, </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
            <p>Какой хлеб подходит вам?</p>
            <img src="/frontend/images/slider-label.png" alt="">
        </a>
    </div>

    <div class="section-catalog">
        <div class="section-catalog__top" style="background-image: url('/frontend/images/common-bg-section.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ct-filtr">
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="">Вся продукция</a></li>
                                        <li class="list-inline-item active"><a href="">Хлеба для нагитса</a></li>
                                        <li class="list-inline-item"><a href="">Хлеба ржаные</a></li>
                                        <li class="list-inline-item"><a href="">Хлеба пшеничные</a></li>
                                    </ul>
                                </div>
                                <div class="ct-search">
                                    <div class="ct-search__form">
                                        <form action="">
                                            <input type="search" class="ct-form-control form-control" placeholder="Поиск по названия">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-catalog__list">
            <div class="container">
                <div class="cl-slider">
                    <div class="cl-slider-wrap">
                        <div class="catalog-slider">
                            <div class="cl-slider-item item__card">
                                <img src="/frontend/images/banner-catalog.jpg" alt="">
                            </div>
                            <div class="cl-slider-item item__card">
                                <img src="/frontend/images/banner-catalog.jpg" alt="">
                            </div>
                            <div class="cl-slider-item item__card">
                                <img src="/frontend/images/banner-catalog.jpg" alt="">
                            </div>
                        </div>
                        <div class="slider-nav style-dots">
                            <div class="catalog__slider-dots"></div>
                            <div class="catalog__slider-arrows d-flex"></div>
                        </div>
                    </div>
                </div>
                <div class="catalog-list">
                    <div class="row">
                        <a href="/catalog-cart.php" class="col-md-6 col-lg-4 catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-1.png" alt="">
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
                            <div class="new"><img src="/frontend/images/new-catalog.png" alt=""></div>
                        </a>
                        <a href="/catalog-cart.php" class="col-md-6 col-lg-4 catalog-list__item">
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
                            <div class="new"><img src="/frontend/images/new-catalog.png" alt=""></div>
                        </a>
                        <a href="/catalog-cart.php" class="col-md-6 col-lg-4 catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-1.png" alt="">
                                
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
                            <div class="hit"><img src="/frontend/images/hit-catalog.png" alt=""></div>
                        </a>
                        <a href="/catalog-cart.php" class="col-md-6 col-lg-4 catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-1.png" alt="">
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
                        <a href="/catalog-cart.php" class="col-md-6 col-lg-4 catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-1.png" alt="">
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
                        <a href="" class="col-md-6 col-lg-4 catalog-list__item">
                            <div class="item-image">
                                <img src="/frontend/images/product-1.png" alt="">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination">
                                <ul class="list-inline">
                                    <li class="list-inline-item active"><a href="">1</a></li>
                                    <li class="list-inline-item"><a href="">2</a></li>
                                    <li class="list-inline-item"><a href="">3</a></li>
                                    <li class="list-inline-item"><a href="">4</a></li>
                                    <li class="list-inline-item"><a href="">5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
            
            @include('layouts.footer')
        </div>
    </div>

</div>
@endsection
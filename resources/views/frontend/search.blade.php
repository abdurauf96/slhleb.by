@extends('layouts.site')
@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-search" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-title">
                                Поиск по сайту
                            </div>
                        </div>
                        <div class="col-md-8 search-block">
                            <p>Результаты поиска по зпросу «Молоко»</p>
                            <form action="/poisk.html" method="GET" role="form">
                                <div class="form-group">
                                    <input type="text" name="query" value="" class="form-control" placeholder="Введите ваш поисковый запрос" required="">
                                    <button type="submit" class="btn">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="item-result">
                                <span class="tag">Хлеб</span>
                                <h2><a href="/">Хлеб «Сафийски»</a></h2>
                                <p>Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="item-result">
                                <span class="tag">Новости</span>
                                <h2><a href="">Хлеб «Сафийски» выпущена первая партия</a></h2>
                                <p>Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина. <br>
                                    Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.<br>
                                    Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="item-result">
                                <span class="tag">рецепты</span>
                                <h2><a href="/">Гренки с хлебом «Сафийски»</a></h2>
                                <p>Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="item-result">
                                <span class="tag">Хлеб</span>
                                <h2><a href="/">Хлеб «Сафийски»</a></h2>
                                <p>Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="item-result">
                                <span class="tag">Новости</span>
                                <h2><a href="">Хлеб «Сафийски» выпущена первая партия</a></h2>
                                <p>Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина. <br>
                                    Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.<br>
                                    Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="item-result">
                                <span class="tag">рецепты</span>
                                <h2><a href="/">Гренки с хлебом «Сафийски»</a></h2>
                                <p>Хлеб с пышным мякишем, из пшеничной и рисовой муки и легким пикантными нотками тмина.</p>
                            </div>
                        </div>
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
        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
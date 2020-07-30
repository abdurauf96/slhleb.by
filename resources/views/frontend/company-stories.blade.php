@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__header h-100" style="background-image: url('/frontend/images/stories-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="title title-style">
                        Истории
                    </div>
                    <div class="text scroll-pane">
                        <p>В Индии в первых веках нашей эры существовал закон, преступников наказывали тем, что запрещали есть хлеб на какое-то время. При этом были уверены, что кто не ест хлеба, будет иметь несчастную судьбу и плохое здоровье. И в сейчас верующие индийцы утреннюю молитву начинают со словами: «Все есть пища, но хлеб есть ее великая мать».
                            <br><br>
                            Если у Вас есть предложения, сценарии, рецепты, истории и другая познавательная информация, напишите, пожалуйста, нам об этом в гостевой книге. Самые  интересные мы разместим на сайте. </p>

                    </div>
                </div>
                <div class="scroll-down">
                  <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
            <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>Какой хлеб подходит вам?</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
        </div>

    </div>

    <div class="section__content section-recipe" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section-recipe__top">
            <div class="container-custom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ct-filtr">
                            <div class="row">
                                <div class="col-md-10">
                                    <ul class="list-inline">
                                        <li class="list-inline-item active"><a href="">Все истории</a></li>
                                        <li class="list-inline-item"><a href="">Хлеб</a></li>
                                        <li class="list-inline-item"><a href="">Сухари, сушки </a></li>
                                        <li class="list-inline-item"><a href="">Сказки </a></li>
                                        <li class="list-inline-item"><a href="">Пряники </a></li>
                                        <li class="list-inline-item"><a href="">Тортики</a></li>
                                         
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-recipe__list">
            <div class="container-custom">
                <div class="item-list">
                    <div class="row mb-5">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="/interesting-story-page.php" class="item-card item-small mb-5 f-large" style="background-image: url(/frontend/images/recipes-image.jpg)">
                                        <div class="item-card-tags">
                                            <span>Хлеб</span>
                                        </div>
                                        <div class="item-card__tittle">
                                            <h2>Хлебные традиции</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <a href="/interesting-story-page.php" class="item-card item-small f-small" style="background-image: url(/frontend/images/stories-img2.jpg)">
                                                <div class="item-card-tags">
                                                    <span>Сухари ,сушки</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Бублик Кулури </h2>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-6"><h2>
                                            <a href="/interesting-story-page.php" class="item-card item-small f-small" style="background-image: url(/frontend/images/stories-img2.jpg)">
                                                <div class="item-card-tags">
                                                    <span>Сухари ,сушки</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Бублик Кулури </h2>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <a href="/interesting-story-page.php" class="item-card item-big f-small" style="background-image: url(/frontend/images/stories-img1.jpg)">
                                <div class="item-card-tags">
                                    <span>Тортики</span>

                                </div>
                                <div class="item-card__tittle">
                                    <h2>Гензель и Гретень</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="row mb-5">
                        <div class="col-xl-4">
                            <a href="/interesting-story-page.php" class="item-card item-big f-small" style="background-image: url(/frontend/images/stories-img3.jpg)">
                                <div class="item-card-tags">
                                    <span>Хлеб</span>
                                </div>
                                <div class="item-card__tittle">
                                    <h2>О пользе хлеба для взрослых и детей</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="" class="item-card item-small mb-5 f-large" style="background-image: url(/frontend/images/stories-img4.jpg)">
                                        <div class="item-card-tags">
                                            <span>Хлеб</span>
                                        </div>
                                        <div class="item-card__tittle">
                                            <h2>Хлебный словарь</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <a href="" class="item-card item-small f-small" style="background-image: url(/frontend/images/stories-img2.jpg)">
                                                <div class="item-card-tags">
                                                    <span>Сухари ,сушки</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Бублик Кулури </h2>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-6"><h2>
                                            <a href="" class="item-card item-small f-small" style="background-image: url(/frontend/images/stories-img2.jpg)">
                                                <div class="item-card-tags">
                                                    <span>Сухари ,сушки</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Бублик Кулури </h2>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
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

            @include('layouts.footer')
        </div>
    </div>

</div>
@endsection
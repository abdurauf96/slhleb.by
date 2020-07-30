@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__header h-100" style="background-image: url('/frontend/images/recipes-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="title title-style">
                        Рецепты
                    </div>
                    <div class="text scroll-pane">
                        <p>В данном разделе собраны лучшие рецепты присланные Вами.
                            <br>
                        Если у Вас есть предложения, сценарии, рецепты, истории и другая познавательная информация, напишите, пожалуйста, нам об этом в гостевой книге. Самые  интересные мы разместим на сайте.  </p>

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

    <div class="section-recipe section__content" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section-recipe__top">
            <div class="container-custom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ct-filtr">
                            <div class="row">
                                <div class="col-md-10">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="">Все рецепты</a></li>
                                        <li class="list-inline-item active"><a href="">Блюда из слоеного теста </a></li>
                                        <li class="list-inline-item"><a href="">Простые рецепты</a></li>
                                        <li class="list-inline-item"><a href="">Блюда с квасом </a></li>
                                        <li class="list-inline-item"><a href="">Рецепты к праздникам</a></li>
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
                                    <a href="/interesting-recipes-page.php" class="item-card item-small mb-5 f-large" style="background-image: url(/frontend/images/recipie-img.png)">
                                        <div class="item-card-tags">
                                            <span>Блюда с квасом</span>
                                            <span>Блюда с квасом</span>
                                        </div>
                                        <div class="item-card__tittle">
                                            <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <a href="/interesting-recipes-page.php" class="item-card item-small f-small" style="background-image: url(/frontend/images/recipie-img.png)">
                                                <div class="item-card-tags">
                                                    <span>Блюда с квасом</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-6"><h2>
                                            <a href="/interesting-recipes-page.php" class="item-card item-small f-small" style="background-image: url(/frontend/images/recipie-img.png)">
                                                <div class="item-card-tags">
                                                    <span>Блюда с квасом</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <a href="/interesting-recipes-page.php" class="item-card item-big f-small" style="background-image: url(/frontend/images/recipe-big-image.jpg)">
                                <div class="item-card-tags">
                                    <span>Блюда с квасом</span>
                                    <span>Блюда с квасом</span>
                                    <span>Блюда с квасом</span>

                                </div>
                                <div class="item-card__tittle">
                                    <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="row mb-5">
                        <div class="col-xl-4">
                            <a href="/interesting-recipes-page.php" class="item-card item-big f-small" style="background-image: url(/frontend/images/recipe-big-image.jpg)">
                                <div class="item-card-tags">
                                    <span>Блюда с квасом</span>
                                    <span>Блюда с квасом</span>
                                    <span>Блюда с квасом</span>

                                </div>
                                <div class="item-card__tittle">
                                    <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="/interesting-recipes-page.php" class="item-card item-small mb-5 f-large" style="background-image: url(/frontend/images/recipie-img.png)">
                                        <div class="item-card-tags">
                                            <span>Блюда с квасом</span>
                                            <span>Блюда с квасом</span>
                                        </div>
                                        <div class="item-card__tittle">
                                            <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <a href="" class="item-card item-small f-small" style="background-image: url(/frontend/images/recipie-img.png)">
                                                <div class="item-card-tags">
                                                    <span>Блюда с квасом</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Суп с гренками с хлебом «Сафийски»</h2>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-6"><h2>
                                            <a href="" class="item-card item-small f-small" style="background-image: url(/frontend/images/recipie-img.png)">
                                                <div class="item-card-tags">
                                                    <span>Блюда с квасом</span>
                                                </div>
                                                <div class="item-card__tittle">
                                                    <h2>Суп с гренками с хлебом «Сафийски»</h2>
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

           

        </div>
        @include('layouts.footer')
    </div>  
</div>
@endsection
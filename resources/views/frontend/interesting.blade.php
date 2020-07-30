@extends('layouts.site')

@section('content')

<div class="section__wrapper company">
    <div class="section__header h-100" style="background-image: url('/frontend/images/interesting-bg.jpg')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="title">
                            Это интересно
                        </div>
                        <div class="text scroll-pane">
                            <p>Рады Вас приветствовать на страничке «Это интересно»
                                Здесь Вы можете можете узнать для себя много интересных сценариев, познавательной информации о праздниках,  смешных, занимательных историй про хлеб, квас, пряник, поделиться любимым рецептом, рассказать миру о  городе Слуцке, и главной достопримечательности города Софии Слуцкой.
                                <br>
                                роме того Вы можете принимать участие в конкурсах, делиться своими впечатлениями и конечно же предлагать свои. Всегда будем рады сотрудничать с Вами!

                                Если у Вас есть предложения, сценарии, рецепты, истории и другая познавательная 
                                роме того Вы можете принимать участие в конкурсах, делиться своими впечатлениями и конечно же предлагать свои. Всегда будем рады сотрудничать с Вами!

                                Если у Вас есть предложения, сценарии, рецепты, истории и другая познавательная 
                                роме того Вы можете принимать участие в конкурсах, делиться своими впечатлениями и конечно же предлагать свои. Всегда будем рады сотрудничать с Вами!

                                Если у Вас есть предложения, сценарии, рецепты, истории и другая познавательная 
                            </p>

                        </div>
                        
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
    <div class="section__content" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-custom">
            <a href="/interesting-recipes.php" class="item__card" style="background-image: url('/frontend/images/recipes-image.jpg')">
                <div class="item__card-tittle">
                    <h2>Рецепты</h2>
                </div>
            </a>
            <a href="/interesting-stories.php" class="item__card" style="background-image: url('/frontend/images/history-image.jpg')">
                <div class="item__card-tittle">
                    <h2>Истории</h2>
                </div>
            </a>
            <a href="/interesting-about.php" class="item__card" style="background-image: url('/frontend/images/city-image.jpg')">
                <div class="item__card-tittle">
                    <h2>О городе Слуцк</h2>
                </div>
            </a>
            <a href="/interesting-holiday-scripts.php" class="item__card" style="background-image: url('/frontend/images/holidays-image.jpg')">
                <div class="item__card-tittle">
                    <h2>Сценарии праздников</h2>
                </div>
            </a>
            <a href="/interesting-stock-competition.php" class="item__card" style="background-image: url('/frontend/images/stoks-image.jpg')">
                <div class="item__card-tittle">
                    <h2>Акции и конкурсы</h2>
                </div>
            </a>
        </div>
        
       @include('layouts.footer')

    </div>
</div>


@endsection
@extends('layouts.site')

@section('content')
<div class="section__wrapper inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/recipe-page-bg.jpg')">
        <div class="navbar-info-share">
            <div class="dropdown-custom">			
                <a href="#" class="dropdown-toggle">Поделиться
                    <i class="fal fa-share-alt"></i>
                </a>	    	        
                <ul class="dropdown-menu dropdown-content">
                    <li><a href="https://facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
                    <li><a href="https://instagram.com" target="_blank" class="fab fa-instagram"></a></li>
                    <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                    <li><a href="https://vk.com" target="_blank" class="fab fa-vk"></a></li>
                </ul>	
            </div>	
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="title title-style">
                        Сырный суп 
                        с сухариками 
                        из хлеба 
                        «Деревенского»
                    </div>
                    
                </div>
                <div class="scroll-down">
                    <a href="" id="scroll-down"><span></span></a>
                </div>
            </div>
        </div>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
            <p>Какой хлеб подходит вам?</p>
            <img src="/frontend/images/slider-label.png" alt="">
        </a>
    </div>

    <div class="section-recipe section__content recipe-page" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section-bg-floating">
            <div class="bg-floating"></div>
        </div>
        <div class="section-recipe__list">
            <div class="container">
                <div class="item-list">
                    <div class="row mb-5">
                        <div class="col-xl-6">
                            <div class="recipe-page-title">
                                <h2>Ингредиенты</h2>
                            </div>
                            <div class="recipe-page-description">
                                <p class="decoration">Хлеб «Деревенский»</p>
                                <p>Вода — 1.0 литра</p>
                                <p>Куриное филе — 350 гр</p>
                                <p>Плавленый сырок — 1 шт</p>
                                <p>Картофель — 2 шт</p>
                                <p>Морковь — ½ средней моркови</p>
                                <p>1 небольшая луковица</p>
                                <p>Чеснок, растительное масло, соль, перец</p>
                            </div>	
                        </div>
                        <div class="col-xl-6">
                            <div class="recipe-page-title">
                                <h2>Приготовление</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="recipe-thumbnail-gallery">
                                        <a href="/frontend/images/recipe-page-thumbnail.jpg" class="recipe-thumbnail">
                                            <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                            <img src="/frontend/images/recipe-page-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-8">
                                    <div class="item-card__tittle">
                                        <h2>Шаг 1</h2>
                                        <p>Чеснок пропустить через пресс, куриное филе и лук нарезать кубиками. Все вместе поставить обжариваться в сковороде. Поставить воду на газ.</p>
                                    </div>
                                </div>	
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="recipe-thumbnail-gallery">
                                        <a href="/frontend/images/recipe-page-thumbnail.jpg" class="recipe-thumbnail">
                                            <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                            <img src="/frontend/images/recipe-page-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-8">
                                    <div class="item-card__tittle">
                                        <h2>Шаг 2</h2>
                                        <p>Чеснок пропустить через пресс, куриное филе и лук нарезать кубиками.</p>
                                    </div>
                                </div>	
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="recipe-thumbnail-gallery">
                                        <a href="/frontend/images/recipe-page-thumbnail.jpg" class="recipe-thumbnail">
                                            <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                            <img src="/frontend/images/recipe-page-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-8">
                                    <div class="item-card__tittle">
                                        <h2>Шаг 3</h2>
                                        <p>Чеснок пропустить через пресс, куриное филе и лук нарезать кубиками.</p>
                                    </div>
                                </div>	
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="recipe-thumbnail-gallery">
                                        <a href="/frontend/images/recipe-page-thumbnail.jpg" class="recipe-thumbnail">
                                            <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                            <img src="/frontend/images/recipe-page-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-8">
                                    <div class="item-card__tittle">
                                        <h2>Шаг 4</h2>
                                        <p>Чеснок пропустить через пресс, куриное филе и лук нарезать кубиками. Все вместе поставить обжариваться в сковороде. Поставить воду на газ.</p>
                                    </div>
                                </div>	
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="recipe-thumbnail-gallery">
                                        <a href="/frontend/images/recipe-page-thumbnail.jpg" class="recipe-thumbnail">
                                            <div class="zoom"><i class="fal fa-search-plus"></i></div>
                                            <img src="/frontend/images/recipe-page-thumbnail.jpg" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-8">
                                    <div class="item-card__tittle">
                                        <h2>Шаг 5</h2>
                                        <p>Чеснок пропустить через пресс, куриное филе и лук нарезать кубиками. Все вместе поставить обжариваться в сковороде. Поставить воду на газ.</p>
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
                    Похожие рецепты
                </div>
            </div>
            <div class="section-recipe__slider section-recipe-page">
                <div class="recipie-slider">
                    <a href="" class="recipie-slider__item">
                        <div class="slider__item-image" style="background-image: url('/frontend/images/recipie-img.png')"></div>
                        <div class="slider__item-info">                   
                            <div class="top">
                                <h2>Суп с гренками с хлебом«Сафийски»</h2>
                            </div>                        
                            <div class="absolute">  
                                <span><img src="/frontend/images/clock.png" alt="">30 мин</span>
                            </div>                   
                        </div>
                    </a>
                    <a href="" class="recipie-slider__item">
                        <div class="slider__item-image" style="background-image: url('/frontend/images/recipie-img.png')"></div>
                        <div class="slider__item-info">                   
                            <div class="top">
                                <h2>Суп с гренками с хлебом«Сафийски»</h2>
                            </div>                        
                            <div class="absolute">  
                                <span><img src="/frontend/images/clock.png" alt="">30 мин</span>
                            </div>                   
                        </div>
                    </a>
                    <a href="" class="recipie-slider__item">
                        <div class="slider__item-image" style="background-image: url('/frontend/images/recipie-img.png')"></div>
                        <div class="slider__item-info">                   
                            <div class="top">
                                <h2>Суп с гренками с хлебом«Сафийски»</h2>
                            </div>                        
                            <div class="absolute">  
                                <span><img src="/frontend/images/clock.png" alt="">30 мин</span>
                            </div>                   
                        </div>
                    </a>
                    <a href="" class="recipie-slider__item">
                        <div class="slider__item-image" style="background-image: url('/frontend/images/recipie-img.png')"></div>
                        <div class="slider__item-info">                   
                            <div class="top">
                                <h2>Суп с гренками с хлебом«Сафийски»</h2>
                            </div>                        
                            <div class="absolute">  
                                <span><img src="/frontend/images/clock.png" alt="">30 мин</span>
                            </div>                   
                        </div>
                    </a>
                </div>
                <div class="slider-nav">
                    <div class="recipie__slider-dots"></div>
                    <div class="recipie__slider-arrows d-flex"></div>
                </div>
            </div>

        </div>
        @include('layouts.footer')
    </div>

</div>
@endsection
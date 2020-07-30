@extends('layouts.site')

@section('content')
<div class="section__wrapper news-page inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/news.jpg')">
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
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-date">
                            <p><span>21</span>сентября 2020</p>
                        </div>
                        <div class="header-title">
                            Поздравляем с 8 марта!
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="#section04"><span></span></a>
        </div>
    </div>
    <div class="section__content section-news-page" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">

                            <p>Международный Женский день официально утвержден ООН в 1977 году, но история праздника начинается весной 1901 года. Тогда 8 Марта американские домохозяйки нарушили тишину чикагских улиц грохотом пустых кастрюль и ведер. Таким необычным способом они требовали законного равноправия с мужчинами.
                                <br><br>
                            В 1910 году с предложением учредить День солидарности женщин всего мира выступила Клара Цеткин — известная коммунистка и реформатор. Главной идеей праздника было отстаивание прав трудящихся женского пола. Первые два года праздник отмечали в разные дни марта, а начиная с 1914, женщины сразу нескольких стран сплотились в борьбе за свои права в один день — 8 марта. Сейчас праздник утратил первоначальную политическую окраску и превратился в цветочный день почитания прекрасных дам.</p>
                            <br>
                            <img src="/frontend/images/news-page.jpg" alt="" style="width: 100%">
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-recommend recommend-news" style="background-image: url('/frontend/images/section-recommend-bg.png')">
        <div class="section-recommend-wrap">
            <div class="container-custom offset-right">
                <div class="title title-style">
                    Другие новости
                </div>
                <div class="recommend-slider-wrap">
                    
                    <div class="news-slider">
                        <a href="" class="slider-item item__card" style="background-image: url('/frontend/images/recommend-news.jpg')">
                            <div class="item__card-date">
                                <span>21 сентября 2020</span>
                            </div>
                            <div class="item__card-tittle">
                                <h2>Новинка от 
                                ОАО «Слуцкий хлебозавод»</h2>
                            </div>
                        </a>
                        <a href="" class="slider-item item__card" style="background-image: url('/frontend/images/recommend-news.jpg')">
                            <div class="item__card-date">
                                <span>21 сентября 2020</span>
                            </div>
                            <div class="item__card-tittle">
                                <h2>Компания сегодня</h2>
                            </div>
                        </a>
                        <a href="" class="slider-item item__card" style="background-image: url('/frontend/images/recommend-news.jpg')">
                            <div class="item__card-date">
                                <span>21 сентября 2020</span>
                            </div>
                            <div class="item__card-tittle">
                                <h2>Компания сегодня</h2>
                            </div>
                        </a>
                        <a href="" class="slider-item item__card" style="background-image: url('/frontend/images/recommend-news.jpg')">
                            <div class="item__card-date">
                                <span>21 сентября 2020</span>
                            </div>
                            <div class="item__card-tittle">
                                <h2>Компания сегодня</h2>
                            </div>
                        </a>
                        <a href="" class="slider-item item__card" style="background-image: url('/frontend/images/recommend-news.jpg')">
                            <div class="item__card-date">
                                <span>21 сентября 2020</span>
                            </div>
                            <div class="item__card-tittle">
                                <h2>Компания сегодня</h2>
                            </div>
                        </a>
                    </div>
                    <div class="slider-nav">
                        <div class="news__slider-dots"></div>
                        <div class="news__slider-arrows d-flex"></div>
                    </div>
                </div>
            </div>

        </div>
        
        @include('layouts.footer')
    </div>
</div>
@endsection
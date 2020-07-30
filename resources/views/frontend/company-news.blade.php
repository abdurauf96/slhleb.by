@extends('layouts.site')

@section('content')
<div class="section__wrapper company-activity">
    <div class="section__header h-100" style="background-image: url('/frontend/images/news.jpg')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-title" data-aos="fade-up" data-aos-delay="100">
                            Новости и достижения
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
    <div class="section__content section-news" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-fluid">
            <div class="section__content-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="filter-year">
                                <div class="dropdown-custom">		
                                    <div class="dropdown-toggle">Год
                                        <span>2000<i class="far fa-chevron-down"></i></span>
                                    </div>	    	        
                                    <ul class="dropdown-menu dropdown-content">
                                        <li><a href="" class="">2001</a></li>
                                        <li><a href=""  class="">2002</a></li>
                                        <li><a href="" class="">2003</a></li>
                                        <li><a href="" class="">2004</a></li>
                                    </ul>	
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 item">
                            <a href="/news-page.php" class="item__card" style="background-image: url('/frontend/images/news-item.jpg')">
                                <div class="item__card-date">
                                    <div class="day">21</div>
                                    <div class="m-y">
                                        <span>сентябра</span>
                                        <span>2020</span>
                                    </div>
                                </div>
                                <div class="item__card-tittle">
                                    <h2>Компания сегодня</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-12 item">
                            <a href="/news-page.php" class="item__card" style="background-image: url('/frontend/images/news-item.jpg')">
                                <div class="item__card-date">
                                    <div class="day">21</div>
                                    <div class="m-y">
                                        <span>сентябра</span>
                                        <span>2020</span>
                                    </div>
                                </div>
                                <div class="item__card-tittle">
                                    <h2>Компания сегодня</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-12 item">
                            <a href="/news-page.php" class="item__card" style="background-image: url('/frontend/images/news-item.jpg')">
                                <div class="item__card-date">
                                    <div class="day">21</div>
                                    <div class="m-y">
                                        <span>сентябра</span>
                                        <span>2020</span>
                                    </div>
                                </div>
                                <div class="item__card-tittle">
                                    <h2>Компания сегодня</h2>
                                </div>
                            </a>
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
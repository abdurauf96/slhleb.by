@extends('layouts.site')

@section('content')

<div class="section__wrapper company">
    <div class="section__header" style="background-image: url('/frontend/images/company-bg.jpg')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="title" data-aos="fade-down" data-aos-delay="100">
                            Компания
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-md-7">
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
            <a href="/company-today.php" class="item__card"  data-aos="fade-up" data-aos-delay="100" style="background-image: url('/frontend/images/news-bg.png')">
                <div class="item__card-tittle">
                    <h2>Компания сегодня</h2>
                </div>
            </a>
            <a href="/company-history.php" class="item__card"  data-aos="fade-up" data-aos-delay="100" style="background-image: url('/frontend/images/news-bg.png')">
                <div class="item__card-tittle">
                    <h2>История</h2>
                </div>
            </a>
            <a href="/news.php" class="item__card"  data-aos="fade-up" data-aos-delay="100" style="background-image: url('/frontend/images/news-bg.png')">
                <div class="item__card-tittle">
                    <h2>Новости и достижения</h2>
                </div>
            </a>
            <a href="/company-activity.php" class="item__card"  data-aos="fade-up" data-aos-delay="100" style="background-image: url('/frontend/images/news-bg.png')">
                <div class="item__card-tittle">
                    <h2>Информация о деятельности 
                    общества</h2>
                </div>
            </a>
        </div>
        
        @include('layouts.footer')

    </div>
</div>
<a href="#" class="back-top"><i class="fal fa-chevron-up"></i></a>

@endsection
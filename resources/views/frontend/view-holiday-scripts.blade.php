@extends('layouts.site')

@section('content')
<div class="section__wrapper news-page inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/news.jpg')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="header-date">
                            <p><span>21</span>сентября 2020</p>
                        </div>
                        <div class="header-title">
                            Праздник 1
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="#section04"><span></span></a>
        </div>
    </div>
    <div class="section__content section-news section-p" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">

                            <p>Международный Женский день официально утвержден ООН в 1977 году, но история праздника начинается весной 1901 года. Тогда 8 Марта американские домохозяйки нарушили тишину чикагских улиц грохотом пустых кастрюль и ведер. Таким необычным способом они требовали законного равноправия с мужчинами.

                            В 1910 году с предложением учредить День солидарности женщин всего мира выступила Клара Цеткин — известная коммунистка и реформатор. Главной идеей праздника было отстаивание прав трудящихся женского пола. Первые два года праздник отмечали в разные дни марта, а начиная с 1914, женщины сразу нескольких стран сплотились в борьбе за свои права в один день — 8 марта. Сейчас праздник утратил первоначальную политическую окраску и превратился в цветочный день почитания прекрасных дам.</p>

                            <img src="/frontend/images/news-page.jpg" alt="">
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection
@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-requisite" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="bg-right"><img src="/frontend/images/page-images/s-requisite-book.png" alt=""></div>
        <div class="bg-right bg-bottom"><img src="/frontend/images/page-images/s-requisite-pen.png" alt=""></div>
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                Реквизиты
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="description">
                                <h3>Банковские реквизиты 
                                Открытое акционерное общество «Слуцкий хлебозавод»</h3>
                            </div>
                            <div class="content">
                                <p>расчетный счет: № BY26BAPB30123418400100000000 </p>
                                <p>код: BAPBBY2X </p>
                                <p>в ОАО "Белагропромбанк" г.Минск пр-т Жукова,3 </p>
                                <p>Режим работы администрации: понедельник — пятница 8:00 - 17:00</p>
                                <p>обед: 13:00 - 14:00 </p>
                                <p>суббота, воскресенье — выходной.</p>
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
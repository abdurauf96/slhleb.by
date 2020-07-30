@extends('layouts.site')

@section('content')
<div class="section__wrapper company">
    <div class="section__header h-100" style="background-image: url('/frontend/images/city.jpg')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <div class="title">
                            О городе Слуцк
                        </div>
                        <div class="text scroll-pane">
                            <p>Впервые Случеск упоминается в Повести временных лет как город Туровского княжества под 1116 годом. В XII веке Слуцк становится столицей удельного княжества наследников туровского князя Юрия Ярославовича. В первой половине XIV века он входит в состав Великого княжества Литовского. XV веком датируется знаменитая Слуцкая летопись.
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
            <a href="/interesting-about-history-city.php" class="item__card" style="background-image: url('/frontend/images/city-history.jpg')">
                <div class="item__card-tittle">
                    <h2>История города Слуцк</h2>
                </div>
            </a>
            <a href="/interesting-about-where-go.php" class="item__card" style="background-image: url('/frontend/images/city-history-2.jpg')">
                <div class="item__card-tittle">
                    <h2>Слуцк. Куда пойти?</h2>
                </div>
            </a>
        </div>
        
        @include('layouts.footer')

    </div>
</div>
@endsection
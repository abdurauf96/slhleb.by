@extends('layouts.site')

@section('content')
<div class="section__wrapper inner__page">
    <div class="section__header h-100" style="background-image: url('/frontend/images/history-page-bg.jpg')">

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
                    <div class="col-xl-9 col-md-9">
                        <div class="header-title">
                            История о девочке,
                            которая наступила 
                            на хлеб
                        </div>
                        <div class="header-auth-name">
                            <p>Ганс Христиан Андерсен</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>
    </div>
    <div class="section__content section-history-page" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="section__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 item">
                        <div class="content">
                            <p>Вы, конечно, слышали о девочке, которая наступила на хлеб, чтобы не запачкать башмачков, слышали и о том, как плохо ей потом пришлось. Об этом и написано, и напечатано.</p>

                            <p>Она была бедная, но гордая и спесивая девочка. В ней, как говорится, были дурные задатки. Крошкой она любила ловить мух и обрывать у них крылышки; ей нравилось, что мухи из летающих насекомых превращались в ползающих. Ловила она также майских и навозных жуков, насаживала их на булавки и подставляла им под ножки зеленый листик или клочок бумаги. Бедное насекомое ухватывалось ножками за бумагу, вертелось и изгибалось, стараясь освободиться от булавки, а Инге смеялась:</p>
                            <br>

                            <img src="/frontend/images/history-page-img1.jpg" style="max-width: 600px;width: 100%;margin: 0 auto" alt="">
                            <br>
                            <p>— Майский жук читает! Ишь, как переворачивает листок!</p>
                            <p>С летами она становилась скорее хуже, чем лучше; к несчастью своему, она была прехорошенькая, и ей хоть и доставались щелчки, да все не такие, какие следовало.</p>
                            <p>— Крепкий нужен щелчок для этой головы! — говаривала ее родная мать. — Ребенком ты часто топтала мой передник, боюсь, что выросши ты растопчешь мне сердце!</p>
                            <p>Так оно и вышло.</p>
                            <p>Инге поступила в услужение к знатным господам, в помещичий дом. Господа обращались с нею, как со своей родной дочерью, и в новых нарядах Инге, казалось, еще похорошела, зато и спесь ее все росла да росла.</p>
                            <p>Целый год прожила она у хозяев, и вот они сказали ей:</p>
                            <p>— Ты бы навестила своих стариков, Инге!</p>
                            <p>Инге отправилась, но только для того, чтобы показаться родным в полном своем параде. Она уже дошла до околицы родной деревни, да вдруг увидала, что около пруда стоят и болтают девушки и парни, а неподалеку на камне отдыхает ее мать с охапкой хвороста, собранного в лесу. Инге — марш назад: ей стало стыдно, что у нее, такой нарядной барышни, такая оборванная мать, которая вдобавок сама таскает из лесу хворост. Инге даже не пожалела, что не повидалась с родителями, ей только досадно было.</p>
                            <p>Прошло еще полгода.</p>
                            <p>— Надо тебе навестить своих стариков, Инге! — опять сказала ей госпожа. — Вот тебе белый хлеб, снеси его им. То-то они обрадуются тебе!</p>
                            <p>
                            Инге нарядилась в самое лучшее платье, надела новые башмаки, приподняла платьице и осторожно пошла по дороге, стараясь не запачкать башмачков, — ну, за это и упрекать ее нечего. Но вот тропинка свернула на болотистую почву; приходилось пройти по грязной луже. Не долго думая, Инге бросила в лужу свой хлеб, чтобы наступить на него и перейти лужу, не замочив ног. Но едва она ступила на хлеб одною ногой, а другую приподняла, собираясь шагнуть на сухое место, хлеб начал погружаться с нею все глубже и глубже в землю — только черные пузыри пошли по луже!</p>
                            <br>
                            <img src="/frontend/images/history-page-img2.jpg" style="max-width: 600px;width: 100%;margin: 0 auto" alt="">
                            <br>
                            <p>Вот какая история!</p>
                            <p>Куда же попала Инге? К болотнице в пивоварню. Болотница приходится теткой лешим и лесным девам; эти-то всем известны: про них и в книгах написано, и песни сложены, и на картинах их изображали не раз, о болотнице же известно очень мало; только когда летом над лугами подымается туман, люди говорят, что «болотница пиво варит!» Так вот, к ней-то в пивоварню и провалилась Инге, а тут долго не выдержишь! Клоака — светлый, роскошный покой в сравнении с пивоварней болотницы! От каждого чана разит так, что человека тошнит, а таких </p>
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
                    Похожие истории
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
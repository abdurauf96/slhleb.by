@extends('layouts.site')

@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

@section('content')
<div class="wrapper-kwiz">
        <p class="close-kvis"><i class="fal fa-times"></i></p>
        <a href="#modal-quiz" data-toggle="modal" class="kvis-button">
                <p>@lang('messages.kakoy')</p>
                <img src="/frontend/images/slider-label.png" alt="">
            </a>
    </div>
<div class="section__wrapper company-activity">
    <div class="section__header h-100" style="background-image: url('/images/pages/{{ $page->image }}')">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-9">
                        <div class="header-title" data-aos="fade-down" data-aos-delay="100">
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                        <div class="text scroll-pane">
                            <p>{{ $page['desc_'.\App::getLocale()] }} </p>
                        </div>      
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-down">
            <a href="" id="scroll-down"><span></span></a>
        </div>

    </div>
    <div class="section__content section-today s-cooperation" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container-fluid">
            <div class="section__content-wrap">
                <div class="description-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <h2 class="title-bold f-icon">Как будет строиться <br> наше сотрудничество</h2>
                            </div>
                        </div>
                        <div class="row sect-cooperation">
                            
                            <div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/coop-1.png" alt="">
								</div>
								<div class="item-title">
									Связывайтесь с нами по телефону или e-mail
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/coop-2.png" alt="">
								</div>
								<div class="item-title">
									Назначаем удобное время
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/coop-3.png" alt="">
								</div>
								<div class="item-title">
									На встрече презентуем <br> образцы продукции, обсуждаем условия и  подписываем договор
								</div>
							</div>
							<div class="col-md-6 item">
								<div class="item-image">
									<img src="/frontend/images/icon/coop-4.png" alt="">
								</div>
								<div class="item-title">
									Предоставляем POS-материалы,<br> предоставляем скидки, проводим<br> дегустации
								</div>
							</div>
							<div class="col-md-6 item">
								<div class="item-image">
									<img src="/frontend/images/icon/coop-5.png" alt="">
								</div>
								<div class="item-title">
									Осуществляем стабильную и <br> бесплатную доставку товара
								</div>
							</div>
                            
                            
                            
                            
                            <!--{!! $page['content_'.\App::getLocale()] !!}-->
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12">
                                <h2 class="title-bold f-icon">Наши преимущества</h2>
                            </div>
                        </div>
                        <div class="row sect-cooperation">
                            
                            <div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-1.png" alt="">
								</div>
								<div class="item-title">
									Успешно работаем с 1953 года
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-2.png" alt="">
								</div>
								<div class="item-title">
									ISO 9001 с 2006 года
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-3.png" alt="">
								</div>
								<div class="item-title">
									Новешие технологии и оборудование
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-4.png" alt="">
								</div>
								<div class="item-title">
									Высококвалифицированные <br> специалисты
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-5.png" alt="">
								</div>
								<div class="item-title">
									Дизайн европейского уровня
								</div>
							</div>
							<div class="col-md-4 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-6.png" alt="">
								</div>
								<div class="item-title">
									Выгодные цены
								</div>
							</div>
							<div class="col-md-6 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-7.png" alt="">
								</div>
								<div class="item-title">
									Известный бренд
								</div>
							</div>
							<div class="col-md-6 item">
								<div class="item-image">
									<img src="/frontend/images/icon/advantag-8.png" alt="">
								</div>
								<div class="item-title">
									Быстрое решение возникающих <br> вопросов 
								</div>
							</div>
                            
                            
                            
                            
                            <!--{!! $page['content_'.\App::getLocale()] !!}-->
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12">
                                <h2 class="title-bold f-icon">Наша продукция понравится <br> Вашим клиентам</h2>
                                <div class="content-center">
                                    <p>Открытое акционерное общество "Слуцкий хлебозавод"</p>
                                <p>Юридический адрес: <br>
РБ. Минская обл., г. Слуцк, ул. Заводская, 3; <br>
Почтовый адрес: РБ. 223610, Минская обл., г. Слуцк, <br>
ул. Заводская, 3</p>
<p>УНН 600154157, ОКПО DD391348.<br>
тел/факс 8(01795)5-60-27.</p>
                                </div>
                                
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
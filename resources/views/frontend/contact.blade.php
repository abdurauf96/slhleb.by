@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/contact">Контакты</a></li>
@endsection
@section('child')
Контактные данные
@endsection

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-contact" style="background-image: url('/frontend/images/bg-main.jpg')">
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                            <div class="header-title">
                                Контактные данные
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-block">
                    <div class="row">
                        <div class="col-xl-6 item" data-aos="fade-up" data-aos-delay="100">
                            <div class="item-title">
                                <h2>Юридический адрес</h2>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>Адрес:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['addres_'.\App::getLocale()] }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>Почтовый адрес:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['email_addres'] }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>УНН: </p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['unn'] }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>ОКПО: </p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['okpo'] }}. </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>тел./факс:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['phone'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 item" data-aos="fade-up" data-aos-delay="100">
                            <div class="item-title">
                                <h2>Банковские реквизиты</h2>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>Расчетный счет:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['schot'] }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>код:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['kod'] }} </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>банк:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['bank_'.\App::getLocale()] }} </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <p>Режим работы:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $contact['work_time_'.\App::getLocale()] }}</p>
                                </div>
                            </div>
                        </div>
                        @foreach ($personals as $per)
                        <div class="col-xl-6 item" data-aos="fade-up" data-aos-delay="100">
                            <div class="item-title">
                                <h2>{{ $per['position_'.\App::getLocale()] }}</h2>
                            </div>
                            @if ($per->name_ru!='')
                            <div class="row">
                                <div class="col-12">
                                    <p class="name">{{ $per['name_'.\App::getLocale()] }} </p>
                                </div>
                            </div>
                            @endif
                            @if ($per->phone!='')
                            <div class="row">
                                <div class="col-5">
                                    <p>тел.: </p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $per->phone }} </p>
                                </div>
                            </div>
                            @endif
                            @if ($per->work_time_ru!='')
                            <div class="row">
                                <div class="col-10">
                                    <p>Личный прием граждан и представителей 
                                    юридических лиц: {{ $per['work_time_'.\App::getLocale()] }}</p>
                                </div>
                            </div>
                            @endif
                            @if($per->email!='')
                            <div class="row">
                                <div class="col-5">
                                    <p>e-mail:</p>
                                </div>
                                <div class="col-7">
                                    <p>{{ $per->email }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                        
                    </div>
                </div>	
            </div>
            @include('layouts.footer')
        </div>
</div>
@endsection
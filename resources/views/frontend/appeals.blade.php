@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-obrashcheniye" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="bg-right t-20"><img src="/frontend/images/page-images/s-small-letter.png" alt=""></div>
        <div class="bg-right t-35 r-8"><img src="/frontend/images/page-images/s-medium-letter.png" alt=""></div>
        <div class="bg-right r-15"><img src="/frontend/images/page-images/s-big-letter.png" alt=""></div>
        <div class="bg-right b-30"><img src="/frontend/images/page-images/s-obr-lines.png" alt=""></div>
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="header-title">
                                Электронное обращение
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="description-fedback">
                                <p>Порядок рассмотрения электронных обращений</p>
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="col-xl-12 s-nav-tabs-wrap">
                            <div class="s-nav-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" class="btn-tabs active" href="#tab1">Для граждан</a></li>
                                    <li><a data-toggle="tab" class="btn-tabs" href="#tab2">Для юридических лиц и индивидуальных предпринимателей</a></li>
                                </ul>
                            </div>
                            <p>Обращения, поступившие посредством форм «Обращения граждан» и «Обращения юридических лиц», рассматриваются в соответствии с Законом Республики Беларусь от 18.07.2011 № 300-З «Об обращениях граждан и юридических лиц».</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active show">
                                    <div class="form">
                                        <form action="">
                                            <div class="form-group">
                                                <label for="name">Фамилия, имя, отчество гражданина <span>*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="addres">Адрес места жительства либо места пребывания гражданина <span>*</span></label>
                                                <input type="text" name="addres" class="form-control" id="addres" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-mail для ответа<span>*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="message">Текст сообщения <span>*</span></label>
                                                <textarea class="form-control" id="message" required="" name="Вопрос" rows="6" value=""></textarea>
                                            </div>
                                            <p class="my-4"><span class="mr-1">*</span>Поля, обязательные для заполнения</p>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="file" value="">
                                                    <label class="file" for="file">Прикрепить файл
                                                        <div class="btn btn-transparent">Выбрать файл</div>
                                                    </label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-red">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <div class="form">
                                        <form action="">
                                            sedfsdfsdfdf
                                            <div class="form-group">
                                                <label for="name">Фамилия, имя, отчество лица, уполномоченного в установленном порядке подписывать обращения <span>*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="addres">Адрес места нахождения юридического лица<span>*</span></label>
                                                <input type="text" name="addres" class="form-control" id="addres" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullname">Полное наименование юридического лица <span>*</span></label>
                                                <input type="text" name="fullname" class="form-control" id="fullname" required="" value="">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">E-mail для ответа<span>*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="message">Текст сообщения <span>*</span></label>
                                                <textarea class="form-control" id="message" required="" name="Вопрос" rows="6" value=""></textarea>
                                            </div>
                                            <p class="my-4"><span class="mr-1">*</span>Поля, обязательные для заполнения</p>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="file" value="">
                                                    <label class="file" for="file">Прикрепить файл
                                                        <div class="btn btn-transparent">Выбрать файл</div>
                                                    </label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-red">Отправить</button>
                                        </form>
                                    </div>
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
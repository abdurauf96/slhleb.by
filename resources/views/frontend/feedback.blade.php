@extends('layouts.site')

@section('content')
<div class="section__wrapper">
    <div class="section__content section-contact s-feedback" style="background-image: url('/frontend/images/common-bg-section2.jpg')">
        <div class="section-bg-floating bg-phone">
            <div class="bg-floating" style="background-image: url('/frontend/images/page-images/contact-feedback-ph.png')"></div>
        </div>
        <div class="container">
            <div class="section__content-wrap">
                <div class="header-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header-title">
                            Обратная связь
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="description-fedback">
                            <p>Обращения, поступившие посредством форм «Обращения граждан» и «Обращения юридических лиц», рассматриваются в соответствии с Законом Республики Беларусь от 18.07.2011 № 300-З «Об обращениях граждан и юридических лиц».</p>
                        </div>
                        <div class="form">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Ваше имя <span>*</span></label>
                                      <input type="text" name="name" class="form-control" id="name" required="" value="">
                                  </div>
                                  <div class="form-group">
                                    <label for="phone">Контактный телефон <span>*</span></label>
                                      <input type="text" name="phone" class="form-control" id="phone" required="" value="">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">E-mail для ответа <span>*</span></label>
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
    
        @include('layouts.footer')

    </div>
</div>
@endsection
@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/page/contact">Контакт</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection


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
                            {{ $page['title_'.\App::getLocale()] }}
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="description-fedback">
                            <p>{{ $page['desc_'.\App::getLocale()] }}</p>
                        </div>
                        <div class="form">
                            <form action="/appeal" method="POST" enctype="multipart/form-data">
                                @csrf
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
                                      <textarea class="form-control" id="message" required="" name="msg" rows="6" value=""></textarea>
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
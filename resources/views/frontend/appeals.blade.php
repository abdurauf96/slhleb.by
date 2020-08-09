@extends('layouts.site')

@section('parent')
<li class="breadcrumb-item"><a href="/contact">@lang('messages.contacts')</a></li>
@endsection
@section('child')
{{ $page['title_'.\App::getLocale()] }}
@endsection

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
                                {{ $page['title_'.\App::getLocale()] }}
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="description-fedback">
                                <p>@lang('messages.por')</p>
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="col-xl-12 s-nav-tabs-wrap">
                            <div class="s-nav-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" class="btn-tabs active" href="#tab1">@lang('messages.graj')</a></li>
                                    <li><a data-toggle="tab" class="btn-tabs" href="#tab2">@lang('messages.yur')</a></li>
                                </ul>
                            </div>
                            <p>{{ $page['desc_'.\App::getLocale()] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active show">
                                    <div class="form">
                                        <form action="/appeal" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">@lang('messages.fio') <span>*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="addres">@lang('messages.add') <span>*</span></label>
                                                <input type="text" name="addres" class="form-control" id="addres" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">@lang('messages.email_for')<span>*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="message">@lang('messages.text') <span>*</span></label>
                                                <textarea class="form-control" id="message" required="" name="msg" rows="6" value=""></textarea>
                                            </div>
                                            <p class="my-4"><span class="mr-1">*</span>@lang('messages.req')</p>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="file" value="">
                                                    <label class="file" for="file">@lang('messages.prik')
                                                        <div class="btn btn-transparent">@lang('messages.choose')</div>
                                                    </label>
                                                    <p class="file-return"></p>
                                                </div>
                                            </div>
                                            <input type="hidden" name="type" value="Физический лицо">
                                            <button type="submit" class="btn btn-red">@lang('messages.send')</button>
                                        </form>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <div class="form">
                                        <form action="/appeal" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <label for="name">@lang('messages.fio_yur') <span>*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="addres">@lang('messages.add_yur')<span>*</span></label>
                                                <input type="text" name="addres" class="form-control" id="addres" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullname">@lang('messages.full') <span>*</span></label>
                                                <input type="text" name="fullname" class="form-control" id="fullname" required="" value="">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">@lang('messages.email_for')<span>*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="message">@lang('messages.text') <span>*</span></label>
                                                <textarea class="form-control" id="message" required="" name="msg" rows="6" value=""></textarea>
                                            </div>
                                            <p class="my-4"><span class="mr-1">*</span>@lang('messages.req')</p>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file">
                                                   
                                                </div>
                                            </div>
                                            <input type="hidden" value="Юридический лицо" name="type">
                                            <button type="submit" class="btn btn-red">@lang('messages.send')</button>
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
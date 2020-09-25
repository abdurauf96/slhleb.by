<div class="cookies">
    <div class="close-cokies" id="close-cookies">
        <i class="fal fa-times"></i>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>@lang('messages.cookie')</p>
        </div>
    </div>
</div>




<div class="modal fade procedure-consideration modal-order" id="procedure-consideration">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding-bottom: 100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <a href="#" class="modal-logo">
                        <img src="/frontend/images/logo.png" alt="">
                    </a>
                    <h5 class="header-title">@lang('messages.procedure_consideration')</h5>
                    <div class="content">

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



<div class="modal fade quiz" id="modal-quiz">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-image: url('/frontend/images/quiz-bg.jpg')">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="col-md-12 col-lg-8 offset-lg-4">
                        <a href="#" class="modal-logo">
                            <img src="/frontend/images/logo.png" alt="">
                        </a>
                        <div class="form">
                            <h4 class="title-red f-30">Какой продукт подходит Вам?</h4>
                            <div class="step-counter">
                                <div class="step-current"></div>из <div class="step-total"></div>
                            </div>
                            <form action="" class="quiz-form">
                                <div class="step step-1 animate-in">
                                    <img src="/frontend/images/5pic-coffee.png" class="stem-img">
                                    <h2 class="title title-style">Какой продукт <br>подходит вам?</h2>
                                    <h4>Пройдите простой тест, который займет всего 5 минут, и узнайте, какие продукты подходят имено Вам!</h4>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <p class="f-30">Расскажите о себе</p>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="name">Ваше имя *</label>
                                                <input type="text" name="name" class="form-control fc-name username" id="name" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="form_radio_name">
                                                    <label>Пол</label>
                                                </div>
                                                <div class="form_radio_group">
                                                    <div class="form_radio_group-item">
                                                        <input id="man" type="radio" name="gender" value="Мужчина" checked>
                                                        <label for="man" class="fc-gender">Мужчина</label>
                                                    </div>
                                                    <div class="form_radio_group-item">
                                                        <input id="woman" type="radio" name="gender" value="Женщина">
                                                        <label for="woman" class="fc-gender">Женщина</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--<div class="form-group-wrap">-->
                                            <!--    <div class="form-group">-->
                                            <!--        <label for="weight">Вес *</label>-->
                                            <!--        <input type="text" name="weight" class="form-control weight" id="weight" required="" value="" placeholder="кг">-->
                                            <!--    </div>-->
                                            <!--    <div class="form-group">-->
                                            <!--        <label for="growth">Рост *</label>-->
                                            <!--        <input type="text" name="growth" class="form-control height" id="growth" required="" value="" placeholder="см">-->
                                            <!--    </div>-->
                                            <!--    <div class="form-group">-->
                                            <!--        <label for="age">Возраст </label>-->
                                            <!--        <input type="text" name="age" class="form-control" id="age" required="" value="" placeholder="лет">-->
                                            <!--    </div>-->
                                                
                                            <!--</div>-->
                                            <div class="form-group-wrap req_block" style="display: none">
                                                <p class="req_info">пожалуйста заполните все обязательные поля</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-2 animate-in">
                                    <img src="/frontend/images/1pic-fruits.png" class="stem-img">
                                    <h2 class="title title-style">1. Выберите цвет??</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step1" value="1" class="option-input_radio" id="time-sport-1" placeholder="" checked>
                                        <label for="time-sport-1">Красный</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step1" value="2" class="option-input_radio" id="time-sports-2" placeholder="">
                                        <label for="time-sports-2">Коричневый</label>
                                    </div>
                                     <div class="form-group form-group-radio">
                                        <input type="radio" name="step1" value="3" class="option-input_radio" id="time-sport-3" placeholder="">
                                        <label for="time-sport-3">Зелёный</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step1" value="4" class="option-input_radio" id="time-sport-3" placeholder="">
                                        <label for="time-sport-3">Синий</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step1" value="5" class="option-input_radio" id="time-sport-3" placeholder="">
                                        <label for="time-sport-3">Жёлтый</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step1" value="6" class="option-input_radio" id="time-sport-3" placeholder="">
                                        <label for="time-sport-3">Белый</label>
                                    </div>
                                </div>
                                <div class="step step-3 animate-in">
                                    <img src="/frontend/images/4pic-pizza.png" class="stem-img">
                                    <h2 class="title title-style">2. Выберите любое число?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="1" class="option-input_radio" id="relation-1" placeholder="" checked="">
                                        <label for="relation-1">1</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="2" class="option-input_radio" id="relation-2" placeholder="">
                                        <label for="relation-2">2</label>
                                    </div>
                                     <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="3" class="option-input_radio" id="relation-3" placeholder="">
                                        <label for="relation-3">3</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="4" class="option-input_radio" id="relation-3" placeholder="">
                                        <label for="relation-3">4</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="5" class="option-input_radio" id="relation-3" placeholder="">
                                        <label for="relation-3">5</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="6" class="option-input_radio" id="relation-3" placeholder="">
                                        <label for="relation-3">6</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step2" value="7" class="option-input_radio" id="relation-3" placeholder="">
                                        <label for="relation-3">7</label>
                                    </div>
                                </div>

                                <div class="step step-4 animate-in">
                                    <img src="/frontend/images/2pic-bread.png" class="stem-img">
                                    <h2 class="title title-style">3. Какой хлеб вы бы заказали в ресторане?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step3" value="1" class="option-input_radio" id="breakfast-morning-1" placeholder="" checked="">
                                        <label for="breakfast-morning-1">Ржаной</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step3" value="2" class="option-input_radio" id="breakfast-morning-2" placeholder="">
                                        <label for="breakfast-morning-2">Пшеничный</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step3" value="3" class="option-input_radio" id="breakfast-morning-3" placeholder="">
                                        <label for="breakfast-morning-3">Ржано – пшеничный</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step3" value="4" class="option-input_radio" id="breakfast-morning-3" placeholder="">
                                        <label for="breakfast-morning-3">Батон</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step3" value="5" class="option-input_radio" id="breakfast-morning-3" placeholder="">
                                        <label for="breakfast-morning-3">Любой</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step3" value="6" class="option-input_radio" id="breakfast-morning-3" placeholder="">
                                        <label for="breakfast-morning-3">Не ем хлеб</label>
                                    </div>
                                </div>

                                <div class="step step-5 animate-in">
                                    <img src="/frontend/images/6pic-ketchup-maionnaise.png" class="stem-img">
                                    <h2 class="title title-style">4. В какую страну Вы бы хотели сейчас поехать?</h2>
                                    
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step4" value="1" class="option-input_radio"  placeholder="" checked="">
                                        <label for="breakfast-morning-1">Беларусь</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step4" value="2" class="option-input_radio" placeholder="">
                                        <label for="breakfast-morning-2">Украина</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step4" value="3" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Сказочная</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step4" value="4" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Россия</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step4" value="5" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Австрия</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step4" value="6" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Германия</label>
                                    </div>
                                </div>

                                <div class="step step-6 animate-in">
                                    <img src="/frontend/images/8pic-salad.png" class="stem-img">
                                    <h2 class="title title-style">5. Как Вы будете проводить ближайшие выходные?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step5" value="1" class="option-input_radio"  placeholder="" checked="">
                                        <label for="breakfast-morning-1">Активно</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step5" value="2" class="option-input_radio" placeholder="">
                                        <label for="breakfast-morning-2">Просто отдых </label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step5" value="3" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Встречаться с друзьями</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step5" value="4" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Буду убирать и готовить</label>
                                    </div>
                                </div>
                                <div class="step step-7 animate-in">
                                    <img src="/frontend/images/7pic-food.png" class="stem-img">
                                    <h2 class="title title-style">6. Кого из авторов Вы выберете?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step6" value="1" class="option-input_radio"  placeholder="" checked="">
                                        <label for="breakfast-morning-1">Марк Твен</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step6" value="2" class="option-input_radio" placeholder="">
                                        <label for="breakfast-morning-2">Конфуций  </label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step6" value="3" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Дейл Карнеги </label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="step6" value="4" class="option-input_radio"  placeholder="">
                                        <label for="breakfast-morning-3">Эрих Мария Ремарк</label>
                                    </div>
                                </div>
                                

                                <div class="step step-8 animate-in" >
                                    <h3 class="title title-style quiz_name"></h3>
                                    {{-- <span class="my-3 f-30">Уверены, Вам подойдет:</span> --}}
                                    <div class="quiz-result">
       
                                        <div class="result-description " id="content">
                                            <br>
                                            <div class="res_step1">
                                                
                                            </div>
                                            <br>
                                            <div class="res_step2">
                                               
                                            </div>
                                            <br>
                                            <h2>Для вас мы предлагаем!</h2>
                                            <br>
                                            <div class="res_step3">
                                                
                                            </div>
                                            <div class="res_step4">
                                                
                                            </div>
                                            <br>
                                            <div class="res_step5">
                                                
                                            </div>
                                            <br>
                                            <div class="res_step6">
                                                
                                            </div>
                                            

                                        </div>
                                        <div class="navbar-info-share">
                                            <div class="navbar-info-share-wrapper">
                                                <h3>Присоединяйтесь к нам в соцсетях:</h3>
                                            </div>
                                            <ul>
                                                <li><a href="https://www.instagram.com/slucki.karavai/" class="fab fa-instagram"></a></li>
                                                <li><a href="https://www.facebook.com/slucki.karavai" class="fab fa-facebook-f"></a></li>
                                                <li><a href="https://vk.com/slucki.karavai" class="fab fa-vk"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="editor"></div>
                            <div class="form-btn-growp">
                                    <a href="#" class="next btn btn-red start_test">Начать тест</a>
                                
                                <div class="last-step-block-btn">
                                    <a href="" class="start-over btn btn-red" style="display: none;">Начать заново</a>
                                    
                                    <a href="#" class="btn btn-transparent" onclick="window.print()" style="display: none">Распечатать</a>
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-send-history" id="modal-send-history">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <a href="#" class="modal-logo">
                        <img src="/frontend/images/logo.png" alt="">
                    </a>
                    <h5 class="header-title">@lang('messages.send_hist')</h5>
                    <div class="form">
                        <form action="/send-story" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">@lang('messages.name') <span>*</span></label>
                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="addres">@lang('messages.contact') <span>*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('messages.email_for')<span>*</span></label>
                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">@lang('messages.text') <span>*</span></label>
                                <textarea class="form-control" id="message" required="" name="msg" rows="6" value=""></textarea>
                            </div>
                            <p class="my-4 d-flex"><span class="mr-1">*</span>@lang('messages.req')</p>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="file" value="">
                                    <label class="file" for="file">@lang('messages.prik')
                                        <div class="btn btn-transparent">@lang('messages.choose')</div>
                                    </label>
                                    <p class="file-return"></p>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-red">@lang('messages.send')</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



<div class="modal fade modal-send-recipe" id="modal-send-recipe">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <a href="#" class="modal-logo">
                        <img src="/frontend/images/logo.png" alt="">
                    </a>
                    <h5 class="header-title">@lang('messages.send_rec')</h5>
                    <div class="form">
                        <form action="/send-recipe" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">@lang('messages.name') <span>*</span></label>
                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="addres">@lang('messages.contact') <span>*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('messages.email_for')<span>*</span></label>
                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">@lang('messages.text')<span>*</span></label>
                                <textarea class="form-control" id="message" required="" name="msg" rows="6" value=""></textarea>
                            </div>
                            <p class="my-4 d-flex"><span class="mr-1">*</span>@lang('messages.req')</p>
                            
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="file-recipe" value="">
                                    <label class="file" for="file-recipe">@lang('messages.prik')
                                        <div class="btn btn-transparent">@lang('messages.choose')</div>
                                    </label>
                                    <p class="file-return"></p>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-red">@lang('messages.send')</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade success" id="success">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding-bottom: 100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h5 class="header-title">Спасибо, ваша заявка принята!</h5>
                </div>
                
            </div>
        </div>
    </div>
</div>



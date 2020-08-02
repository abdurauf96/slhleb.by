<div class="cookies">
    <div class="close-cokies" id="close-cookies">
        <i class="fal fa-times"></i>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Мы используем cookie-файлы на нашем сайте. Эти файлы cookie требуются для удобства пользования сайтом посетителями, включая выбранные пользователем параметры, средства навигации по сайту и т.д. Обычно данные файлы cookie не собирают персонально идентифицируемые сведения.</p>
        </div>
    </div>
</div>


<div class="modal fade modal-order" id="modal-order">
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
                    <h5 class="header-title">Заказать</h5>
                    <div class="form">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Ваше имя <span>*</span></label>
                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail<span>*</span></label>
                                <input type="text" name="email" class="form-control" id="email" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="addres">Контактный телефон <span>*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="company">Компания <span>*</span></label>
                                <input type="text" name="company" class="form-control" id="company" required="" value="">
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">Cообщения <span>*</span></label>
                                <textarea class="form-control" id="message" required="" name="Вопрос" rows="6" value=""></textarea>
                            </div>
                            <p class="my-4"><span class="mr-1">*</span>Поля, обязательные для заполнения</p>

                            <button type="submit" class="btn btn-red">Отправить</button>
                        </form>
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
                    <div class="col-md-8 offset-md-4">
                        <a href="#" class="modal-logo">
                            <img src="/frontend/images/logo.png" alt="">
                        </a>
                        <div class="form">
                            <h4 class="title-red f-30">Какой хлеб подходит Вам?</h4>
                            <div class="step-counter">
                                <div class="step-current"></div>из <div class="step-total"></div>
                            </div>
                            <form action="">
                                <div class="step step-1 animate-in">
                                    <h2 class="title title-style">Какой хлеб <br>подходит вам?</h2>
                                    <h4>Пройдите простой тест, который займет всего 5 минут, и узнайте, какие продукты подходят имено Вам!</h4>

                                    <p class="f-30">Расскажите о себе</p>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="name">Ваше имя</label>
                                                <input type="text" name="name" class="form-control fc-name" id="name" required="" value="">
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
                                            <div class="form-group-wrap">
                                                <div class="form-group">
                                                    <label for="weight">Вес</label>
                                                    <input type="text" name="weight" class="form-control" id="weight" required="" value="" placeholder="кг">
                                                </div>
                                                <div class="form-group">
                                                    <label for="growth">Рост</label>
                                                    <input type="text" name="growth" class="form-control" id="growth" required="" value="" placeholder="см">
                                                </div>
                                                <div class="form-group">
                                                    <label for="age">Возраст</label>
                                                    <input type="text" name="age" class="form-control" id="age" required="" value="" placeholder="лет">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step step-2 animate-in">
                                    <h2 class="title title-style">сколько часов в неделю вы уделяете спорту?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="time-sport" value="более 8 часов" class="option-input_radio" id="time-sport-1" placeholder="" checked>
                                        <label for="time-sport-1">более 8 часов</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="time-sport" value="3-7 часов в неделю" class="option-input_radio" id="time-sports-2" placeholder="">
                                        <label for="time-sports-2">3-7 часов в неделю</label>
                                    </div>
                                     <div class="form-group form-group-radio">
                                        <input type="radio" name="time-sport" value="Менее 2 часов в неделю или совсем не занимаюсь спортом" class="option-input_radio" id="time-sport-3" placeholder="">
                                        <label for="time-sport-3">Менее 2 часов в неделю или совсем не занимаюсь спортом</label>
                                    </div>
                                </div>
                                <div class="step step-3 animate-in">
                                    <h2 class="title title-style">Какое у вас отношение к своему весу</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="relation-weight" value="Полностью удовлетворяет" class="option-input_radio" id="relation-1" placeholder="" checked="">
                                        <label for="relation-1">Полностью удовлетворяет</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="relation-weight" value="Хочу похудеть" class="option-input_radio" id="relation-2" placeholder="">
                                        <label for="relation-2">Хочу похудеть</label>
                                    </div>
                                     <div class="form-group form-group-radio">
                                        <input type="radio" name="relation-weight" value="Хочу поправиться" class="option-input_radio" id="relation-3" placeholder="">
                                        <label for="relation-3">Хочу поправиться</label>
                                    </div>
                                </div>

                                <div class="step step-4 animate-in">
                                    <h2 class="title title-style">Завтракаете ли Вы <br>обычно по утрам?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="breakfast-morning" value="Не завтракаю совсем" class="option-input_radio" id="breakfast-morning-1" placeholder="" checked="">
                                        <label for="breakfast-morning-1">Не завтракаю совсем</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="breakfast-morning" value="Обязательно завтракаю" class="option-input_radio" id="breakfast-morning-2" placeholder="">
                                        <label for="breakfast-morning-2">Обязательно завтракаю</label>
                                    </div>
                                     <div class="form-group form-group-radio">
                                        <input type="radio" name="breakfast-morning" value="Пью кофе или чай на работе" class="option-input_radio" id="breakfast-morning-3" placeholder="">
                                        <label for="breakfast-morning-3">Пью кофе или чай на работе</label>
                                    </div>
                                </div>

                                <div class="step step-5 animate-in">
                                    <h2 class="title title-style">какой хлеб <br> вы любите?</h2>
                                    <p><small>Выберите не более 2-ух вариантов</small></p>
                                    <div class="form-group form-group-radio">
                                        <input type="checkbox" name="favorite-bread" value="Белый хлеб" class="option-input_radio" id="favorite-bread-1" placeholder="" checked="">
                                        <label for="favorite-bread-1">Белый хлеб</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="checkbox" name="favorite-bread" value="Батон, багет" class="option-input_radio" id="favorite-bread-2">
                                        <label for="favorite-bread-2">Батон, багет</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="checkbox" name="favorite-bread" value="Ржаной хлеб, черный" class="option-input_radio" id="favorite-bread-3">
                                        <label for="favorite-bread-3">жаной хлеб, черный</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="checkbox" name="favorite-bread" value="Бездрожжевой" class="option-input_radio" id="favorite-bread-4">
                                        <label for="favorite-bread-4">Бездрожжевой</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="checkbox" name="favorite-bread" value="Хлебцы, криспы" class="option-input_radio" id="favorite-bread-5">
                                        <label for="favorite-bread-5">Не завтракаю совсем</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="checkbox" name="favorite-bread" value="Совсем не ем хлеб" class="option-input_radio" id="favorite-bread-6">
                                        <label for="favorite-bread-6">Совсем не ем хлеб</label>
                                    </div>

                                </div>

                                <div class="step step-6 animate-in">
                                    <h2 class="title title-style">есть ли в вашей семье дети младше 16 лет?</h2>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="children" value="да" class="option-input_radio" id="children-1"checked="">
                                        <label for="children-1">Да</label>
                                    </div>
                                    <div class="form-group form-group-radio">
                                        <input type="radio" name="children" value="нет" class="option-input_radio" id="children-2">
                                        <label for="children-2">Нет</label>
                                    </div>

                                </div>

                                <div class="step step-7 animate-in">
                                    <h3 class="title title-style">вот что получилось, александр!</h3>
                                    <span class="my-3 f-30">Уверены, Вам подойдет:</span>
                                    <div class="quiz-result">
                                        <div class="slider-nav style-dots">
                                            <div class="quiz__slider-dots"></div>
                                            <div class="quiz__slider-arrows d-flex"></div>
                                        </div>
                                        <div class="quiz-slider">
                                            <div class="slider-item recommend-slider-item">
                                                <div class="slider-item-image">
                                                    <img src="/frontend/images/product-2.png" alt="">
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-info-title">
                                                        <h2>Хлеб «Слуцкий»</h2>
                                                    </div>
                                                    <div class="item-info-weight">
                                                        <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                                        <p>10 / 20</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item recommend-slider-item">
                                                <div class="slider-item-image">
                                                    <img src="/frontend/images/product-2.png" alt="">
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-info-title">
                                                        <h2>Хлеб «Слуцкий»</h2>
                                                    </div>
                                                    <div class="item-info-weight">
                                                        <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                                        <p>10 / 20</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item recommend-slider-item">
                                                <div class="slider-item-image">
                                                    <img src="/frontend/images/product-2.png" alt="">
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-info-title">
                                                        <h2>Хлеб «Слуцкий»</h2>
                                                    </div>
                                                    <div class="item-info-weight">
                                                        <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                                        <p>10 / 20</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item recommend-slider-item">
                                                <div class="slider-item-image">
                                                    <img src="/frontend/images/chusovskoy1.png" alt="">
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-info-title">
                                                        <h2>Хлеб «Слуцкий»</h2>
                                                    </div>
                                                    <div class="item-info-weight">
                                                        <span><img src="/frontend/images/icon//weight-icon.png" alt=""></span>
                                                        <p>10 / 20</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="result-description">
                                            <div>
                                                <p>Ваш индекс массы тела: 37.88</p>
                                                <p>Классификация:<small>ожирение высокой степени <br>
                                                Высокий риск для здоровья, настоятельно рекомендуется снижение массы тела.</small></p>
                                            </div>
                                            <br>
                                            <div>
                                                <p>Ваша любовь к спорту похвальна!</p>
                                                <p><small>Вашему организму требуется много энергии, поэтому выбирайте продукты, богатые медленными (сложными) углеводами: овощи, бобовые, крупы, цельнозерновой хлеб.</small></p>
                                                <br>
                                                <p><small>Например, мультизерновой хлеб «Сафийски» состоит из 25 компонентов, в том числе, из резаного ржаного зерна, зародышей пшеницы, геркулесовых и спельтовых хлопьев и растительных пищевых волокон. Что важно: «Сафийски» не содержит сахар!</small></p>
                                            </div>
                                            <br>
                                            <div>
                                                <p>Завтрак — <small>это важный источник энергии и залог отличного настроения на весь день! Утренний прием пищи помогает избежать неконтролируемые приступы голода. Поэтому правильный завтрак поможет тем, кто хочет быть в отличной  форме.</small></p>
                                                <p>Ваш завтрак должны составлять полезные продукты: горячая каша, зерновые продукты и хлеб, блюда из яиц.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <p>Для самых занятых рецепт завтрака за 2,5 минуты: <small>возьмите слойку Греческую с сырной начинкой или Слойку с сыром, распакуйте и поставьте на 20 секунд в микроволновку. За это время налейте горячий чай или кофе. Помешивайте напиток в течение 10 секунд, чтобы остыл, и в оставшиеся 2 минуты наслаждайтесь отличным питательным завтраком! </small></p>
                                            </div>
                                            <br>
                                            <div>
                                                <p>Рецепт вкусного и питательного бутерброда:</p>
                                                <p><small>
                                                    
                                                зерновой хлеб «Сафийски » — 1 ломтик,<br>
                                                сыр фета,<br>
                                                вяленые помидоры – 4 шт.,<br>
                                                оливки без косточки – 6 шт.,<br>
                                                рукола (или другая зелень),<br>
                                                кедровые орешки или кешью – 1 горсть, соль, специи по вкусу<br>
                                                Кедровые орехи выложите в сковороду и обжаривайте до золотисто-коричневого цвета. Вяленые помидоры нарежьте тонкой соломкой, предварительно убрав излишки масла при помощи салфетки. Оливки без косточек нарежьте кружочками. На хлеб СМАК Кайзер (или СМАК Польза) покрошите сыр фета, выложите помидоры, оливки, зелень, посыпьте орехами. 
                                                </small></p>
                                                
                                            </div>
                                            <div>
                                                <p>Растущий организм вашего ребенка также нуждается в сбалансированном питании, и хлеб должен занимать особое место в рационе.</p>
                                                <p><small>Белый пшеничный хлеб или батон детям можно давать в виде немного подсушенных сухариков с 8-мимесячного возраста.<br>Однако стоит помнить, что ферментная система ребёнка готова усваивать ржаные хлеба не ранее, чем с 3 лет. Для питания можно выбрать традиционные виды хлеба: СМАК Русский, Деревенский, Домашний, батон Фирменный, Булка с отрубями<br>Перед введением хлеба в рацион ребенка обязательно проконсультируйтесь с педиатром.</small></p>
                                            </div>

                                        </div>
                                        <div class="navbar-info-share">
                                            <div class="navbar-info-share-wrapper">
                                                <h3>Поделиться</h3>
                                            </div>
                                            <ul>
                                                <li><a href="https://facebook.com" target="_blank" class="fab fa-facebook-f"></a></li>
                                                <li><a href="https://odnoklassniki.ru" target="_blank" class="fab fa-odnoklassniki"></a></li>
                                                <li><a href="https://facebook.com" target="_blank" class="fab fa-vk"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-btn-growp">
                                    <a href="" class="next btn btn-red">Начать тест</a>
                                
                                <div class="last-step-block-btn">
                                    <a href="" class="start-over btn btn-red" style="display: none;">Начать заново</a>
                                    <a href="" class="btn btn-transparent" style="display: none">Сохранить</a>
                                    <a href="" class="btn btn-transparent" style="display: none">Распечатать</a>
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
                    <h5 class="header-title">Отправить историю</h5>
                    <div class="form">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Ваше имя <span>*</span></label>
                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="addres">Контактный телефон <span>*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" required="" value="">
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
                    <h5 class="header-title">Отправить рецепт</h5>
                    <div class="form">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Ваше имя <span>*</span></label>
                                <input type="text" name="name" class="form-control" id="name" required="" value="">
                            </div>
                            <div class="form-group">
                                <label for="addres">Контактный телефон <span>*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone" required="" value="">
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


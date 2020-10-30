<?php
require_once 'layouts/head.php';
require_once 'layouts/header.php';
require_once 'layouts/nav.php';?>
    <div class="admin">
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li>
                        <a href="">Главная</a>
                    </li>
                    <li>
                        &#8250;
                    </li>
                    <li>
                        <a href="/admin.php">Личный кабинет</a>
                    </li>
                    <li>
                        &#8250;
                    </li>
                    <li class="current">
                        Настройки профиля
                    </li>
                </ul>
            </div>
        </div>
        <div class="admin__nav">
            <div class="container">
                <ul>
                    <li>
                        <a href="/admin.php">Профили</a>
                    </li>
                    <li>
                        <a href="/admin-profile.php">Настройки</a>
                    </li>
                    <li>
                        <a href="/admin-profile-media.php">Фото/Видео</a>
                    </li>
                    <li>
                        <a href="/admin-profile-verify.php">Публикация анкеты</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admin__wrap">
            <div class="container">
                <h1>Настройки профиля</h1>

                <div class="row admin__profile">
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Имя на портале <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Настоящее имя <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Национальность <ins>*</ins></label>
                            <div class="admin__profile-select">
                                <select name="" id="">
                                    <option value="Национальность">Национальность</option>
                                    <option value="Национальность">Национальность</option>
                                    <option value="Национальность">Национальность</option>
                                    <option value="Национальность">Национальность</option>
                                    <option value="Национальность">Национальность</option>
                                    <option value="Национальность">Национальность</option>
                                    <option value="Национальность">Национальность</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Страна <ins>*</ins></label>
                            <div class="admin__profile-select">
                                <select name="" id="">
                                    <option value="Страна">Страна</option>
                                    <option value="Страна">Страна</option>
                                    <option value="Страна">Страна</option>
                                    <option value="Страна">Страна</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Город <ins>*</ins></label>
                            <div class="admin__profile-select">
                                <select name="" id="">
                                    <option value="Город">Город</option>
                                    <option value="Город">Город</option>
                                    <option value="Город">Город</option>
                                    <option value="Город">Город</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Цвет глаз <ins>*</ins></label>
                            <div class="admin__profile-select">
                                <select name="" id="">
                                    <option value="Цвет глаз">Цвет глаз</option>
                                    <option value="Цвет глаз">Цвет глаз</option>
                                    <option value="Цвет глаз">Цвет глаз</option>
                                    <option value="Цвет глаз">Цвет глаз</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Цвет волос <ins>*</ins></label>
                            <div class="admin__profile-select">
                                <select name="" id="">
                                    <option value="Цвет волос">Цвет волос</option>
                                    <option value="Цвет волос">Цвет волос</option>
                                    <option value="Цвет волос">Цвет волос</option>
                                    <option value="Цвет волос">Цвет волос</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Рост <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                                <div class="admin__profile-input-type">См</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Вес <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                                <div class="admin__profile-input-type">Кг</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Бюст <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                                <div class="admin__profile-input-type">См</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Талия <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                                <div class="admin__profile-input-type">См</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Бедра <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                                <div class="admin__profile-input-type">См</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Возраст <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Описания <ins>*</ins></label>
                            <div class="admin__profile-textarea">
                                <div class="field__lang">
                                    <div class="field__lang-item en">
                                        <img src="/assets/files/icons/svg/icon--flag-en.svg" alt="">
                                    </div>
                                    <div class="field__lang-item rus active">
                                        <img src="/assets/files/icons/svg/icon--flag-russia.svg" alt="">
                                    </div>
                                </div>
                                <textarea name="" id="" cols="30" rows="10">Есть в английском языке такое понятие — one night stand. Словари имеют обыкновение переводить его как «секс на одну ночь». Хотя при таком сухом переводе теряется уникальный смысл этого понятия. One night stand — событие твоей сексуальной биографии! Именно с этой ночью сравниваются другие ночи. Это марафон, о котором ты будешь вспоминать с гордой улыбкой и о котором будешь рассказывать восхищенным медсестрам в доме престарелых. Но чтобы one night stand все-таки состоялся, тебе нужно постараться. А вот как — мы тебе сейчас подробно расскажем.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Телефон <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-md-9 col-xs-12">
                        <div class="admin__profile-item center">
                            <label class="input-lable">Способы связи <ins>*</ins></label>
                            
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="Whatsapp" name="check" />
                                <label class="checkbox-box" for="Whatsapp"></label>
                                <label for="Whatsapp">Whatsapp</label>
                            </div>
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="SMS" name="check" />
                                <label class="checkbox-box" for="SMS"></label>
                                <label for="SMS">SMS</label>
                            </div>
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="call" name="check" />
                                <label class="checkbox-box" for="call"></label>
                                <label for="call"> Звонки</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <hr>
                    </div>
                    
                    <div class="col-12 col-md-12">
                        <div class="admin__profile-item center">
                            <label class="input-lable">Принимает <ins>*</ins></label>
                            
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="hotel" name="check" />
                                <label class="checkbox-box" for="hotel"></label>
                                <label for="hotel">Отель</label>
                            </div>
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="inhome" name="check" />
                                <label class="checkbox-box" for="inhome"></label>
                                <label for="inhome">На дом</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-12">
                        <div class="admin__profile-item center">
                            <label class="input-lable">Выезд <ins>*</ins></label>
                            
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="hotel2" name="check" />
                                <label class="checkbox-box" for="hotel2"></label>
                                <label for="hotel2">Отель</label>
                            </div>
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="inhome2" name="check" />
                                <label class="checkbox-box" for="inhome2"></label>
                                <label for="inhome2">На дом</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-12">
                        <hr>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="admin__profile-item center">
                            <label class="input-lable">Встречаюсь с</label>
                            
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="girls" name="check" />
                                <label class="checkbox-box" for="girls"></label>
                                <label for="girls">Девушки</label>
                            </div>                            
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="mans" name="check" />
                                <label class="checkbox-box" for="mans"></label>
                                <label for="mans">Мужчины</label>
                            </div>
                            <div class="admin__profile-checkbox">
                                <input type="checkbox" value="None" id="jmj" name="check" />
                                <label class="checkbox-box" for="jmj"></label>
                                <label for="jmj">Парочки</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-12">
                        <hr>
                    </div>

                    
                    
                    <div class="col-12 col-md-12">
                        <div class="admin__profile-item">
                            <label class="input-lable price">Стоимость</label>
                            <div class="admin__profile-item-wrap">
                                <div class="admin__profile-item-title">
                                    1 час
                                </div>
                                <div class="admin__profile-item-input price">
                                    <input type="text" placeholder="0">
                                </div>
                                <div class="admin__profile-item-type">
                                    <select name="" id="">
                                        <option value="RUB">RUB</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="admin__profile-item">
                            <div class="admin__profile-item-wrap">
                                <div class="admin__profile-item-title">
                                    2 часа
                                </div>
                                <div class="admin__profile-item-input price">
                                    <input type="text" placeholder="0">
                                </div>
                                <div class="admin__profile-item-type">
                                    <select name="" id="">
                                        <option value="RUB">RUB</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="admin__profile-item">
                            <div class="admin__profile-item-wrap">
                                <div class="admin__profile-item-title">
                                    3 часа
                                </div>
                                <div class="admin__profile-item-input price">
                                    <input type="text" placeholder="0">
                                </div>
                                <div class="admin__profile-item-type">
                                    <select name="" id="">
                                        <option value="RUB">RUB</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="admin__profile-item">
                            <div class="admin__profile-item-wrap">
                                <div class="admin__profile-item-title">
                                    12 часов
                                </div>
                                <div class="admin__profile-item-input price">
                                    <input type="text" placeholder="0">
                                </div>
                                <div class="admin__profile-item-type">
                                    <select name="" id="">
                                        <option value="RUB">RUB</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="admin__profile-item">
                            <div class="admin__profile-item-wrap">
                                <div class="admin__profile-item-title">
                                    День
                                </div>
                                <div class="admin__profile-item-input price">
                                    <input type="text" placeholder="0">
                                </div>
                                <div class="admin__profile-item-type">
                                    <select name="" id="">
                                        <option value="RUB">RUB</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-12">
                        <hr>
                    </div>
                    
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Другой язык </label>
                            <div class="admin__profile-select">
                                <select name="" id="">
                                    <option value="Русский">Русский</option>
                                    <option value="Русский">Русский</option>
                                    <option value="Русский">Русский</option>
                                    <option value="Русский">Русский</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Языки </label>
                            <div class="admin__profile-lang">
                                <div class="admin__profile-lang-item">
                                    <span>Русский</span>
                                    <div class="delet"></div>
                                </div>
                                <div class="admin__profile-lang-item">
                                    <span>Арабский</span>
                                    <div class="delet"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Сайт </label>
                            <div class="admin__profile-input">
                                <input type="text" placeholder="www.website.ru">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="btn-group">
                            <button class="btn btn-border">Сохранить</button>
                            <a href="/admin-profile-media.php" class="btn btn-nofocus">Добавить фото</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
require_once  'layouts/footer.php';

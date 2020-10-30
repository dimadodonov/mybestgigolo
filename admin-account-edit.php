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
                        Мои профили
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
                <h1>Настройки</h1>

                <div class="row admin__profile">
                    
                    <div class="col-6 col-md-6 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Email <ins>*</ins></label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>

                        <div class="admin__profile-checkbox">
                            <input type="checkbox" value="None" id="Whatsapp" name="check" checked />
                            <label class="checkbox-box" for="Whatsapp"></label>
                            <label for="Whatsapp">Получать оповещения на почту</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <hr>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Новый пароль</label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-12">
                        <div class="admin__profile-item">
                            <label class="input-lable">Повторите новый пароль</label>
                            <div class="admin__profile-input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xs-12">
                        <a href="/admin.php" class="btn btn-border">Сохранить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once  'layouts/footer.php';

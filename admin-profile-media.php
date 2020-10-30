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
                        Управление фотографиями
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
                <h1>Управление фотографиями</h1>

                <div class="row admin__media">
                    <div class="col-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin__media-thumb avatar">
                            <div class="avatar__title">Главная фотография</div>
                            <img src="/assets/images/page/model/model-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin__media-thumb">
                            <div class="admin__media-btn">
                                <button class="btn btn-accent favorit">Сделать главной</button>
                                <button class="btn del">Удалить</button>
                            </div>
                            <img src="/assets/images/page/model/model-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin__media-thumb">
                            <div class="admin__media-btn">
                                <button class="btn btn-accent favorit">Сделать главной</button>
                                <button class="btn del">Удалить</button>
                            </div>
                            <img src="/assets/images/page/model/model-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin__media-thumb">
                            <div class="admin__media-btn">
                                <button class="btn btn-accent favorit">Сделать главной</button>
                                <button class="btn del">Удалить</button>
                            </div>
                            <img src="/assets/images/page/model/model-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin__media-thumb">
                            <div class="admin__media-btn">
                                <button class="btn btn-accent favorit">Сделать главной</button>
                                <button class="btn del">Удалить</button>
                            </div>
                            <img src="/assets/images/page/model/model-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="admin__media-thumb">
                            <div class="admin__media-btn">
                                <button class="btn btn-accent favorit">Сделать главной</button>
                                <button class="btn del">Удалить</button>
                            </div>
                            <img src="/assets/images/page/model/model.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="admin__media-uploud">
                            <span>Перенесите файлы сюда для загрузки фотографий!</span>
                            <div class="btn btn-border">Выбрать фотографии</div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <h2>Управление видеозаписями</h2>
                        <div class="admin__media-uploud">
                            <span>Перенесите файлы сюда для загрузки фотографий!</span>
                            <div class="btn btn-border">Выбрать фотографии</div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="btn-group">
                            <button class="btn btn-accent">Сохранить</button>
                            <a href="/admin-profile-verify.php" class="btn btn-nofocus">Подтвердить личность</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once  'layouts/footer.php';

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
                        Верификация
                    </li>
                </ul>
            </div>
        </div>
        <div class="admin__nav">
            <div class="container">
                <ul>
                    <li>
                        <a onclick="javascript:history.back();return false;">Вернуться назад</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admin__wrap">
            <div class="container">
                <div class="row admin__verify admin__verify-upload center">
                    <div class="col-12 col-md-12">
                        <h1>Верификация</h1>
                        <p>Для подтверждения анкеты вам необходимо загрузить селфи со своим паспортом (как на примере ниже)</p>
                        <div class="admin__verify-upload-img"><img src="/assets/images/pass_selfie.png" alt=""></div>
                        <a href="/admin-profile-verify-success.php" class="btn btn-border">Выбрать фото</a>
                        <p>Паспорт необходим для подтверждения ваших данных и фотографий.</p>
                        <p>Паспорт хранятся в зашифрованном виде и не передается третьим лицам. Ваш паспорт увидит только администратор сайта.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once  'layouts/footer.php';

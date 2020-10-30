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
                        <a href="/admin.php">Вернуться назад</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="admin__wrap">
            <div class="container">
                <div class="row admin__verify">
                    <div class="col-12 col-md-12">
                        <h1>Публикация анкеты</h1>
                        <p>Ваша анкета успешно опубликована</p>
                    </div>
                    <div class="col-12 col-md-12">
                        <h2>Подтверждение личности</h2>
                        <p>Ваш профиль успешно подтвержден</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once  'layouts/footer.php';

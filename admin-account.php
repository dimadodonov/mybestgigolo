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
                <h1>Мои профили</h1>

                <div class="row admin__profiles">
                    <div class="col-3 col-md-3 col-xs-6">    
                        <div class="admin__profiles-item">
                            <div class="admin__profiles-status active">
                                <span>Активна</span>
                            </div>
                            <div class="admin__profiles-id">
                                id: <span>365</span>
                            </div>
                            <div class="admin__profiles-user">
                                <div class="admin__profiles-user-avatar">
                                    <img src="/assets/images/archive/reviews/model.jpg" alt="">
                                </div>
                                <div class="admin__profiles-user-title">
                                    <div class="admin__profiles-user-name">Nata Lee</div>
                                    <div class="admin__profiles-user-type">Девушки (эскорт)</div>
                                </div>
                            </div>
                            <div class="admin__profiles-btn">
                                <div class="admin__profiles-btn-item update">Обновить</div>
                                <div class="admin__profiles-btn-item delet">Удалить</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-6">    
                        <div class="admin__profiles-item">
                            <div class="admin__profiles-status">
                                <span>не активна</span>
                            </div>
                            <div class="admin__profiles-id">
                                id: <span>365</span>
                            </div>
                            <div class="admin__profiles-user">
                                <div class="admin__profiles-user-avatar">
                                    <img src="/assets/images/archive/reviews/model.jpg" alt="">
                                </div>
                                <div class="admin__profiles-user-title">
                                    <div class="admin__profiles-user-name">Nata Lee</div>
                                    <div class="admin__profiles-user-type">Девушки (эскорт)</div>
                                </div>
                            </div>
                            <div class="admin__profiles-btn">
                                <div class="admin__profiles-btn-item update">Обновить</div>
                                <div class="admin__profiles-btn-item delet">Удалить</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-md-3 col-xs-6">
                        <a href="#" class="admin__profiles-item add">
                            <img src="/assets/files/icons/svg/icon--add.svg" alt="">
                            <span>Создать профиль</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once  'layouts/footer.php';

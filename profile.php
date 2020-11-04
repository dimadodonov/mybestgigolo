<?php
require_once 'layouts/head.php';
require_once 'layouts/header.php';
require_once 'layouts/nav.php'; ?>
<main class="main profile">
    
    <div class="page__wrap">
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
                            <a href="">Эскорт</a>
                        </li>
                        <li>
                            &#8250;
                        </li>
                        <li>
                            <a href="">Москва</a>
                        </li>
                        <li>
                            &#8250;
                        </li>
                        <li class="current">
                            Джон Кортахарена
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="profile__anchors">
        <div class="container">
            <nav>
                <a href="#header">Фото</a>
                <a href="#about">Описание</a>
                <a href="#video">Видео</a>
                <a href="#price">Price</a>
                <a href="#reviews">Отзывы</a>
            </nav>
        </div>
    </div>
    <section class="profile__head">
        <!-- Swiper -->
        <div class="profile-slider swiper-container profile-slider-container">
        
                            
            <div class="profile__bage">
                <div class="profile__bage-item pornstar">
                    <span>PORN STAR</span>
                </div>
                <div class="profile__bage-item new">
                    <span>new</span>
                </div>
                <div class="profile__bage-item top">
                    <span>top</span>
                </div>
                <div class="profile__bage-item vip">
                    <span>vip</span>
                </div>
            </div>

            <div class="profile__meta">
                <div class="profile__realphoto">
                    <div class="profile__realphoto-title">Реальные фото</div>
                    <div class="profile__realphoto-count"><ins>+14</ins>  фотографий</div>
                </div>

                <div class="profile__name">Джон Кортахарена</div>
                <div class="profile__city">Россия (Москва)</div>
            </div> 

            <a href="https://www.youtube.com/watch?v=3CxtK7-XtE0" data-fancybox="gallery-video" class="profile__video-btn">
                <span>СМОТРЕТЬ МОЕ ВИДЕО</span>
                <div class="profile__video-btn-play"></div>
            </a>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/assets/images/page/model/model.jpg" data-fancybox="gallery">
                        <div class="profile-slide">
                            <img src="/assets/images/page/model/model.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/assets/images/page/model/item-6.jpg" data-fancybox="gallery">
                        <div class="profile-slide">
                            <img src="/assets/images/page/model/item-6.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/assets/images/page/model/model-6.jpg" data-fancybox="gallery">
                        <div class="profile-slide">
                            <img src="/assets/images/page/model/model-6.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/assets/images/page/model/model-4.jpg" data-fancybox="gallery">
                        <div class="profile-slide">
                            <img src="/assets/images/page/model/model-4.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/assets/images/page/model/model-1.jpg" data-fancybox="gallery">
                        <div class="profile-slide">
                            <img src="/assets/images/page/model/model-1.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/assets/images/page/model/model-6.jpg" data-fancybox="gallery">
                        <div class="profile-slide">
                            <img src="/assets/images/page/model/model-6.jpg" alt="">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-btn-next"></div>
            <div class="swiper-btn-prev"></div>
        </div>

        <div class="profile__btn">
            <div class="container">
                <div class="profile__btn-row">
                    <div class="profile__btn-col">
                        <div class="btn btn-accent btn-mess jsBtnMessage">Отправить сообщение</div>
                        <div class="btn-favorite jsBtnFavorite"></div>
                    </div>
                    <div class="profile__btn-col">
                        <div class="btn btn-icon btn-reviews">
                            <svg><use xlink:href="/assets/files/sprite.svg#icon--like"/></svg>
                            <span>Оставить отзыв</span>            
                        </div>
                        <div class="btn btn-icon btn-hide">
                            <svg><use xlink:href="/assets/files/sprite.svg#icon--hide"/></svg>
                            <span>Скрыть модель</span>
                        </div>
                    </div>
                    <div class="profile__btn-col">
                        <div class="btn-quote profile--addnote">Добавить заметку</div>
                        <div class="btn-beef">
                            <div class="icon"></div>
                            <span>Пожаловаться</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="profile__quote" style="display: none;">
                <div class="profile__quote-p"></div>
                <div class="profile__quote-info">Видно только вам</div>
            </div>
        </div>
    </section>
    <section class="profile__section">
        <div class="container">
            <div class="profile__section-row justify-content">
                <div class="profile__section-col-2">
                    <div class="profile__price">
                        <div class="profile__price-row">
                            <div class="profile__price-title">Тарифы:</div>
                            <div class="profile__price-item">
                                <span>1 час</span>
                                <strong>400 USD</strong>
                            </div>
                            <div class="profile__price-item">
                                <span>2 часа</span>
                                <strong>500 USD</strong>
                            </div>
                            <div class="profile__price-item">
                                <span>3 часа</span>
                                <strong>570 USD</strong>
                            </div>
                            <div class="profile__price-item">
                                <span>12 часов</span>
                                <strong>950 USD</strong>
                            </div>
                            <div class="profile__price-item">
                                <span>День</span>
                                <strong>1400 USD</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__section-col-2">
                    <div class="profile__usser-data">
                        <div class="profile__usser-data-view">
                            <span>Просмотров</span>
                            <strong>341</strong>
                        </div>
                        <div class="profile__usser-data-reg">
                            <span>Зарегистрирован</span>
                            <strong>17.09.2020</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="profile__info">
        <div class="container">
            <div class="profile__info-row">
                <div class="profile__info-box">
                    <div class="profile__section-title">Данные</div>
                    <div class="profile__info-desc">
                        <ul>
                            <li>
                                <small>Страна</small>
                                <span>Россия</span>
                            </li>
                            <li>
                                <small>Город</small>
                                <span>Симферополь</span>
                            </li>
                            <li>
                                <small>Национальность</small>
                                <span>Русский</span>
                            </li>
                            <li>
                                <small>Возраст</small>
                                <span>27</span>
                            </li>
                            <li>
                                <small>Ориентация</small>
                                <span>Натурал</span>
                            </li>
                            <li>
                                <small>Рост</small>
                                <span>190 см</span>
                            </li>
                            <li>
                                <small>Вес</small>
                                <span>93 кг</span>
                            </li>
                            <li>
                                <small>Волосы</small>
                                <span>Красный</span>
                            </li>
                            <li>
                                <small>Глаза</small>
                                <span>Серые</span>
                            </li>
                            <li>
                                <small>Встречается С</small>
                                <span>Девушки</span>
                            </li>
                            <li>
                                <small>Языки</small>
                                <span>Английский, Русский</span>
                            </li>
                            <li>
                                <small>Готов Поехать</small>
                                <span>Европа, Азия</span>
                            </li>
                            <li>
                                <small>Люблю</small>
                                <span>Щекотка, Волосы На Теле</span>
                            </li>
                            <li>
                                <small>Доступен Для</small>
                                <span>Эскорт, Массаж</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="profile__info-box">
                    <div class="profile__section-title">О Себе</div>
                    <div class="profile__info-desc">
                        <p>Мужественный, уважительный, дружелюбный, сдержанный парень, родом из Чехии. Имеет хорошее воспитание и высшее образование со степенью магистра.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="video" class="profile__section profile__video">
        <div class="container">
            <div class="profile__section-title">Видео</div>
            <div class="profile__video-thumb">
                <a href="https://www.youtube.com/watch?v=_8XrtrYFmtY" data-fancybox="gallery-video">
                    <div class="profile__video-wrap">
                        <div class="profile__video-title">
                            <span>СМОТРЕТЬ МОЕ ВИДЕО</span>
                            <small>Только для участников</small>
                        </div>
                        <div class="profile__video-play"></div>
                    </div>
                    <img src="/assets/images/page/model/video.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="profile__gallery">
        <div class="container">
            <div class="profile__section-title">Фото</div>
            <div class="profile__gallery-row">
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-1.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-1.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-2.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-2.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-3.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-3.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-4.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-4.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-5.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-5.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-6.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-6.jpg" alt="">
                    </a>
                </div>
                <div class="profile__gallery-item">
                    <a href="/assets/images/page/model/model-7.jpg" data-fancybox="gallery">
                        <img src="/assets/images/page/model/min/model-7.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="profile__section profile__reviews reviews">
        <div class="container">
            <div class="profile__section-title">
                <div><ins>5</ins> Отзывов</div>
                <small class="btn-reviews">+ Оставить отзыв</small>
            </div>

            <div class="reviews__row">
                <div class="reviews__item">
                    <div class="reviews__item-avatar">
                        <img src="/assets/images/archive/reviews/avatar.jpg" alt="">
                        <div class="reviews__item-avatar-title">
                            ANNA92
                        </div>
                    </div>
                    <div class="reviews__item-desc">
                        <div class="reviews__item-meta">  
                            <div class="reviews__item-meta-data">08 марта 2020 г.</div>
                            <div class="reviews__item-meta-stars">
                                <ul>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviews__item-content">Габи потрясающий. Сексуально и горячо! Его тело - мечта. Я рекомендую его.</div>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-avatar">
                        <img src="/assets/images/archive/reviews/avatar.jpg" alt="">
                        <div class="reviews__item-avatar-title">
                            Rebbeka
                        </div>
                    </div>
                    <div class="reviews__item-desc">
                        <div class="reviews__item-meta">  
                            <div class="reviews__item-meta-data">08 марта 2020 г.</div>
                            <div class="reviews__item-meta-stars">
                                <ul>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviews__item-content">Gaby - это настоящая сделка с удивительной страстью к изобилию и сервису, о которой нельзя забывать. Обязательно посетите / опыт.</div>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-avatar">
                        <img src="/assets/images/archive/reviews/avatar.jpg" alt="">
                        <div class="reviews__item-avatar-title">
                            Виолетта
                        </div>
                    </div>
                    <div class="reviews__item-desc">
                        <div class="reviews__item-meta">  
                            <div class="reviews__item-meta-data">08 марта 2020 г.</div>
                            <div class="reviews__item-meta-stars">
                                <ul>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                    <li class="on"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviews__item-content">Габи потрясающий. Сексуально и горячо! Его тело - мечта. Я рекомендую его.</div>
                    </div>
                </div>
            </div>

            <div class="btn btn-reviews">Добавить отзыв</div>
        </div>
    </section>

    <section class="profile__section">
        <div class="container">
            <div class="archive__row">
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-realphoto"><span>Реальные фото</span></div>
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item pornstar">
                                    <span>PORN STAR</span>
                                </div>
                                <div class="profile__bage-item new">
                                    <span>new</span>
                                </div>
                                <div class="profile__bage-item top">
                                    <span>top</span>
                                </div>
                                <div class="profile__bage-item vip">
                                    <span>vip</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-2.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item top">
                                    <span>top</span>
                                </div>
                                <div class="profile__bage-item vip">
                                    <span>vip</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-1.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item new">
                                    <span>new</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item pornstar">
                                    <span>PORN STAR</span>
                                </div>
                                <div class="profile__bage-item new">
                                    <span>new</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-4.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item new">
                                    <span>new</span>
                                </div>
                                <div class="profile__bage-item vip">
                                    <span>vip</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-5.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item new">
                                    <span>new</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-6.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item vip">
                                    <span>vip</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-1.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item top">
                                    <span>top</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-2.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="archive__card">
                    <a href="/profile.php">
                        <div class="archive__card-title">
                            <div class="archive__card-title-wrap">
                                <div class="archive__card-name"><span>Джон Кортахарена</span></div>
                                <div class="archive__card-city">
                                    Россия (Москва)
                                </div>
                            </div>
                        </div>
                        <div class="archive__card-thumb">
                            
                            <div class="profile__bage">
                                <div class="profile__bage-item new">
                                    <span>new</span>
                                </div>
                                <div class="profile__bage-item vip">
                                    <span>vip</span>
                                </div>
                            </div>

                            <img src="/assets/images/page/model/model-3.jpg" alt="">
                        </div>
                    </a>
                </div>

                <div class="loader">
                    <div class="loader__icon">
                        <img src="/assets/files/icons/svg/icon--loader.svg" alt="">
                    </div>
                    <span>Загружаю ещё</span>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="popup__one" class="popup">
    <div class="popup__close"></div>
    <div class="popup__wrap">
        <div class="popup__header">
            <div class="popup__header-title">Создание заявки</div>
        </div>
        <div class="popup__content">
            <form action="">
                

                <div class="checkbox">
                    <div class="checkbox__wrap">
                        <input type="checkbox" value="None" id="checkbox_datetime" name="check" />
                        <label for="checkbox_datetime"></label>
                    </div>
                    <span>Я знаю дату встречи</span>
                </div>

                <div class="input__datetime" style="display: none;">
                    <input type="text" id="input__datetime" class="" placeholder="Выберите дату встречи">
                </div>
                
                <div class="checkbox">
                    <div class="checkbox__wrap">
                        <input type="checkbox" value="None" id="checkbox_2" name="check" />
                        <label for="checkbox_2"></label>
                    </div>
                    <span>Хочу, чтобы мне перезвонил менеджер</span>
                </div>

                <div class="textarea">
                    <div class="field__lang">
                        <div class="field__lang-item en">
                            <img src="/assets/files/icons/svg/icon--flag-en.svg" alt="">
                        </div>
                        <div class="field__lang-item rus active">
                            <img src="/assets/files/icons/svg/icon--flag-russia.svg" alt="">
                        </div>
                    </div>
                    <textarea placeholder="Комментарий к заявке. Уточните ваш бюджет, дополнительные пожелания и т.д."></textarea>
                </div>
            </form>
        </div>
        <div class="popup__footer">
            <button class="btn btn-accent">Отправить</button>
        </div>
    </div>
</div>

<div id="popup__reviews" class="popup">
    <div class="popup__close"></div>
    <div class="popup__wrap">
        <div class="popup__header">
            <div class="popup__header-title">Оставить отзыв для Nata Lee</div>
        </div>
        <div class="popup__content">
            <form action="">
                <div class="textarea">
                    <div class="field__lang">
                        <div class="field__lang-item en">
                            <img src="/assets/files/icons/svg/icon--flag-en.svg" alt="">
                        </div>
                        <div class="field__lang-item rus active">
                            <img src="/assets/files/icons/svg/icon--flag-russia.svg" alt="">
                        </div>
                    </div>
                    <textarea placeholder="Напишите свой отзыв о Nata Lee">Я могу сказать вам, что Таня не только самая красивая молодая женщина на этой планете, но у нее есть личность, за которую можно умереть, и замечательный добрый человек, который будет рядом. Я бы проводил время с ней снова и снова. Спасибо за то, что вы были замечательным компаньоном и за то, что подарили мне такое прекрасное время. Пока мы не встретимся снова х</textarea>
                </div>
                <div class="rating">
                    <div class="rating__wrap">
                        <span>Добавить оценку модели</span>
                        <div class="review--content-user-desc-rating">
                            <ul>
                                <li class="stars_one" data-rating="1"></li>
                                <li class="stars_two" data-rating="2"></li>
                                <li class="stars_tree" data-rating="3"></li>
                                <li class="stars_four" data-rating="4"></li>
                                <li class="stars_five" data-rating="5"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="popup__footer">
            <button class="btn btn-accent">Оправить отзыв</button>
        </div>
    </div>
</div>

<div id="popup__note" class="popup">
    <div class="popup__close"></div>
    <div class="popup__wrap">
        <div class="popup__header">
            <div class="popup__header-title">Оставьте заметку к модели
                <small>Заметка видна только вам</small>
            </div>
        </div>
        <div class="popup__content">
            <form action="">
                <div class="textarea">
                    <div class="field__lang">
                        <div class="field__lang-item en">
                            <img src="/assets/files/icons/svg/icon--flag-en.svg" alt="">
                        </div>
                        <div class="field__lang-item rus active">
                            <img src="/assets/files/icons/svg/icon--flag-russia.svg" alt="">
                        </div>
                    </div>
                    <textarea placeholder="Сохраните для себя информацию о модели"></textarea>
                </div>
            </form>
        </div>
        <div class="popup__footer">
            <button class="btn btn-accent jsSaveNote">Сохранить</button>
            <div class="btn btn-icon btn-del jsClearNote">
                <svg><use xlink:href="/assets/files/sprite.svg#icon--close-del"/></svg>
                Удалить
            </div>
        </div>
    </div>
</div>

<div id="popup__beef" class="popup">
    <div class="popup__close"></div>
    <div class="popup__wrap">
        <div class="popup__header">
            <div class="popup__header-title">Пожаловаться</div>
        </div>
        <div class="popup__content">
            <form action="">
                <div class="textarea">
                    <div class="field__lang">
                        <div class="field__lang-item en">
                            <img src="/assets/files/icons/svg/icon--flag-en.svg" alt="">
                        </div>
                        <div class="field__lang-item rus active">
                            <img src="/assets/files/icons/svg/icon--flag-russia.svg" alt="">
                        </div>
                    </div>
                    <textarea placeholder="Опишите ваше недовольство или жалобу">Это качество сегодня особенно востребовано. Джентльменов стало меньше, поэтому тот, кто соблюдает правила этикета, имее|</textarea>
                </div>
            </form>
        </div>
        <div class="popup__footer">
            <button class="btn btn-accent">Отправить</button>
        </div>
    </div>
</div>

<div id="popup__share" class="popup">
    <div class="popup__close"></div>
    <div class="popup__wrap">
        <div class="popup__header">
            <div class="popup__header-title">Поделиться</div>
        </div>
        <div class="popup__content">
            <div class="share share-popup">
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-facebook.svg" alt="">
                    </a>
                </div>
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-twitter.svg" alt="">
                    </a>
                </div>
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-skype.svg" alt="">
                    </a>
                </div>
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-telegram.svg" alt="">
                    </a>
                </div>
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-mess.svg" alt="">
                    </a>
                </div>
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-whatsapp.svg" alt="">
                    </a>
                </div>
                <div class="share-item">
                    <a href="#">
                        <img src="/assets/files/icons/svg/icon--social-viber.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup__overlay"></div>

<?php
require_once  'layouts/footer.php';

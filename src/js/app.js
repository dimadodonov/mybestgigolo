/**
 * App.js
 *
 * @author Dima Dodonov <dimadodonov@icloud.com>
 */

//Global Vars
const $window = $(window);
const $document = $(document);
const $html = $('html');
const $wrapper = $('.wrapper');
const $header = $('.header');
const $main = $('.main');
const $overlay = $('.js-overlay');

const App = {
    init() {
        // console.log('Site init');
        this.auth();
        this.admin();
        this.header();
        this.menu();
        this.scrollbar();
        this.fancybox();
        this.filter();
        this.slider();
        this.profile();
        this.archive();
        this.premium();
        this.popup();
        this.reviews();
        this.datetimepicker();
        this.attention();
        this.Components.init();
    },
    auth() {
        $document.on('click', '.page__auth-form-box-item', function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        });

        $document.on('click', '.page__auth-form-next .btn', function () {
            const dataBox = $(this).attr('data-box-next');

            $('#box-' + dataBox)
                .siblings('.page__auth-form-box')
                .hide();
            $('#box-' + dataBox).show();
        });
    },
    admin() {
        $document.on('click', '.admin__profile-item-type span', function () {
            if ($('.admin__profile-item-type span').hasClass('on')) {
                $('.admin__profile-item-type span').removeClass('on');
            }
            if ($('.admin__profile-item-type-wrap').hasClass('on')) {
                $('.admin__profile-item-type-wrap')
                    .find('.admin__profile-item-type')
                    .removeClass('on');
            }
            $(this)
                .toggleClass('on')
                .siblings('.admin__profile-item-type-wrap')
                .toggleClass('on');
        });
        $document.on(
            'click',
            '.admin__profile-item-type-wrap.on .admin__profile-item-type-option',
            function () {
                const itemTypeVal = $(this).attr('data-item-value');
                $(this).parent().siblings('span').text(itemTypeVal);
                $('.admin__profile-item-type-wrap').removeClass('on');
                $('.admin__profile-item-type span').removeClass('on');
            }
        );
    },
    header() {
        $('a[href^="#"]').click(function () {
            var offset = 70;
            $('html, body').animate(
                {
                    scrollTop: $($(this).attr('href')).offset().top - offset,
                },
                {
                    duration: 500,
                    easing: 'swing',
                }
            );
            return false;
        });

        var scrollPos = 0;

        $window.scroll(function () {
            var $header = $('.header').height();
            var sT = $(this).scrollTop();

            if (sT > $header) {
                $('.profile__anchors').addClass('on');
            } else {
                $('.profile__anchors').removeClass('on');
            }

            var $h = $('.header').height();
            var $pw = $('.profile__wrap').height();

            if (sT > $h + $pw) {
                $('.profile__sendme').addClass('on');
            } else {
                $('.profile__sendme').removeClass('on');
            }

            scrollPos = sT;
        });
    },
    menu() {
        $('.mob-menu').on('click', function () {
            $('.hamburger__menu').toggleClass('animate');
            $('.nav').toggle();
            $('.header__wrap').toggleClass('on');
        });
    },
    scrollbar() {
        (function ($) {
            $(window).on('load', function () {
                $('.mCustomScrollbar').mCustomScrollbar({
                    autoHideScrollbar: true,
                });
            });
        })(jQuery);
    },
    fancybox() {
        $('[data-fancybox]').fancybox({
            clickOutside: 'close',
            buttons: [
                //"zoom",
                //"share",
                //"slideShow",
                //"fullScreen",
                //"download",
                //"thumbs",
                'close',
            ],
            protect: true, // РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ РЅРµ РјРѕР¶РµС‚ СЃРѕС…СЂР°РЅРёС‚СЊ РёР·РѕР±СЂР°Р¶РµРЅРёРµ
            // toolbar  : false // СѓР±СЂР°Р»Рё РїР°РЅРµР»СЊ РёРЅСЃС‚СЂСѓРјРµРЅС‚РѕРІ
            mobile: {
                clickContent: 'close',
                clickSlide: 'close',
            },
        });
    },
    filter() {
        $('.filter__show').on('click', function () {
            $('.filter').show();
        });

        $('.filter__close').on('click', function () {
            $('.filter').hide();
        });

        $('.select-text').on('click', function () {
            $(this)
                .parent('.filter__item.select')
                .siblings()
                .removeClass('active');
            $(this).parent('.filter__item.select').toggleClass('active');
        });

        $(document).on('click', function (e) {
            var div = $('.filter__item.select'); // тут указываем ID элемента
            if (
                !div.is(e.target) && // если клик был не по нашему блоку
                div.has(e.target).length === 0
            ) {
                $('.filter__item.select').removeClass('active');
            }
        });
    },
    slider() {
        var swiper = new Swiper('.page-news-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-btn-next',
                prevEl: '.swiper-btn-prev',
            },
        });

        var galleryThumbs = new Swiper('.gallery-thumbs', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            centeredSlides: true,
            loop: true,
        });
        var galleryTop = new Swiper('#profile__gallery', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: '.swiper-btn-next',
                prevEl: '.swiper-btn-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });
    },
    profile() {
        $('#jsFavoriteBtn').on('click', function () {
            $(this).toggleClass('active');
        });

        $('.btn-hide').on('click', function () {
            $('.btn-hide span').text('Модель скрыта');
        });
    },
    archive() {
        if ($(window).width() <= 1040) {
            $(document).on('click', '.view__choice-item', function () {
                const viewColumn = $(this).attr('data-column');
                localStorage.setItem('viewcolumn', viewColumn);

                $('.view').hide();

                if ($(this).hasClass('js_view_two')) {
                    $('.archive__card').addClass('twocollumn');
                } else {
                    $('.archive__card').removeClass('twocollumn');
                }

                if ($(this).hasClass('js_view_one')) {
                    $('.archive__card').removeClass('twocollumn');
                } else {
                    $('.archive__card').addClass('twocollumn');
                }

                if ($('.view__choice-item').hasClass('active')) {
                    $('.view__choice-item').removeClass('active');
                }

                $(this).addClass('active');
            });

            if (localStorage.getItem('viewcolumn') !== null) {
                if (localStorage.getItem('viewcolumn') == '2') {
                    $('.archive__card').addClass('twocollumn');
                    $('.js_view_two').addClass('active');
                    $('.js_view_one').removeClass('active');
                } else {
                    $('.js_view_one').addClass('active');
                    $('.js_view_two').removeClass('active');
                }
            } else {
                $('.view').show();
            }
        }
    },
    premium() {
        $('.pricing__switch-item').on('click', function () {
            if ($('.pricing__switch-item').hasClass('pricing__switch-active')) {
                $('.pricing__switch-item').removeClass(
                    'pricing__switch-active'
                );
            }
            $(this).addClass('pricing__switch-active');

            var position = $(this).parent().position();
            var width = $(this).parent().width();
            $('.pricing__switch-overlay').css({
                opacity: 1,
                left: +position.left,
                width: width,
            });
        });

        var currentWidth = $('.pricing__switch-active').parent('li').width();
        var current = $('.pricing__switch-active').position();
        $('.pricing__switch-overlay').css({
            left: +current.left,
            width: currentWidth,
        });
    },
    popup() {
        $('#city').on('click', function () {
            $('#city.country').addClass('on').show();
            $('body').addClass('is-fixed');
        });

        $('.country__close').on('click', function () {
            $('.country').removeClass('on').hide();
            $('body').removeClass('is-fixed');
        });

        $('.country__item').on('click', function () {
            $('.country').removeClass('on').hide();
            $('body').removeClass('is-fixed');
        });

        $('.edit-country').on('click', function () {
            $('#city.country').removeClass('on').hide();
            $('#country.country').addClass('on').show();
        });

        $('#country').on('click', function () {
            $('#country.country').addClass('on').show();
            $('body').addClass('is-fixed');
        });

        $('.country__close').on('click', function () {
            $('.country').removeClass('on').hide();
            $('body').removeClass('is-fixed');
        });

        $('.country__item').on('click', function () {
            $('.country').removeClass('on').hide();
            $('body').removeClass('is-fixed');
        });

        $('.header__search').on('click', function () {
            $('.search').addClass('on').show();
            $('body').addClass('is-fixed');
        });
        $('.search__close').on('click', function () {
            $('.search').removeClass('on').hide();
            $('body').removeClass('is-fixed');
        });

        $('.btn-mess').on('click', function () {
            $('#popup__one').addClass('on').show();
            $('.popup__overlay').addClass('on');
        });
        $('.btn-reviews').on('click', function () {
            $('#popup__reviews').addClass('on').show();
            $('.popup__overlay').addClass('on');
        });
        $('.profile--addreview').on('click', function () {
            $('#popup__reviews').addClass('on').show();
            $('.popup__overlay').addClass('on');
        });
        $('.profile--addnote').on('click', function () {
            $('#popup__note').addClass('on').show();
            $('.popup__overlay').addClass('on');
        });
        $('.btn-beef').on('click', function () {
            $('#popup__beef').addClass('on').show();
            $('.popup__overlay').addClass('on');
        });
        $('.btn-share').on('click', function () {
            $('#popup__share').addClass('on').show();
            $('.popup__overlay').addClass('on');
        });

        $('.popup__close').on('click', function () {
            $('.popup').removeClass('on').hide();
            $('.popup__overlay').removeClass('on');
        });
        $('.popup__overlay').on('click', function () {
            $(this).toggleClass('on');
            $('.popup').removeClass('on').hide();
        });

        function model_note() {
            if (localStorage.getItem('model_note') !== null) {
                $('.profile--addnote').addClass('on');
                $('.profile--note').show();
                $('#popup__note textarea').val(
                    localStorage.getItem('model_note')
                );
                $('.profile--note-p').text(localStorage.getItem('model_note'));
            }
        }

        $('.jsSaveNote').click(function () {
            const popup__note = $('#popup__note textarea').val();
            localStorage.setItem('model_note', popup__note);

            $('.profile--addnote').addClass('on');
            $('.popup__overlay').toggleClass('on');
            $('.popup').removeClass('on').hide();
            $('.profile--note').show();

            model_note();
        });

        $('.jsClearNote').click(function () {
            const popup__note = $('#popup__note textarea').val();
            localStorage.removeItem('model_note');

            $('#popup__note textarea').val('').empty().change();

            $('.profile--addnote').removeClass('on');
            $('.profile--note').hide();
            $('.profile--note-p').text('');
            $('.popup__overlay').toggleClass('on');
            $('.popup').removeClass('on').hide();
        });

        model_note();
    },
    reviews() {
        if ($('.rating')) {
            $('.stars_one').mouseover(function () {
                $(this).addClass('on');
            });
            $('.stars_one').mouseout(function () {
                $(this).removeClass('on');
            });

            $('.stars_two').mouseover(function () {
                $('.stars_one').addClass('on');
                $(this).addClass('on');
            });
            $('.stars_two').mouseout(function () {
                $('.stars_one').removeClass('on');
                $(this).removeClass('on');
            });

            $('.stars_tree').mouseover(function () {
                $('.stars_one').addClass('on');
                $('.stars_two').addClass('on');
                $(this).addClass('on');
            });
            $('.stars_tree').mouseout(function () {
                $('.stars_one').removeClass('on');
                $('.stars_two').removeClass('on');
                $(this).removeClass('on');
            });

            $('.stars_four').mouseover(function () {
                $('.stars_one').addClass('on');
                $('.stars_two').addClass('on');
                $('.stars_tree').addClass('on');
                $(this).addClass('on');
            });
            $('.stars_four').mouseout(function () {
                $('.stars_one').removeClass('on');
                $('.stars_two').removeClass('on');
                $('.stars_tree').removeClass('on');
                $(this).removeClass('on');
            });

            $('.stars_five').mouseover(function () {
                $('.stars_one').addClass('on');
                $('.stars_two').addClass('on');
                $('.stars_tree').addClass('on');
                $('.stars_four').addClass('on');
                $(this).addClass('on');
            });
            $('.stars_five').mouseout(function () {
                $('.stars_one').removeClass('on');
                $('.stars_two').removeClass('on');
                $('.stars_tree').removeClass('on');
                $('.stars_four').removeClass('on');
                $(this).removeClass('on');
            });

            $('.stars_one').on('click', function () {
                $('#reviews_stars').val('1');
                $(this).addClass('active');
                $('.stars_two').removeClass('active');
                $('.stars_tree').removeClass('active');
                $('.stars_four').removeClass('active');
                $('.stars_five').removeClass('active');
            });

            $('.stars_two').on('click', function () {
                $('#reviews_stars').val('2');
                $(this).addClass('active');
                $('.stars_one').addClass('active');
                $('.stars_tree').removeClass('active');
                $('.stars_four').removeClass('active');
                $('.stars_five').removeClass('active');
            });

            $('.stars_tree').on('click', function () {
                $('#reviews_stars').val('3');
                $(this).addClass('active');
                $('.stars_one').addClass('active');
                $('.stars_two').addClass('active');
                $('.stars_four').removeClass('active');
                $('.stars_five').removeClass('active');
            });

            $('.stars_four').on('click', function () {
                $('#reviews_stars').val('4');
                $(this).addClass('active');
                $('.stars_one').addClass('active');
                $('.stars_two').addClass('active');
                $('.stars_tree').addClass('active');
                $('.stars_five').removeClass('active');
            });

            $('.stars_five').on('click', function () {
                $('#reviews_stars').val('5');
                $(this).addClass('active');
                $('.stars_one').addClass('active');
                $('.stars_two').addClass('active');
                $('.stars_tree').addClass('active');
                $('.stars_four').addClass('active');
            });
        }
    },
    datetimepicker() {
        var checkbox = $('#checkbox_datetime');

        checkbox.click(function () {
            if ($(this).is(':checked')) {
                $('.input__datetime').show();
            } else {
            }
        });

        $('#input__datetime').flatpickr({
            // enableTime: true,
            dateFormat: 'd.m.Y',
            locale: 'ru',
            // disableMobile: 'true',
        });
    },
    attention() {
        if (localStorage.getItem('attention') !== null) {
            const attention = localStorage.getItem('attention');
            $('.attention').hide();
            $('body').removeClass('is-fixed');
        } else {
            $('.attention').show();
            $('body').addClass('is-fixed');
        }
        $('.attention_yes').click(function () {
            localStorage.setItem('attention', 'yes');
            $('.attention').hide();
            $('body').removeClass('is-fixed');
        });
    },
};

App.define = function (namespace) {
    var parts = namespace.split('.'),
        parent = App,
        i;

    //Убрать начальный префикс если это являетсся глобальной переменной
    if (parts[0] == 'App') {
        parts = parts.slice(1);
    }

    //Если в глобальном объекте нет свойства - создать его.
    for (var i = 0; i < parts.length; i++) {
        if (typeof parent[parts[i]] == 'undefined') {
            parent[parts[i]] = {};
        }
        parent = parent[parts[i]];
    }
    return parent;
};

//=include partials/Components.js

$(function () {
    App.init();
    svg4everybody();
});

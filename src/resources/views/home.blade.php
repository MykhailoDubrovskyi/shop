<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenEnergy</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz@0,14..32;1,14..32&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div class="top-line ">
    <div class="container">
        <div class="top-line-main flex-center">
            <div class="select-city flex-center">
                <span class="select-city__text">Івано-Франківськ</span>
                <div class="select-city__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="38 0 128 90"
                         id="arrow-down">
                        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"
                              d="M43 53L58.6765 68.6765C61.8007 71.8007 66.866 71.8007 69.9902 68.6765L85.6667 53"></path>
                    </svg>
                </div>
            </div>
            <div class="pick-up-point flex-center">
                <div class="pick-up-point__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 48 48"
                         id="geo-location">
                        <path fill="#333" fill-rule="evenodd"
                              d="M15.5168 11.5352C17.7677 9.27094 20.8193 8 24 8C27.1807 8 30.2323 9.27094 32.4832 11.5352C34.7343 13.7996 36 16.872 36 20.0769C36 25.6035 32.9361 30.6047 29.7435 34.298C28.1592 36.1307 26.5723 37.6075 25.3814 38.6258C24.8154 39.1097 24.3405 39.4887 24 39.7517C23.6595 39.4887 23.1846 39.1097 22.6186 38.6258C21.4277 37.6075 19.8408 36.1307 18.2565 34.298C15.0639 30.6047 12 25.6035 12 20.0769C12 16.872 13.2657 13.7996 15.5168 11.5352ZM23.4236 41.8172C23.424 41.8174 23.4243 41.8176 24 41C24.5757 41.8176 24.576 41.8174 24.5764 41.8172C24.2311 42.0603 23.7689 42.0603 23.4236 41.8172ZM23.4236 41.8172L24 41L24.5764 41.8172L24.58 41.8146L24.5891 41.8082L24.6209 41.7854C24.6482 41.7658 24.6875 41.7374 24.7379 41.7004C24.8387 41.6263 24.9842 41.5178 25.1681 41.3765C25.5357 41.0938 26.0571 40.6794 26.6811 40.1459C27.9277 39.08 29.5908 37.5328 31.2565 35.6059C34.5639 31.7799 38 26.3195 38 20.0769C38 16.3454 36.5264 12.7655 33.9016 10.1251C31.2765 7.48454 27.7149 6 24 6C20.2851 6 16.7235 7.48454 14.0984 10.1251C11.4736 12.7655 10 16.3454 10 20.0769C10 26.3195 13.4361 31.7799 16.7435 35.6059C18.4092 37.5328 20.0723 39.08 21.3189 40.1459C21.9429 40.6794 22.4643 41.0938 22.8319 41.3765C23.0158 41.5178 23.1613 41.6263 23.2621 41.7004C23.3125 41.7374 23.3518 41.7658 23.3791 41.7854L23.4109 41.8082L23.42 41.8146L23.4236 41.8172ZM20 20C20 17.7909 21.7909 16 24 16C26.2091 16 28 17.7909 28 20C28 22.2091 26.2091 24 24 24C21.7909 24 20 22.2091 20 20ZM24 14C20.6863 14 18 16.6863 18 20C18 23.3137 20.6863 26 24 26C27.3137 26 30 23.3137 30 20C30 16.6863 27.3137 14 24 14Z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="pick-up-point__text">Адреса</span>

            </div>
            <div class="top-line-time flex-center"><span
                    class="top-line-time__text">Пн-пт  <span>з 10.00 до 19.00</span>
                </span>
            </div>
        </div>
        <div class="user-account flex-center">
            <div class="user-account-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="48" height="48" viewBox="0 0 32 16"
                     id="user">
  <path fill="#231f20"
        d="M7.763 2A6.77 6.77 0 0 0 1 8.763c0 1.807.703 3.505 1.98 4.782a6.718 6.718 0 0 0 4.783 1.981 6.77 6.77 0 0 0 6.763-6.763A6.77 6.77 0 0 0 7.763 2ZM3.675 13.501a5.094 5.094 0 0 1 3.958-1.989c.024.001.047.007.071.007h.023c.022 0 .042-.006.064-.007a5.087 5.087 0 0 1 3.992 2.046 6.226 6.226 0 0 1-4.02 1.468 6.212 6.212 0 0 1-4.088-1.525zm4.032-2.494c-.025 0-.049.004-.074.005a2.243 2.243 0 0 1-2.167-2.255 2.246 2.246 0 0 1 2.262-2.238 2.246 2.246 0 0 1 2.238 2.262c0 1.212-.97 2.197-2.174 2.232-.028-.001-.056-.006-.085-.006Zm4.447 2.215a5.594 5.594 0 0 0-3.116-2.052 2.749 2.749 0 0 0 1.428-2.412A2.747 2.747 0 0 0 7.704 6.02a2.747 2.747 0 0 0-2.738 2.762 2.73 2.73 0 0 0 1.422 2.386 5.602 5.602 0 0 0-3.081 1.995 6.22 6.22 0 0 1-1.806-4.398 6.27 6.27 0 0 1 6.263-6.263 6.27 6.27 0 0 1 6.263 6.263 6.247 6.247 0 0 1-1.873 4.457z"></path>
</svg>
            </div>
            <span class="user-account-text">Особистий кабінет</span>


        </div>
    </div>
</div>
<div class="middle-line">
    <div class="container flex-center">
        <a class="middle-line-logo" href="/">
            <img src="{{ asset('images\logo.png')}}" width="128" height="64" alt="">
        </a>
        <form class="fast-search">
            <div class="fast-search__input">
                <input type="text" name="v" placeholder="Пошук...">
                <div class="fast-search__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" id="search">
                        <path
                            d="M6 0C2.692 0 0 2.692 0 6s2.692 6 6 6a5.97 5.97 0 0 0 3.871-1.422l5.27 5.27a.5.5 0 1 0 .707-.707l-5.27-5.27A5.97 5.97 0 0 0 12 6c0-3.308-2.692-6-6-6zm0 1c2.767 0 5 2.233 5 5s-2.233 5-5 5-5-2.233-5-5 2.233-5 5-5z"
                            style="color:#000;font-style:normal;font-variant:normal;font-weight:400;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;baseline-shift:baseline;text-anchor:start;white-space:normal;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000;solid-opacity:1;fill:#000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"></path>
                    </svg>
                </div>
            </div>
            <span class="fast-search__example">Наприклад: Сонячні панелі, зарядки для автомобілів... </span>
        </form>
        <div class="middle-line-callback">
            <a href="tel:+380986431320" class="middle-line-callback__phone">+380986431320</a>
            <a href="" class="middle-line-callback__call">Замовити дзвінок</a>
        </div>
        <div class="middle-line-action flex-center">
            <div class="middle-line-action__compare">
                <div class="middle-line-action__compare_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="compare">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path
                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                    </svg>

                </div>
            </div>
            <div class="middle-line-action__like">
                <div class="middle-line-action__like_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="card">
                        <path
                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                    </svg>

                </div>
            </div>
            <div class="middle-line-action__cart">
                <div class="middle-line-action__cart_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2" id="shopping-cart">
                        <path
                            d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                        <circle cx="8.5" cy="19.5" r="1.5"></circle>
                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    </svg>
                </div>
                <div class="middle-line-action__cart_text">Корзина</div>
            </div>
        </div>
    </div>
</div>
<nav class="main-menu">
    <div class="container">
        <div class="list-cat">
            <div class="list-cat__main flex-center">
                <div class="list-cat__main_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none" viewBox="0 0 24 25"
                         id="ascending">
                        <path stroke="#000" stroke-linejoin="round" stroke-width="2"
                              d="M12 19.5648H23M12 12.5648H20M12 5.56476H17M6 3.56476V20.0648M2 16.5648L6 20.5648L10 16.5648"></path>
                    </svg>
                </div>
                <span class="list-cat__main_text">Категорії</span>
            </div>

            <div class="list-cat__drop">
                <ul class="list-cat__list">
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Сонячні системи</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Вітряки</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Електрозарядні станції</a>
                    </li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Генератори</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Газові грилі</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Вугільні грилі</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Електричні грилі</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Портативні грилі</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Керамічні грилі</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Пелетні грилі</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Аксесуари для грилів</a></li>
                </ul>
            </div>
        </div>
        <ul class="main-menu__list ">
            <li class="main-menu__item"><a href="" class="main-menu__link">Акції</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Про нас</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Оплата</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Виробники</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Монтаж</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Доставка</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Контакти</a></li>
        </ul>
    </div>
</nav>

<header class="header">

    <div class="swiper header-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide header-carousel__slide"
                 style="background-image: url('{{asset('images/banner1.jpg')}}')">
                <div class="container">
                    <h3 class="header-carousel__title">Бери більше<br>Плати менше</h3>
                    <div class="header-carousel__desc">
                        <p>іфвіфвіфвіфвфівфівфівфівф</p>
                    </div>
                    <a href="Детальніше"></a>
                </div>
            </div>
            <div class="swiper-slide header-carousel__slide"
                 style="background-image: url('{{asset('images/banner2.webp')}}')">>
                <div class="container">
                    <h3 class="header-carousel__title">ліжко<br>там</h3>
                    <div class="header-carousel__desc">
                        <p>іфвіфвіфвіфвфівфівфівфівф</p>
                    </div>
                    <a href="Детальніше"></a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</header>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>

</body>
</html>

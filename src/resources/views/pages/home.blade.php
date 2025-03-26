@extends('layouts.main')

@section('content')
    <header class="header">
        <div class="swiper header-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide header-carousel__slide"
                     style="background-image: url('{{asset('images/banner1.jpg')}}')">
                    <div class="container">
                        <h3 class="header-carousel__title">Потрібна сонячна станція!<br>Тоді ти прийшов за адресом
                        </h3>
                        <div class="header-carousel__desc">
                            <p>ну ладно</p>
                        </div>
                        <a href="#" class="btn-border">Детальніше</a>

                    </div>
                </div>
                <div class="swiper-slide header-carousel__slide"
                     style="background-image: url('{{asset('images/banner3.jpg')}}')">
                    <div class="container">
                        <h3 class="header-carousel__title">Потрібна сонячна станція!<br>Тоді ти прийшов за адресом
                        </h3>
                        <div class="header-carousel__desc">
                            <p>ну ладно</p>
                        </div>
                        <a href="#" class="btn-border">Детальніше</a>

                    </div>
                </div>
                <div class="swiper-slide header-carousel__slide"
                     style="background-image: url('{{asset('images/banner2.jpg')}}')">
                    <div class="container">
                        <h3 class="header-carousel__title">Потрібна сонячна станція!<br>Тоді ти прийшов за адресом
                        </h3>
                        <div class="header-carousel__desc">
                            <p>ну ладно</p>
                        </div>
                        <a href="#" class="btn-border">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="header-carousel-pagination-wrap">
                <div class="container">
                    <div class="header-carousel-pagination"></div>
                </div>
            </div>

        </div>
    </header>
    <section class="categories">
        <div class="container">
            <h2 class="categories__title">Більше 10 000 позицій чекають саме на тебе</h2>
            <span class="categories__desc">GreenEnergy.ua - Інтернет магазин бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла</span>
            <div class="categories__items">
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="111" height="111"
                             viewBox="0 0 32 32" xml:space="preserve">
<path id="solar--panel_1_" d="M7,13.36c-0.199,0-0.36-0.161-0.36-0.36v-1.5c0-0.199,0.161-0.36,0.36-0.36s0.36,0.161,0.36,0.36V13
	C7.36,13.199,7.199,13.36,7,13.36z M11.243,11.603c-0.092,0-0.184-0.035-0.254-0.105l-1.061-1.061c-0.141-0.141-0.141-0.368,0-0.509
	s0.368-0.141,0.509,0l1.061,1.061c0.141,0.141,0.141,0.368,0,0.509C11.427,11.568,11.335,11.603,11.243,11.603z M2.757,11.603
	c-0.092,0-0.184-0.035-0.254-0.105c-0.141-0.141-0.141-0.368,0-0.509l1.061-1.061c0.141-0.141,0.368-0.141,0.509,0
	s0.141,0.368,0,0.509l-1.061,1.061C2.941,11.568,2.849,11.603,2.757,11.603z M7,10.36c-1.853,0-3.36-1.507-3.36-3.36
	S5.147,3.64,7,3.64S10.36,5.147,10.36,7S8.853,10.36,7,10.36z M7,4.36C5.544,4.36,4.36,5.544,4.36,7S5.544,9.64,7,9.64
	S9.64,8.456,9.64,7S8.456,4.36,7,4.36z M13,7.36h-1.5c-0.199,0-0.36-0.161-0.36-0.36s0.161-0.36,0.36-0.36H13
	c0.199,0,0.36,0.161,0.36,0.36S13.199,7.36,13,7.36z M2.5,7.36H1C0.801,7.36,0.64,7.199,0.64,7S0.801,6.64,1,6.64h1.5
	c0.199,0,0.36,0.161,0.36,0.36S2.699,7.36,2.5,7.36z M10.182,4.178c-0.092,0-0.184-0.035-0.254-0.105
	c-0.141-0.141-0.141-0.368,0-0.509l1.061-1.061c0.141-0.141,0.368-0.141,0.509,0s0.141,0.368,0,0.509l-1.061,1.061
	C10.366,4.143,10.274,4.178,10.182,4.178z M3.818,4.178c-0.092,0-0.184-0.035-0.254-0.105L2.502,3.011
	c-0.141-0.141-0.141-0.368,0-0.509s0.368-0.141,0.509,0l1.061,1.061c0.141,0.141,0.141,0.368,0,0.509
	C4.002,4.143,3.91,4.178,3.818,4.178z M7,2.86c-0.199,0-0.36-0.161-0.36-0.36V1c0-0.199,0.161-0.36,0.36-0.36S7.36,0.801,7.36,1v1.5
	C7.36,2.699,7.199,2.86,7,2.86z M31,31.36H1v-0.72h15.64v-3.28H10c-0.199,0-0.36-0.161-0.36-0.36V15c0-0.199,0.161-0.36,0.36-0.36
	h18c0.199,0,0.36,0.161,0.36,0.36v12c0,0.199-0.161,0.36-0.36,0.36h-6.64v3.279H31V31.36z M19.36,30.64h1.279v-3.28H19.36V30.64z
	 M17.36,30.64h1.279v-3.28H17.36V30.64z M22.36,26.64h5.279v-5.28H22.36V26.64z M16.36,26.64h5.28v-5.28h-5.28V26.64z M10.36,26.64
	h5.28v-5.28h-5.28C10.36,21.36,10.36,26.64,10.36,26.64z M22.36,20.64h5.279v-5.28H22.36V20.64z M16.36,20.64h5.28v-5.28h-5.28
	V20.64z M10.36,20.64h5.28v-5.28h-5.28C10.36,15.36,10.36,20.64,10.36,20.64z"/>
                            <rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32"/>
</svg>
                        <h4 class="categories__item_title">Сонячні панелі</h4>
                        <div class="categories__item_count">20</div>
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="111" height="111" viewBox="0 0 32 32" xml:space="preserve">
<style type="text/css">
    .sharpcorners_een {
        fill: #111918;
    }

    .st0 {
        fill: #111918;
    }
</style>
                            <path class="sharpcorners_een" d="M26.811,12C26.052,7.869,22.988,4.548,19,3.419V1h-6v2.419C9.012,4.548,5.948,7.869,5.189,12H4v1
    h1.05H26.95H28v-1H26.811z M18,3.186C17.351,3.066,16.684,3,16,3s-1.351,0.066-2,0.186V2h4V3.186z M11.884,22.193L10.573,27H9v1
	l1.027,1l-0.545,2h1.036l0.545-2h9.873l0.545,2h1.036l-0.545-2L23,28v-1h-1.573l-1.311-4.807c3.433-1.39,6.006-4.458,6.693-8.193
	H5.19C5.878,17.735,8.451,20.803,11.884,22.193z M16,23c1.104,0,2.166-0.171,3.171-0.473L20.391,27h-8.782l1.22-4.473
	C13.834,22.829,14.896,23,16,23z"/>
</svg>
                        <h4 class="categories__item_title">Сонячні панелі</h4>
                        <div class="categories__item_count">20</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="adv">
        <div class="container">
            <div class="adv__item">
                <div class="adv__item_icon">

                </div>
                <span>Вигідні акції, чесні та прозорі знижки</span>
            </div>
            <div class="adv__item">
                <div class="adv__item_icon">

                </div>
                <span>Сертифікована продукція</span>
            </div>
            <div class="adv__item">
                <div class="adv__item_icon">

                </div>
                <span>Широкий асортимент товару</span>
            </div>
            <div class="adv__item">
                <div class="adv__item_icon">
                    <svg fill="#000000" width="80px" height="80px" viewBox="0 0 60 30"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.48 12c-.13.004-.255.058-.347.152l-2.638 2.63-1.625-1.62c-.455-.474-1.19.258-.715.712l1.983 1.978c.197.197.517.197.715 0l2.995-2.987c.33-.32.087-.865-.367-.865zM.5 16h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm0-4h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm0-4h3c.277 0 .5.223.5.5s-.223.5-.5.5h-3C.223 9 0 8.777 0 8.5S.223 8 .5 8zm24 11c-1.375 0-2.5 1.125-2.5 2.5s1.125 2.5 2.5 2.5 2.5-1.125 2.5-2.5-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5s-.666 1.5-1.5 1.5-1.5-.666-1.5-1.5.666-1.5 1.5-1.5zm-13-1C10.125 19 9 20.125 9 21.5s1.125 2.5 2.5 2.5 2.5-1.125 2.5-2.5-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5s-.666 1.5-1.5 1.5-1.5-.666-1.5-1.5.666-1.5 1.5-1.5zm-5-14C5.678 6 5 6.678 5 7.5v11c0 .822.678 1.5 1.5 1.5h2c.676.01.676-1.01 0-1h-2c-.286 0-.5-.214-.5-.5v-11c0-.286.214-.5.5-.5h13c.286 0 .5.214.5.5V19h-5.5c-.66 0-.648 1.01 0 1h7c.66 0 .654-1 0-1H21v-9h4.227L29 15.896V18.5c0 .286-.214.5-.5.5h-1c-.654 0-.654 1 0 1h1c.822 0 1.5-.678 1.5-1.5v-2.75c0-.095-.027-.19-.078-.27l-4-6.25c-.092-.143-.25-.23-.422-.23H21V7.5c0-.822-.678-1.5-1.5-1.5z"/>
                    </svg>
                </div>
                <span>Швидко та зручно доставимо по всій Україні</span>
            </div>
        </div>
    </section>

    <section class="sale">
        <div class="container">
            <h3 class="sale__title">Спеціальні пропозиції</h3>
            <div class="swiper sale-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт.</span>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="compare">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                    </svg>
                                </div>
                                <div class="mini-product__like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="card">
                                        <path
                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mini-product__img">
                            <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                        </a>
                        <a href="#" class="mini-product__title">Сонячна панель Jinko 580</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                        fill="#FFCB45"/>
                                </svg>
                            </div>
                            <span class="mini-product__rating_text">4.9</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">4000</span>
                                <span class="mini-product__price_current">3600</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count"> -10%</div>
                            </div>
                        </div>
                        <div class="mini-product_buy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                 id="shopping-cart">
                                <path
                                    d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт.</span>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="compare">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                    </svg>
                                </div>
                                <div class="mini-product__like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="card">
                                        <path
                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mini-product__img">
                            <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                        </a>
                        <a href="#" class="mini-product__title">Сонячна панель Jinko 580</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                        fill="#FFCB45"/>
                                </svg>
                            </div>
                            <span class="mini-product__rating_text">4.9</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">4000</span>
                                <span class="mini-product__price_current">3600</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count"> -10%</div>
                            </div>
                        </div>
                        <div class="mini-product_buy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                 id="shopping-cart">
                                <path
                                    d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт.</span>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="compare">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                    </svg>
                                </div>
                                <div class="mini-product__like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="card">
                                        <path
                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mini-product__img">
                            <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                        </a>
                        <a href="#" class="mini-product__title">Сонячна панель Jinko 580</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                        fill="#FFCB45"/>
                                </svg>
                            </div>
                            <span class="mini-product__rating_text">4.9</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">4000</span>
                                <span class="mini-product__price_current">3600</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count"> -10%</div>
                            </div>
                        </div>
                        <div class="mini-product_buy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                 id="shopping-cart">
                                <path
                                    d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт.</span>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="compare">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                    </svg>
                                </div>
                                <div class="mini-product__like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="card">
                                        <path
                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mini-product__img">
                            <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                        </a>
                        <a href="#" class="mini-product__title">Сонячна панель Jinko 580</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                        fill="#FFCB45"/>
                                </svg>
                            </div>
                            <span class="mini-product__rating_text">4.9</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">4000</span>
                                <span class="mini-product__price_current">3600</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count"> -10%</div>
                            </div>
                        </div>
                        <div class="mini-product_buy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                 id="shopping-cart">
                                <path
                                    d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт.</span>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="compare">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                    </svg>
                                </div>
                                <div class="mini-product__like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="card">
                                        <path
                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mini-product__img">
                            <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                        </a>
                        <a href="#" class="mini-product__title">Сонячна панель Jinko 580</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                        fill="#FFCB45"/>
                                </svg>
                            </div>
                            <span class="mini-product__rating_text">4.9</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">4000</span>
                                <span class="mini-product__price_current">3600</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count"> -10%</div>
                            </div>
                        </div>
                        <div class="mini-product_buy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                 id="shopping-cart">
                                <path
                                    d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-slide mini-product">
                        <div class="mini-product__top">
                            <span class="mini-product__stock">4 шт.</span>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="compare">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                    </svg>
                                </div>
                                <div class="mini-product__like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                         id="card">
                                        <path
                                            d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mini-product__img">
                            <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                        </a>
                        <a href="#" class="mini-product__title">Сонячна панель Jinko 580</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                        fill="#FFCB45"/>
                                </svg>
                            </div>
                            <span class="mini-product__rating_text">4.9</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">4000</span>
                                <span class="mini-product__price_current">3600</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count"> -10%</div>
                            </div>
                        </div>
                        <div class="mini-product_buy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                 id="shopping-cart">
                                <path
                                    d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </div>
                    </div>

                </div>
                <div class="sale-carousel-nav">
                    <div class="sale-carousel-pagination"></div>

                    <div class="sale-carousel-arrows">


                        <div class="sale-carousel-prev">
                            <svg width="12px" height="12px" viewBox="-4.5 0 20 20" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>
                                    arrow_left
                                    [#334]</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -6679.000000)"
                                       fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M338.61,6539 L340,6537.594 L331.739,6528.987 L332.62,6528.069 L332.615,6528.074 L339.955,6520.427 L338.586,6519 C336.557,6521.113 330.893,6527.014 329,6528.987 C330.406,6530.453 329.035,6529.024 338.61,6539"
                                                id="arrow_left-[#334]"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sale-carousel-next">
                            <svg width="12px" height="12px" viewBox="-4.5 0 20 20" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>
                                    arrow_right
                                    [#333]</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-425.000000, -6679.000000)"
                                       fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M370.39,6519 L369,6520.406 L377.261,6529.013 L376.38,6529.931 L376.385,6529.926 L369.045,6537.573 L370.414,6539 C372.443,6536.887 378.107,6530.986 380,6529.013 C378.594,6527.547 379.965,6528.976 370.39,6519"
                                                id="arrow_right-[#333]"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="info__desc">
                <p>Якась інфа про компанію або ще якась фігня</p>
                <p>Тут те саме можна добавити аля ми такі сякі і тд і тп</p>
                <a href="#" class="info__link">Детальніше</a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const header_carousel = new Swiper('.header-carousel', {
            loop: true,
            pagination: {
                el: '.header-carousel-pagination',
                clickable: true,
            },
        });

        const sale_carousel = new Swiper('.sale-carousel', {
            loop: true,
            slidesPerView: 5,
            spaceBetween: 0,
            pagination: {
                el: '.sale-carousel-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.sale-carousel-next',
                prevEl: '.sale-carousel-prev',
            },
        });
    </script>
@endsection



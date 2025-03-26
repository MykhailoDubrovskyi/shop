@extends('layouts.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__el">
                        <svg width="13px" height="11px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 22H22" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M2.94995 22L2.99995 9.96999C2.99995 9.35999 3.28995 8.78004 3.76995 8.40004L10.77 2.95003C11.49 2.39003 12.4999 2.39003 13.2299 2.95003L20.23 8.39003C20.72 8.77003 21 9.34999 21 9.96999V22"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path d="M13 17H11C10.17 17 9.5 17.67 9.5 18.5V22H14.5V18.5C14.5 17.67 13.83 17 13 17Z"
                                  stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path
                                d="M9.5 13.75H7.5C6.95 13.75 6.5 13.3 6.5 12.75V11.25C6.5 10.7 6.95 10.25 7.5 10.25H9.5C10.05 10.25 10.5 10.7 10.5 11.25V12.75C10.5 13.3 10.05 13.75 9.5 13.75Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path
                                d="M16.5 13.75H14.5C13.95 13.75 13.5 13.3 13.5 12.75V11.25C13.5 10.7 13.95 10.25 14.5 10.25H16.5C17.05 10.25 17.5 10.7 17.5 11.25V12.75C17.5 13.3 17.05 13.75 16.5 13.75Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path d="M19.0001 7L18.9701 4H14.5701" stroke="#292D32" stroke-width="1.5"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Головна
                    </a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__el">
                        Сонячні панелі
                    </a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__el">Сонячна панель Jinko 580w</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Сонячна панель Jinko 580w</h1>
    </div>

    <div class="page-product">
        <div class="page-product-wrap">
            <div class="container">
                <div class="page-product-gallery">
                    <div class="page-product-gallery__thumbs__item active">
                        <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                    </div>
                    <div class="page-product-gallery__thumbs__item">
                        <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                    </div>
                    <div class="page-product-gallery__thumbs__item">
                        <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                    </div>
                    <div class="page-product-gallery__main">
                        <img src="{{asset('images/products/SolarPanel1.png')}}" alt="">
                    </div>
                </div>
                <div class="page-product-main">
                    <div class="page-product-main-top">
                        <div class="page-product-main-top__reviews">
                            <div class="page-product-main-top__rating">
                                <div class="page-product-main-top__rating_icon">
                                    <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                                            fill="#FFCB45"/>
                                    </svg>
                                </div>
                                <span class="page-product-main-top__rating_text">4.9</span>
                            </div>
                            <div class="page-product-main-top__link">10 відгуків</div>
                        </div>
                        <div class="page-product-main-top__actions">
                            <div class="page-product-main-top__actions_compare">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                     id="compare">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path
                                        d="M9.01 14H3c-.55 0-1 .45-1 1s.45 1 1 1h6.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71l-2.78-2.79c-.31-.32-.85-.09-.85.35V14zm5.98-2.21V10H21c.55 0 1-.45 1-1s-.45-1-1-1h-6.01V6.21c0-.45-.54-.67-.85-.35l-2.78 2.79c-.19.2-.19.51 0 .71l2.78 2.79c.31.31.85.09.85-.36z"></path>
                                </svg>
                            </div>
                            <div class="page-product-main-top__actions_like">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                     id="card">
                                    <path
                                        d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="page-product-main-options">
                        <div class="page-product-main-options__row">
                            <!-- Перша колонка (Тип кремнія) -->
                            <div class="page-product-main-options__type">
                                <span class="page-product-main-options__title">Тип кремнія:</span>
                                <div class="page-product-checkbox-group">
                                    <label class="page-product-checkbox">
                                        <input class="page-product-checkbox__checkbox" type="checkbox" name="asd" checked>
                                        <div class="page-product-checkbox__box"></div>
                                        <span class="page-product-checkbox__value">Монокристал</span>
                                    </label>
                                    <label class="page-product-checkbox">
                                        <input class="page-product-checkbox__checkbox" type="checkbox" name="asd">
                                        <div class="page-product-checkbox__box"></div>
                                        <span class="page-product-checkbox__value">Полікристал</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Друга колонка (Розміри) -->
                            <div class="page-product-main-options__dimensions">
                                <span class="page-product-main-dimension__title">Розміри:</span>
                                <span class="page-product-dimension__value">2278×1134×35 мм</span>
                            </div>
                        </div>
                    </div>


                    <div class="page-product-main-dop">
                        <span class="page-product-main-dop__title">Аксесуари</span>
                    </div>
                    <div class="page-product-main-action">
                        <div class="page-product-main-action__price">
                            <div class="page-product-main-action__price_main">
                                <span class="main-product-main-action__price_old">4000</span>
                                <span class="page-product-main-action__price_current">3600</span>
                            </div>
                            <div class="page-product-main-action__sale">
                                <div class="page-product-main-action__price-count"> -10%</div>
                            </div>
                        </div>
                        <div class="page-product-main-action__count">
                            <span class="page-product-main-action__count_plus">-</span>
                            <input type="text" name="count" value="1">
                            <span class="page-product-main-action__count_plus">+</span>
                        </div>
                        <button class="page-product-main-action__buy">
                            <div class="page-product-main-action__buy_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" version="1.2"
                                     id="shopping-cart">
                                    <path
                                        d="M20.756 5.345A1.003 1.003 0 0 0 20 5H6.181l-.195-1.164A1 1 0 0 0 5 3H2.75a1 1 0 1 0 0 2h1.403l1.86 11.164.045.124.054.151.12.179.095.112.193.13.112.065a.97.97 0 0 0 .367.075H18a1 1 0 1 0 0-2H7.847l-.166-1H19a1 1 0 0 0 .99-.858l1-7a1.002 1.002 0 0 0-.234-.797zM18.847 7l-.285 2H15V7h3.847zM14 7v2h-3V7h3zm0 3v2h-3v-2h3zm-4-3v2H7l-.148.03L6.514 7H10zm-2.986 3H10v2H7.347l-.333-2zM15 12v-2h3.418l-.285 2H15z"></path>
                                    <circle cx="8.5" cy="19.5" r="1.5"></circle>
                                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                                </svg>
                            </div>
                            <span class="page-product-main-action__buy_icon">В корзину</span>
                        </button>
                        <a href="#" class="page-product-main-action__fast-buy">Купити в один клік</a>
                    </div>
                    <div class="main-product-main-bottom">
                        <span class="main-product-main-bottom__title">Спосіб отримання</span>
                        <div class="main-product-main-bottom__items">
                            <span class="main-product-main-bottom__item"><a href="#">Самовивіз</a> бесплатно</span>
                            <span class="main-product-main-bottom__item"><a href="#">Доставка</a> протягом 3 днів</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="page-product-info">
                    <div class="page-product-info__tabs">
                        <a href="#" class="page-product-info__tabs_item">Опис товару</a>
                        <a href="#" class="page-product-info__tabs_item">Відгук про товар</a>
                        <a href="#" class="page-product-info__tabs_item">Доставка</a>
                        <a href="#" class="page-product-info__tabs_item">Оплата</a>
                        <a href="#" class="page-product-info__tabs_item">Гарантія</a>
                    </div>
                    <div class="page-product-info__cont">
                        <p>Сюди якусь інфу вставити
                            The standard Lorem Ipsum passage, used since the 1500s
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                            exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                            consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                            molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

                            1914 translation by H. Rackham
                            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                            pain was born and I will give you a complete account of the system, and expound the actual
                            teachings of the great explorer of the truth, the master-builder of human happiness. No one
                            rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                            do not know how to pursue pleasure rationally encounter consequences that are extremely
                            painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                            because it is pain, but because occasionally circumstances occur in which toil and pain can
                            procure him some great pleasure. To take a trivial example, which of us ever undertakes
                            laborious physical exercise, except to obtain some advantage from it? But who has any right
                            to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,
                            or one who avoids a pain that produces no resultant pleasure?"

                            Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                            est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                            et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                            doloribus asperiores repellat."

                            1914 translation by H. Rackham
                            "On the other hand, we denounce with righteous indignation and dislike men who are so
                            beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                            they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                            those who fail in their duty through weakness of will, which is the same as saying through
                            shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a
                            free hour, when our power of choice is untrammelled and when nothing prevents our being able
                            to do what we like best, every pleasure is to be welcomed and every pain avoided. But in
                            certain circumstances and owing to the claims of duty or the obligations of business it will
                            frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man
                            therefore always holds in these matters to this principle of selection: he rejects pleasures
                            to secure other greater pleasures, or else he endures pains to avoid worse pains."

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ms-tags">
            <div class="container">
                <a href="#" class="ms-tags__item">Сонячні панелі</a>
                <a href="#" class="ms-tags__item">Сонячні панелі</a>
                <a href="#" class="ms-tags__item">Сонячна парковка</a>
                <a href="#" class="ms-tags__item">Сонячний паркан</a>
                <a href="#" class="ms-tags__item">Сонячна підлога</a>
                <a href="#" class="ms-tags__item">Сонячний забор</a>
            </div>
        </div>

        <section class="info">
            <div class="container">
                <div class="info__desc">
                    <p>Якась інфа про компанію або ще якась фігня</p>
                    <p>Тут те саме можна добавити аля ми такі сякі і тд і тп</p>
                    <a href="#" class="info__link">Детальніше</a>
                </div>
            </div>
        </section>

    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let firstCheckbox = document.querySelector(".page-product-checkbox:first-of-type input");
            let secondCheckbox = document.querySelector(".page-product-checkbox:nth-of-type(2) input");

            // Робимо перший чекбокс завжди активним і заблокованим
            firstCheckbox.checked = true;
            firstCheckbox.disabled = true;

            // Другий чекбокс робимо неактивним
            secondCheckbox.checked = false;
            secondCheckbox.disabled = true; // Блокування, щоб не можна було вибрати
        });

        $(document).ready(function () {

        })
    </script>
@endsection

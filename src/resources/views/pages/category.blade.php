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
                    <span class="breadcrumbs__el">Сонячні панелі</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Сонячні системи</h1>
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

    <div class="page-category">
        <div class="container">
            <div class="pc-filter">
                <div class="pc-filter__top">
                    <span class="pc-filter__title">Фільтр</span>
                    <div class="pc-filter__icon">
                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 4.6C3 4.03995 3 3.75992 3.10899 3.54601C3.20487 3.35785 3.35785 3.20487 3.54601 3.10899C3.75992 3 4.03995 3 4.6 3H19.4C19.9601 3 20.2401 3 20.454 3.10899C20.6422 3.20487 20.7951 3.35785 20.891 3.54601C21 3.75992 21 4.03995 21 4.6V6.33726C21 6.58185 21 6.70414 20.9724 6.81923C20.9479 6.92127 20.9075 7.01881 20.8526 7.10828C20.7908 7.2092 20.7043 7.29568 20.5314 7.46863L14.4686 13.5314C14.2957 13.7043 14.2092 13.7908 14.1474 13.8917C14.0925 13.9812 14.0521 14.0787 14.0276 14.1808C14 14.2959 14 14.4182 14 14.6627V17L10 21V14.6627C10 14.4182 10 14.2959 9.97237 14.1808C9.94787 14.0787 9.90747 13.9812 9.85264 13.8917C9.7908 13.7908 9.70432 13.7043 9.53137 13.5314L3.46863 7.46863C3.29568 7.29568 3.2092 7.2092 3.14736 7.10828C3.09253 7.01881 3.05213 6.92127 3.02763 6.81923C3 6.70414 3 6.58185 3 6.33726V4.6Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="pc-filter-price">
                    <div class="pc-filter-price__inputs">
                        <input type="text" id="filter-price-slider-from" class="pc-filter-price__input"
                               name="price_from" placeholder="Від 1000">
                        <input type="text" id="filter-price-slider-to" class="pc-filter-price__input"
                               name="price_to" placeholder="До 10000">
                    </div>
                    <div id="filter-price-slider" class="pc-filter-price__slider"></div>
                </div>
                <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">Конструктор</span>
                        <div class="pc-filter__item_icon">
                            <svg width="10px" height="10px" viewBox="0 0 16 16"
                                 xmlns="http://www.w3.org/2000/svg" id="svg2" version="1.1">

                                <metadata id="metadata7">

                                    <rdf:RDF>

                                        <cc:Work>

                                            <dc:format>image/svg+xml</dc:format>

                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>

                                            <dc:title/>

                                            <dc:date>2021</dc:date>

                                            <dc:creator>

                                                <cc:Agent>

                                                    <dc:title>Timothée Giet</dc:title>

                                                </cc:Agent>

                                            </dc:creator>

                                            <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"/>

                                        </cc:Work>

                                        <cc:License rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"/>

                                        </cc:License>

                                    </rdf:RDF>

                                </metadata>

                                <g id="layer1" transform="rotate(45 1254.793 524.438)">

                                    <path
                                        style="fill:#373737;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                                        d="M4.468 1048.341h1.996v-9h9v-2h-11z" id="path4179"/>

                                </g>

                            </svg>
                        </div>
                    </div>
                    <div class="pc-filter__item_cont">
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Jinko</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Longi</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Якась марка панелі</span>
                        </label>
                    </div>
                </div>
                <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">Напруга АКБ</span>
                        <div class="pc-filter__item_icon">
                            <svg width="10px" height="10px" viewBox="0 0 16 16"
                                 xmlns="http://www.w3.org/2000/svg" id="svg2" version="1.1">

                                <metadata id="metadata7">

                                    <rdf:RDF>

                                        <cc:Work>

                                            <dc:format>image/svg+xml</dc:format>

                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>

                                            <dc:title/>

                                            <dc:date>2021</dc:date>

                                            <dc:creator>

                                                <cc:Agent>

                                                    <dc:title>Timothée Giet</dc:title>

                                                </cc:Agent>

                                            </dc:creator>

                                            <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"/>

                                        </cc:Work>

                                        <cc:License rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"/>

                                        </cc:License>

                                    </rdf:RDF>

                                </metadata>

                                <g id="layer1" transform="rotate(45 1254.793 524.438)">

                                    <path
                                        style="fill:#373737;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                                        d="M4.468 1048.341h1.996v-9h9v-2h-11z" id="path4179"/>

                                </g>

                            </svg>
                        </div>
                    </div>
                    <div class="pc-filter__item_cont">
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">12В</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">24В</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">48В</span>
                        </label>
                    </div>
                </div>
                <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">Потужність</span>
                        <div class="pc-filter__item_icon">
                            <svg width="10px" height="10px" viewBox="0 0 16 16"
                                 xmlns="http://www.w3.org/2000/svg" id="svg2" version="1.1">

                                <metadata id="metadata7">

                                    <rdf:RDF>

                                        <cc:Work>

                                            <dc:format>image/svg+xml</dc:format>

                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>

                                            <dc:title/>

                                            <dc:date>2021</dc:date>

                                            <dc:creator>

                                                <cc:Agent>

                                                    <dc:title>Timothée Giet</dc:title>

                                                </cc:Agent>

                                            </dc:creator>

                                            <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"/>

                                        </cc:Work>

                                        <cc:License rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"/>

                                        </cc:License>

                                    </rdf:RDF>

                                </metadata>

                                <g id="layer1" transform="rotate(45 1254.793 524.438)">

                                    <path
                                        style="fill:#373737;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                                        d="M4.468 1048.341h1.996v-9h9v-2h-11z" id="path4179"/>

                                </g>

                            </svg>
                        </div>
                    </div>
                    <div class="pc-filter__item_cont">
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">400W</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">450W</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">500W</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">580W</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">600W</span>
                        </label>
                    </div>
                </div>
                <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">Тип кристала</span>
                        <div class="pc-filter__item_icon">
                            <svg width="10px" height="10px" viewBox="0 0 16 16"
                                 xmlns="http://www.w3.org/2000/svg" id="svg2" version="1.1">

                                <metadata id="metadata7">

                                    <rdf:RDF>

                                        <cc:Work>

                                            <dc:format>image/svg+xml</dc:format>

                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>

                                            <dc:title/>

                                            <dc:date>2021</dc:date>

                                            <dc:creator>

                                                <cc:Agent>

                                                    <dc:title>Timothée Giet</dc:title>

                                                </cc:Agent>

                                            </dc:creator>

                                            <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"/>

                                        </cc:Work>

                                        <cc:License rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"/>

                                            <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>

                                            <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"/>

                                        </cc:License>

                                    </rdf:RDF>

                                </metadata>

                                <g id="layer1" transform="rotate(45 1254.793 524.438)">

                                    <path
                                        style="fill:#373737;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                                        d="M4.468 1048.341h1.996v-9h9v-2h-11z" id="path4179"/>

                                </g>

                            </svg>
                        </div>
                    </div>
                    <div class="pc-filter__item_cont">
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Монокристал</span>
                        </label>
                        <label class="pc-filter-checkbox">
                            <input class="pc-filter-checkbox__checkbox" type="checkbox" name="asd">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">Полікристал</span>
                        </label>
                    </div>
                </div>

            </div>
            <div class="page-category__content">
                <div class="page-category__sort">
                    <div class="pc-select">
                        <span class="pc-select__title">Сортування:</span>
                        <span class="pc-select__val">За замовчуванням</span>
                    </div>

                    <div class="pc-view">
                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8 1C9.65685 1 11 2.34315 11 4V8C11 9.65685 9.65685 11 8 11H4C2.34315 11 1 9.65685 1 8V4C1 2.34315 2.34315 1 4 1H8ZM8 3C8.55228 3 9 3.44772 9 4V8C9 8.55228 8.55228 9 8 9H4C3.44772 9 3 8.55228 3 8V4C3 3.44772 3.44772 3 4 3H8Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8 13C9.65685 13 11 14.3431 11 16V20C11 21.6569 9.65685 23 8 23H4C2.34315 23 1 21.6569 1 20V16C1 14.3431 2.34315 13 4 13H8ZM8 15C8.55228 15 9 15.4477 9 16V20C9 20.5523 8.55228 21 8 21H4C3.44772 21 3 20.5523 3 20V16C3 15.4477 3.44772 15 4 15H8Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M23 4C23 2.34315 21.6569 1 20 1H16C14.3431 1 13 2.34315 13 4V8C13 9.65685 14.3431 11 16 11H20C21.6569 11 23 9.65685 23 8V4ZM21 4C21 3.44772 20.5523 3 20 3H16C15.4477 3 15 3.44772 15 4V8C15 8.55228 15.4477 9 16 9H20C20.5523 9 21 8.55228 21 8V4Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M20 13C21.6569 13 23 14.3431 23 16V20C23 21.6569 21.6569 23 20 23H16C14.3431 23 13 21.6569 13 20V16C13 14.3431 14.3431 13 16 13H20ZM20 15C20.5523 15 21 15.4477 21 16V20C21 20.5523 20.5523 21 20 21H16C15.4477 21 15 20.5523 15 20V16C15 15.4477 15.4477 15 16 15H20Z"
                                  fill="#0F0F0F"/>
                        </svg>
                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3 1C1.89543 1 1 1.89543 1 3V5C1 6.10457 1.89543 7 3 7H5C6.10457 7 7 6.10457 7 5V3C7 1.89543 6.10457 1 5 1H3ZM5 3H3L3 5H5V3Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3 9C1.89543 9 1 9.89543 1 11V13C1 14.1046 1.89543 15 3 15H5C6.10457 15 7 14.1046 7 13V11C7 9.89543 6.10457 9 5 9H3ZM5 11H3L3 13H5V11Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1 19C1 17.8954 1.89543 17 3 17H5C6.10457 17 7 17.8954 7 19V21C7 22.1046 6.10457 23 5 23H3C1.89543 23 1 22.1046 1 21V19ZM3 19H5V21H3L3 19Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M11 1C9.89543 1 9 1.89543 9 3V5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5V3C15 1.89543 14.1046 1 13 1H11ZM13 3H11V5H13V3Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9 11C9 9.89543 9.89543 9 11 9H13C14.1046 9 15 9.89543 15 11V13C15 14.1046 14.1046 15 13 15H11C9.89543 15 9 14.1046 9 13V11ZM11 11H13V13H11V11Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M11 17C9.89543 17 9 17.8954 9 19V21C9 22.1046 9.89543 23 11 23H13C14.1046 23 15 22.1046 15 21V19C15 17.8954 14.1046 17 13 17H11ZM13 19H11V21H13V19Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M17 3C17 1.89543 17.8954 1 19 1H21C22.1046 1 23 1.89543 23 3V5C23 6.10457 22.1046 7 21 7H19C17.8954 7 17 6.10457 17 5V3ZM19 3H21V5H19V3Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M19 9C17.8954 9 17 9.89543 17 11V13C17 14.1046 17.8954 15 19 15H21C22.1046 15 23 14.1046 23 13V11C23 9.89543 22.1046 9 21 9H19ZM21 11H19V13H21V11Z"
                                  fill="#0F0F0F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M17 19C17 17.8954 17.8954 17 19 17H21C22.1046 17 23 17.8954 23 19V21C23 22.1046 22.1046 23 21 23H19C17.8954 23 17 22.1046 17 21V19ZM19 19H21V21H19V19Z"
                                  fill="#0F0F0F"/>
                        </svg>
                    </div>
                </div>

                <div class="page-category__products">
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
                    <div class="mini-product">
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
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#filter-price-slider').slider({
                range: true,
                min: 0,
                max: 9999,
                values: ['1000', '9000'],
                slide: function (event, ui) {
                    $('#filter-price-slider-from').val(ui.values[0]);
                    $('#filter-price-slider-to').val(ui.values[1]);
                }
            })
        })
    </script>
@endsection

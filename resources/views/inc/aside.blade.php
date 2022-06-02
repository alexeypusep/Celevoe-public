<aside id="asideMenu" class="aside-left aside-left--styled-scroll">
    <div class="aside-left__wrapper">
        <div class="aside-left__header">
            <div class="aside-left__header-wrapper">
                <div class="aside-left__container-humburger-button">
                    <button id="buttonHideAsideMenu" class="hamburger-button" aria-label="Кнопка закрытия меню">
                        <svg class="hamburger-button__icon">
                            <use xlink:href="#hamburger-open"></use>
                        </svg>
                    </button>
                </div>
                <div class="aside-left__container-logo">
                    <div class="logo-tproger logo-tproger--full">
                        <a class="logo-tproger__link" href="/">
                            <img src="img/logo3.png">
                            <div class="logo-tproger__container-text">
                                <span class="logo-tproger__text">Целевое</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="aside-left__main">
            <div class="menu-category">
                <nav class="menu-category__navigation">
                    <ul class="menu-category__list">
                        <li class="menu-category__item">
                            <a class="menu-category__button" href="{{ route('home') }}">
                                <svg class="menu-category__icon menu-category__icon--fill">
                                    <use xlink:href="#company"></use>
                                </svg>
                                <span class="menu-category__text ">Организации</span>
                            </a>
                        </li>
                        <li hidden class="menu-category__item">
                            <a class="menu-category__button" href="">
                                <svg class="menu-category__icon menu-category__icon--fill">
                                    <use xlink:href="#company"></use>
                                </svg>
                                <span class="menu-category__text ">Вакансии</span>
                            </a>
                        </li>
                        <li class="menu-category__item">
                            <a class="menu-category__button" href="{{ route('jobs') }}">
                                <svg class="menu-category__icon menu-category__icon--fill">
                                    <use xlink:href="#job"></use>
                                </svg>
                                <span class="menu-category__text ">Вакансии</span>
                            </a>
                        </li>
                        <li class="menu-category__item">
                            <a class="menu-category__button" href="{{ route('direct') }}">
                                <svg class="menu-category__icon menu-category__icon--fill">
                                    <use xlink:href="#cmd"></use>
                                </svg>
                                <span class="menu-category__text ">Направления</span>
                            </a>
                        </li>

                        <div class="aside-left__footer">
                            <div class="aside-left__footer-item">
                                <div class="aside-left__footer-navigation footer-navigation">
                                    <ul class="footer-navigation__list">
                                        <li class="footer-navigation__item">
                                            <button id="buttonOpenDropdownFooterNavigation" data-dropdown-id="dropdownFooterNavigation" class="footer-navigation__button">
                                                <span class="footer-navigation__text">Правила сайта</span>
                                                <svg class="footer-navigation__icon footer-navigation__icon--stroke">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </button>
                                            <div id="dropdownFooterNavigation" class="footer-navigation__dropdown">
                                                <ul class="footer-navigation__list footer-navigation__list--column">
                                                    <li class="footer-navigation__item">
                                                        <a class="footer-navigation__button" href="/editorial-policy">
                                                            <span class="footer-navigation__text">Редполитика</span>
                                                        </a>
                                                    </li>
                                                    <li class="footer-navigation__item">
                                                        <a class="footer-navigation__button" href="/terms.pdf">
                                                            <span class="footer-navigation__text">Пользовательское соглашение</span>
                                                        </a>
                                                    </li>
                                                    <li class="footer-navigation__item">
                                                        <a class="footer-navigation__button" href="/privacy.pdf">
                                                            <span class="footer-navigation__text">Политика конфиденциальности</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="aside-left__footer-item">
                                <div class="aside-left__footer-navigation footer-navigation">
                                    <ul class="footer-navigation__list">
                                        <li class="footer-navigation__item">
                                            <a class="footer-navigation__button" href="/ad/?utm_referrer=footer">
                                                <span class="footer-navigation__text">Реклама</span>
                                            </a>
                                        </li><li class="footer-navigation__item">
                                            <a class="footer-navigation__button" href="/company/tproger/#about">
                                                <span class="footer-navigation__text">О нас</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="aside-left__footer-item">
                                <div class="aside-left__footer-navigation footer-navigation">
                                    <ul class="footer-navigation__list">
                                        <li class="footer-navigation__item">
                                            <button id="buttonOpenDropdownSocialNetworkFooterNavigation" data-dropdown-id="dropdownSocialNetworkFooterNavigation" class="footer-navigation__button">
                                                <span class="footer-navigation__text">Мы в соцсетях</span>
                                                <svg class="footer-navigation__icon footer-navigation__icon--stroke">
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </button>
                                            <div id="dropdownSocialNetworkFooterNavigation" class="footer-navigation__dropdown">
                                                <div class="footer-navigation__social-network-block social-network-block">
                                                    <div class="social-network-block__header">
                                                        <ul class="social-network-block__list-header">
                                                            <li class="social-network-block__item-list-header">
                                                                <a class="social-network-block__link-header" href="https://vk.com/tproger" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill">
                                                                        <use xlink:href="#vk-colorless"></use>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-header">
                                                                <a class="social-network-block__link-header" href="https://t.me/joinchat/Ga8K4pMCLUo3ZDhi" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill">
                                                                        <use xlink:href="#telegram-colorless"></use>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-header">
                                                                <a class="social-network-block__link-header" href="https://www.facebook.com/tproger/" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill">
                                                                        <use xlink:href="#facebook-colorless"></use>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-header">
                                                                <a class="social-network-block__link-header" href="https://zen.yandex.ru/tproger" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill">
                                                                        <use xlink:href="#yandex-zen-colorless"></use>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-header">
                                                                <a class="social-network-block__link-header" href="https://twitter.com/tproger" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill">
                                                                        <use xlink:href="#twitter-colorless"></use>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-header">
                                                                <a class="social-network-block__link-header" href="/feed/" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill">
                                                                        <use xlink:href="#rss-colorless"></use>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="social-network-block__content">
                                                        <ul class="social-network-block__list-content">
                                                            <li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://vk.com/tproger_web" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#vk-colorless"></use>
                                                                    </svg>
                                                                    Веб-разработка
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://t.me/joinchat/DY1TVpjJmvBlOGUy" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#telegram-colorless"></use>
                                                                    </svg>
                                                                    Soft Skills
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://t.me/joinchat/6BcZUcm1n7szNTBi" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#telegram-colorless"></use>
                                                                    </svg>
                                                                    Python–разработка
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://t.me/joinchat/F9DE01yR01hjYmMy" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#telegram-colorless"></use>
                                                                    </svg>
                                                                    IT Юмор
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://t.me/joinchat/T0cuJFoZNgBhMjJi" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#telegram-colorless"></use>
                                                                    </svg>
                                                                    GameDev
                                                                </a>
                                                            </li>
                                                            <li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://vk.com/tnull" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#vk-colorless"></use>
                                                                    </svg>
                                                                    /dev/null
                                                                </a>
                                                            </li><li class="social-network-block__item-list-content">
                                                                <a class="social-network-block__link-content" href="https://t.me/joinchat/BqFSp5CPwFdhNjI6" target="_blank">
                                                                    <svg class="social-network-block__icon social-network-block__icon--fill social-network-block__icon--small">
                                                                        <use xlink:href="#telegram-colorless"></use>
                                                                    </svg>
                                                                    Новости
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>





                        </div>
                    </ul></nav></div>
            <div id="substrateAsideMenu" class="aside-left__substrate"></div>
        </div></div></aside>

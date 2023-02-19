<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<header class="header" id="header">
        <div class="header__wrapper">
            <div class="header__head">
                <div class="container">
                    <div class="header__head-wrapper">
                        <div class="header__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/logo.svg" alt="" class="header__logo-logo">
                        </div>
                        <div class="header__contacts">
                            <div class="header__telephone">
                                <a href="tel:+380(66) 000 00 00;" class="header__telephone-number">+380(66) 000 00 00</a>
                            </div>
                            <div class="header__icons">
                                <a href="#" class="header__round">
                                    <span class="icon icon-facebook header__facebook"></span>
                                </a>
                                <a href="#" class="header__round">
                                    <span class="icon icon-instagram header__instagram"></span>
                                </a>
                                <a href="#" class="header__round">
                                    <span class="icon icon-youtube header__youtube"></span>
                                </a>
                            </div>
                            <div class="header__lang">
                                <span class="header__lang-en">EN</span>
                                <span class="header__lang-slash">/</span>
                                <span class="header__lang-ua active">UA</span>
                            </div>
                            <div class="burger header__burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__nav">
                <div class="header__burger_mobile burger header__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="header__menu">
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Хто ми?</a></li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Що ми робимо?</a></li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Проекти</a></li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Наші контакти</a></li>
                    <li class="header__menu-item"><a href="#" class="header__menu-link">Новини</a></li>
                </ul>
                <div class="header__contacts header__contacts_mobile">
                    <div class="header__telephone header__telephone_mobile">
                        <a href="tel:+380(66) 000 00 00;" class="header__telephone-number">+380(66) 000 00 00</a>
                    </div>
                    <div class="header__icons header__icons_mobile">
                        <a href="#" class="header__round">
                            <span class="icon icon-facebook header__facebook"></span>
                        </a>
                        <a href="#" class="header__round">
                            <span class="icon icon-instagram header__instagram"></span>
                        </a>
                        <a href="#" class="header__round">
                            <span class="icon icon-youtube header__youtube"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</header>
<main class="main">
<?php # TODO: code here ?>

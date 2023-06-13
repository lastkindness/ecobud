<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader">
    <style>
        body{
            background-color:#fff;
            margin: 0;
            height: 100%;
            overflow: hidden;
        }
        #loader,
        #load{
            background-color:#fff;
            width: 15%;
            height: auto;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transform: translate3d(0,0,0);
            text-align: center;
            opacity: 1;
            display: none;
            flex-direction: column;
            @media (max-width: 1024px) {
                width: 60%;
                height: auto;
            }
        }
        .preloader #loader img {
            object-position: 50% 100%;
        }
        .preloader lottie-player {
            width: 100% !important;
            height: auto !important;
        }
        .preloader {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .preloader img,
        .preloader picture {
            object-fit: contain;
        }
        .preloader.lottie #load {
            display: flex;
        }
        .preloader.lottie #loader {
            display: none;
        }
        .preloader.loader #load {
            display: none;
        }
        .preloader.loader #loader {
            display: flex;
        }
    </style>
    <div id="load">
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/data.json" background="transparent" speed="1" style="width: 1023px; height: 385px;" loop autoplay></lottie-player>
    </div>
    <div id="loader">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/load.svg" alt="loader-image">
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/assets/img/load.json" background="transparent" speed="1" style="width: 229px; height: 100px;" loop autoplay></lottie-player>
    </div>
</div>
<?php if (pll_current_language('slug') != 'uk') : $current_lang = pll_current_language('slug'); else: $current_lang = '';  endif; ?>
<div class="wrapper">
<header class="header" id="header">
    <div class="header__error">
        <div class="container">
            <?php if (pll_current_language('slug') == 'en') {
                echo 'Attention, the site is under technical maintenance!';
            } else {
                echo 'Увага! На сайті ведуться технічні роботи!';
            }?>
        </div>
    </div>
    <div class="header__wrapper">
        <div class="header__head">
            <div class="container">
                <div class="header__head-wrapper">
                    <a href="/<?php echo $current_lang; ?>" class="header__logo">
                        <?php $logoHeader = get_field('logo', 'option');
                            if (!empty($logoHeader)) {?>
                                <img src="<?php echo $logoHeader['url']; ?>" alt="<?php echo $logoHeader['alt']; ?>" class="header__logo-logo">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Header Logo" class="header__logo-logo">
                        <?php } ?>
                    </a>
                    <div class="header__contacts">
                        <?php if($phones = get_field('phones', 'option')) : ?>
                            <div class="header__telephone">
                                <?php $i = 0; foreach ($phones as $item) : ?>
                                    <?php if($i==0) : ?>
                                        <a href="tel:<?php echo mb_strtolower(preg_replace('/[^0-9+]/', '', $item['phone']))?>" class="header__telephone-number" target="_blank">
                                            <?php echo $item['phone'] ;?>
                                        </a>
                                    <?php endif; ?>
                                <?php $i++; endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($socials = get_field('socials', 'option')) : ?>
                        <div class="header__icons">
                            <?php foreach ($socials as $item) : ?>
                            <a href="<?php echo $item['link'] ;?>" class="header__round">
                                <span class="icon icon-<?php echo $item['network'] ;?> header__<?php echo $item['network'] ;?>"></span>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="header__lang">
                            <?php pll_the_languages( array( "display_names_as" => "slug" ) ); ?>
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
            <?php if(has_nav_menu( 'primary' )) : ?>
                <?php wp_nav_menu( array(
                        'container' => false,
                        'theme_location' => 'primary',
                        'menu_class'     => 'header__menu',
                        'items_wrap'     => '<ul id="%1$s" class="header__menu">%3$s</ul>',
                    )
                ); ?>
            <?endif ; ?>
            <div class="header__contacts header__contacts_mobile">
                <?php if($phones = get_field('phones', 'option')) : ?>
                <div class="header__telephone header__telephone_mobile">
                    <?php $i = 0; foreach ($phones as $item) : ?>
                        <?php if($i==0) : ?>
                            <a href="tel:<?php echo mb_strtolower(preg_replace('/[^0-9+]/', '', $item['phone']))?>" class="header__telephone-number" target="_blank">
                                <?php echo $item['phone'] ;?>
                            </a>
                        <?php endif; ?>
                    <?php $i++; endforeach; ?>
                </div>
                <?php endif ?>
                <?php if($socials = get_field('socials', 'option')) : ?>
                    <div class="header__icons header__icons_mobile">
                        <?php foreach ($socials as $item) : ?>
                            <a href="<?php echo $item['link'] ;?>" class="header__round">
                                <span class="icon icon-<?php echo $item['network'] ;?> header__<?php echo $item['network'] ;?>"></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<main class="main">
<?php # TODO: code here ?>

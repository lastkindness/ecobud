<?php
/*
 * Template name: Front News Template
 */

get_header('front'); ?>

<section class="other-news">
    <div class="container">
        <div class="other-news__wrapper">
            <div class="other-news__title h1">Новини</div>
            <div class="other-news__grid">
                <a class="other-news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="other-news__grid-img">
                    <div class="other-news__grid-title h1">Lorem Ipsum</div>
                    <div class="other-news__grid-subtitle">Lorem Ipsum</div>
                </a>
                <a class="other-news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="other-news__grid-img">
                    <div class="other-news__grid-title h1">Lorem Ipsum</div>
                    <div class="other-news__grid-subtitle">Lorem Ipsum</div>
                </a>
                <a class="other-news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="other-news__grid-img">
                    <div class="other-news__grid-title h1">Lorem Ipsum</div>
                    <div class="other-news__grid-subtitle">Lorem Ipsum</div>
                </a>
                <a class="other-news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="other-news__grid-img">
                    <div class="other-news__grid-title h1">Lorem Ipsum</div>
                    <div class="other-news__grid-subtitle p">Lorem Ipsum</div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>

<?php

/**
 * Include header.php or header-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_header
 */
get_header();
global $wp_query;
$post_id = $wp_query->post->ID;
?>
<?php if (pll_current_language('slug') != 'uk') : $current_lang = pll_current_language('slug'); else: $current_lang = '';  endif; ?>
    <section class="hero">
        <?php if($slider = get_field('slider')): ?>
            <div class="hero__wrapper">
                <div class="hero__slider <?php if(count($slider)>1) : echo 'swiper mySwiper2'; endif; ?>">
                    <div class="hero__slides <?php if(count($slider)>1) : echo 'swiper-wrapper'; endif; ?>">
                        <?php foreach ($slider as $item) : ?>
                            <div class="hero__slide <?php if (count($slider)>1) : echo ' swiper-slide'; endif ; ?>">
                                <?php if($img = $item['img']) : ?>
                                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" class="hero__slide-img"/>
                                <?php endif ; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if (count($slider)>1) : ?>
                        <div class="hero__pagination swiper-pagination"></div>
                    <?php endif ; ?>
                    <div class="hero__arrows">
                        <div class="swiper-button-prev hero__thumb-arrowl"></div>
                        <div class="swiper-button-next hero__thumb-arrowr"></div>
                    </div>
                </div>
                <?php if (count($slider)>1) : ?>
                    <div class="hero__gallery swiper mySwiper">
                        <div class="hero__thumbs swiper-wrapper">
                            <?php foreach ($slider as $item) : ?>
                                <div class="hero__thumb swiper-slide">
                                    <?php if($img = $item['img']) : ?>
                                        <img src="<?php echo $img['url'];?>" alt="<?php echo $img['url'];?>" class="hero__thumb-img">
                                    <?php endif ; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif ; ?>
            </div>
        <?php endif ; ?>
    </section>

    <section class="portfolio-link">
        <div class="portfolio-link__wrapper">
            <?php $img = get_the_post_thumbnail_url(); ?>
            <div data-aos="fade-up" class="portfolio-link__banner">
                <?php if ($img) { ?>
                    <img src="<?php echo $img;?>" alt="main banner" class="portfolio-link__banner-img">
                <?php } ?>
                <div class="portfolio-link__banner-content">
                    <div data-aos="fade-up" class="container">
                        <?php if (pll_current_language('slug') == 'en') {?>
                            <a href="/en/project/" class="btn">All Projects</a>
                        <?php } else {?><a href="/project" class="btn">Всі проекти</a><?php }?>
                        <?php /*$terms = get_the_terms($post_id, 'group');
                        if ($terms) {*/?><!--
                            <h6 class="portfolio-link__date">
                                <?php /*foreach ($terms as $key => $term) {
                                    if ($key == count($terms)-1) {
                                        echo $term->name;
                                    } else if ($key == 0) {

                                    } else {
                                        echo $term->name . ' & ';
                                    }
                                } */?>
                            </h6>
                        --><?php /* }*/?>
                        <h1 class="portfolio-link__banner-title h1"><?php the_title(); ?></h1>
                        <?php if ($sub_title = get_field('subtitle')) { ?>
                            <h2 class="portfolio-link__banner-subtitle"><?php echo $sub_title;?></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php if ($content = get_field('content')) { ?>
            <div data-aos="fade-up" class="container">
                <div class="portfolio-link__content">
                    <?php echo $content;?>
                </div>
            </div>
            <?php } ?>
            <div data-aos="fade-up" class="container">
                <?php if ($title = get_field('title')) { ?>
                    <div class="portfolio-link__title h1"><?php echo $title;?></div>
                <?php } ?>
                <div class="portfolio-link__content">
                    <?php if ($items = get_field('items')) { ?>
                        <?php foreach ($items as $item) : ?>
                            <div class="portfolio-link__content-item">
                                <?php if($img = $item['img']) : ?>
                                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" class="portfolio-link__content-img">
                                <?php endif ; ?>
                                <div class="portfolio-link__content-descr">
                                    <?php if($title = $item['title']) : ?>
                                        <div class="portfolio-link__content-title h3"><?php echo $title;?></div>
                                    <?php endif ; ?>
                                    <?php if($description = $item['description']) : ?>
                                        <div class="portfolio-link__content-text">
                                            <?php echo $description;?>
                                        </div>
                                    <?php endif ; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php /*if ($slider = get_field('slider')) { */?><!--
        <section class="portfolio-slider swiper <?php /*if(count($slider)>3) : echo 'swiper-nav-active'; endif; */?>">
            <div class="portfolio-slider__wrapper swiper-wrapper">
                <?php /*foreach ($slider as $item) : */?>
                    <?php /*if($img = $item['img']) : */?>
                        <a class="portfolio-slider__slide swiper-slide" href="<?php /*echo $img['url'];*/?>" data-fancybox="gallery">
                            <img src="<?php /*echo $img['url'];*/?>" alt="<?php /*echo $img['alt'];*/?>" class="portfolio-slider__img">
                        </a>
                    <?php /*endif ; */?>
                <?php /*endforeach; */?>
            </div>
            <div class="swiper-button-prev icon icon-arrowr"></div>
            <div class="swiper-button-next icon icon-arrowr"></div>
            <div class="portfolio-slider__pagination swiper-pagination"></div>
        </section>
    --><?php /*} */?>
<?php
/**
 * Include footer.php of footer-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 */
get_footer();

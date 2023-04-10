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
    <section class="portfolio-link">
        <div class="portfolio-link__wrapper">
            <?php $img = get_the_post_thumbnail_url(); ?>
            <div data-aos="fade-up" class="portfolio-link__banner">
                <?php if ($img) { ?>
                    <img src="<?php echo $img;?>" alt="main banner" class="portfolio-link__banner-img">
                <?php } ?>
                <div class="portfolio-link__banner-content">
                    <h1 class="portfolio-link__banner-title h1"><?php the_title(); ?></h1>
                    <?php if ($sub_title = get_field('subtitle')) { ?>
                        <h2 class="portfolio-link__banner-subtitle"><?php echo $sub_title;?></h2>
                    <?php } ?>
                </div>
            </div>
            <div data-aos="fade-up" class="container">
                <?php $terms = get_the_terms($post_id, 'group');
                if ($terms) {
                    foreach ($terms as $term) {
                        echo '<h6 class="portfolio-link__date">' . $term->name . '</h6>';
                    }
                }?>
                <div class="portfolio-link__content">
                    <?php the_post();
                    the_content();?>
                </div>
            </div>
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
                <?php if ($slider = get_field('slider')) { ?>
                    <div class="portfolio-slider swiper <?php if(count($slider)>3) : echo 'swiper-nav-active'; endif; ?>">
                        <div class="portfolio-slider__wrapper swiper-wrapper">
                            <?php foreach ($slider as $item) : ?>
                                <?php if($img = $item['img']) : ?>
                                    <a class="portfolio-slider__slide swiper-slide" href="<?php echo $img['url'];?>" data-fancybox="gallery">
                                        <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" class="portfolio-slider__img">
                                    </a>
                                <?php endif ; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev icon icon-arrowr"></div>
                        <div class="swiper-button-next icon icon-arrowr"></div>
                        <div class="portfolio-slider__pagination swiper-pagination"></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php
/**
 * Include footer.php of footer-XXX.php for custom page
 *
 * @link        https://codex.wordpress.org/Function_Reference/get_footer
 */
get_footer();

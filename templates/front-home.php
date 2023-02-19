<?php
/*
 * Template name: Front Home Template
 */

get_header('front'); ?>

<section class="hero">
        <div class="hero__wrapper">
            <div class="hero__slider swiper mySwiper2">
                <div class="hero__slides swiper-wrapper">
                    <div class="hero__slide swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner.jpg" class="hero__slide-img"/>
                        <div class="hero__slide-content">
                            <p class="hero__slide-tag">LOREM UPSUM</p>
                            <h2 class="h2 hero__slide-title">Lorem Ipsum</h2>
                            <p class="hero__slide-text">Lorem ipsum dolor sit amet consectetur. A venenatis turpis eu quam. Et ultrices nullam ipsum viverra dui nam sapien viverra id. Diam blandit enim lorem ac enim eu nibh. Morbi </p>
                            <button class="hero__slide-btn btn btn_blue">Lorem Ipsum</button>
                        </div>
                    </div>
                    <div class="hero__slide swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner1.jpg" class="hero__slide-img"/>
                        <div class="hero__slide-content">
                            <p class="hero__slide-tag">LOREM UPSUM</p>
                            <h2 class="h2 hero__slide-title">Lorem Ipsum</h2>
                            <p class="hero__slide-text">Lorem ipsum dolor sit amet consectetur. A venenatis turpis eu quam. Et ultrices nullam ipsum viverra dui nam sapien viverra id. Diam blandit enim lorem ac enim eu nibh. Morbi </p>
                            <button class="hero__slide-btn btn btn_blue">Lorem Ipsum</button>
                        </div>
                    </div>
                    <div class="hero__slide swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner2.jpg" class="hero__slide-img"/>
                        <div class="hero__slide-content">
                            <p class="hero__slide-tag">UPSUM LOREM</p>
                            <h2 class="h2 hero__slide-title">Ipsum Lorem </h2>
                            <p class="hero__slide-text">Lorem ipsum dolor sit amet consectetur. A venenatis turpis eu quam. Et ultrices nullam ipsum viverra dui nam sapien viverra id. Diam blandit enim lorem ac enim eu nibh. Lorem ipsum dolor sit amet consectetur. A venenatis turpis eu quam. Et ultrices nullam ipsum viverra dui nam sapien viverra id. Diam blandit enim lorem ac enim eu nibh. Morbi  </p>
                            <button class="hero__slide-btn btn btn_blue">Lorem Ipsum</button>
                        </div>
                    </div>
                    <div class="hero__slide swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner3.jpg" class="hero__slide-img"/>
                        <div class="hero__slide-content">
                            <p class="hero__slide-tag">LOREM UPSUM</p>
                            <h2 class="h2 hero__slide-title">Lorem Ipsum</h2>
                            <p class="hero__slide-text">Lorem ipsum dolor sit amet consectetur. A venenatis turpis eu quam. Et ultrices nullam ipsum viverra dui nam sapien viverra id. Diam blandit enim lorem ac enim eu nibh. Morbi </p>
                            <button class="hero__slide-btn btn btn_blue">Lorem Ipsum</button>
                        </div>
                    </div>
                </div>
                <div class="hero__pagination swiper-pagination"></div>
            </div>
            <div class="hero__gallery swiper mySwiper">
                <div class="hero__thumbs swiper-wrapper">
                    <div class="hero__thumb swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner.jpg" alt="" class="hero__thumb-img">
                        <div class="hero__thumb-subtitle">Lorem Ipsum</div>
                    </div>
                    <div class="hero__thumb swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner1.jpg" alt="" class="hero__thumb-img">
                        <div class="hero__thumb-subtitle">Lorem Ipsum</div>
                    </div>
                    <div class="hero__thumb swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner2.jpg" alt="" class="hero__thumb-img">
                        <div class="hero__thumb-subtitle">Lorem Ipsum</div>

                    </div>
                    <div class="hero__thumb swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner3.jpg" alt="" class="hero__thumb-img">
                        <div class="hero__thumb-subtitle">Lorem Ipsum</div>
                    </div>
                </div>
                <div class="hero__arrows">
                    <div class="swiper-button-prev hero__thumb-arrowl"></div>
                    <div class="swiper-button-next hero__thumb-arrowr"></div>
                </div>
            </div>
        </div>
</section>

<?php get_footer('front'); ?>

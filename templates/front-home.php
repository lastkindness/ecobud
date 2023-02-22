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

<section class="about">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/vector1.svg" class="about__img">
    <div class="container">
        <div class="about__wrapper">
            <div class="about__title h1">Хто ми? </div>
            <p class="about__text">Eco-bud building group - компанія майбутнього, яка поєднує в собі досвід, креативне мислення та інновації. Компанія стрімко розвивається, тим самим здійснюючи вагомий внесок в розвиток будівельного бізнесу в Україні.</p>
            <div class="about__subtitle h2">Наша команда</div>
            <div class="about__photo">
                <div class="about__photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pavlo.png" alt="" class="about__photo-img">
                    <div class="about__photo-title h4">Павло Сомов</div>
                    <div class="about__photo-text">Зовниаснк групи компаній Ecobud</div>
                </div>
                <div class="about__photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/marya.png" alt="" class="about__photo-img">
                    <div class="about__photo-title h4">Павло Сомов</div>
                    <div class="about__photo-text">Зовниаснк групи компаній Ecobud</div>
                </div>
            </div>
            <div class="about__subtitle h3">Наші принципи</div>
            <div class="about__principles">
                <div class="about__principles-item">
                    <div class="about__principles-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="about__principles-logo"></div>
                    <div class="about__principles-title h3">Lorem Ipsum</div>
                    <p class="about__principles-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                </div>
                <div class="about__principles-item">
                    <div class="about__principles-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="about__principles-logo"></div>
                    <div class="about__principles-title h3">Lorem Ipsum</div>
                    <p class="about__principles-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                </div>
                <div class="about__principles-item">
                    <div class="about__principles-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="about__principles-logo"></div>
                    <div class="about__principles-title h3">Lorem Ipsum</div>
                    <p class="about__principles-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>

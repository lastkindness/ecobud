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
                    <p class="about__photo-text">Засновник групи компаній Ecobud</p>
                </div>
                <div class="about__photo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/marya.png" alt="" class="about__photo-img">
                    <div class="about__photo-title h4">Марина Круглова</div>
                    <p class="about__photo-text">Засновник архітектурного бюро Ecobud Project</p>
                </div>
            </div>
            <div class="about__subtitle h3">Наші принципи</div>
            <div class="about__principles">
                <div class="about__principles-item">
                    <div class="about__principles-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="about__principles-logo"></div>
                    <div class="about__principles-descr">
                        <div class="about__principles-title h3">Lorem Ipsum</div>
                        <p class="about__principles-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                    </div>
                </div>
                <div class="about__principles-item">
                    <div class="about__principles-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="about__principles-logo"></div>
                    <div class="about__principles-descr">
                        <div class="about__principles-title h3">Lorem Ipsum</div>
                        <p class="about__principles-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                    </div>
                </div>
                <div class="about__principles-item">
                    <div class="about__principles-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="about__principles-logo"></div>
                    <div class="about__principles-descr">
                        <div class="about__principles-title h3">Lorem Ipsum</div>
                        <p class="about__principles-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/service-img-top.svg" class="service__img-top">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/service-img-middle.svg" class="service__img-middle">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/vector1.svg" class="service__img-bottom">
    <div class="container">
        <div class="service__wrapper">
            <div class="service__title h1">Хто ми? </div>
            <p class="service__descr">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
            <div class="service__type">
                <div class="service__type-item">
                    <div class="service__type-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="service__type-logo"></div>
                    <div class="service__type-title h3">Будівництво</div>
                    <p class="service__type-text p">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                </div>
                <div class="service__type-item">
                    <div class="service__type-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="service__type-logo"></div>
                    <div class="service__type-title h3">Проектування</div>
                    <p class="service__type-text p">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                </div>
                <div class="service__type-item">
                    <div class="service__type-round"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/home.svg" alt="" class="service__type-logo"></div>
                    <div class="service__type-title h3">Development</div>
                    <p class="service__type-text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
                </div>
            </div>
            <div class="service__subtitle h3">Наші можливості</div>
            <p class="service__text">Lorem ipsum dolor sit amet consectetur. Nunc aliquet netus nulla quam. Id ultrices scelerisque nulla amet faucibus habitant mauris scelerisque. Vitae purus nunc turpis odio tristique nisl nisl sed dui. Amet euismod massa porttitor integer hendrerit.</p>
            <div class="service__technique">
                <button class="service__technique-title h3">Наш парк техніки<span class="arrow"></span></button>
                <div class="service__technique-list">
                    <p class="service__technique-item">Ескаватор 99999</p>
                    <p class="service__technique-item">Ескаватор 99999</p>
                    <p class="service__technique-item">Ескаватор 99999</p>
                    <p class="service__technique-item">Ескаватор 99999</p>
                    <p class="service__technique-item">Ескаватор 99999</p>
                    <p class="service__technique-item">Ескаватор 99999</p>
                    <p class="service__technique-item">Ескаватор 99999</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project-img.svg" class="project__img">
    <div class="container">
        <div class="project__wrapper">
            <div class="project__title h1">Проекти</div>
            <div class="project__grid">
                <a class="project__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="project__grid-img">
                </a>
                <a class="project__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="project__grid-img">
                </a>
                <a class="project__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="project__grid-img">
                </a>
                <a class="project__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="project__grid-img">
                </a>
            </div>
            <a class="project__btn btn">Дивитися ще</a>
        </div>
    </div>
</section>

<section class="news">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/news.svg" class="news__img">
    <div class="container">
        <div class="news__wrapper">
            <div class="news__title h1">Новини</div>
            <div class="news__grid">
                <a class="news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="news__grid-img">
                    <div class="news__grid-title h1">Lorem Ipsum</div>
                    <div class="news__grid-subtitle">Lorem Ipsum</div>
                </a>
                <a class="news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="news__grid-img">
                    <div class="news__grid-title h1">Lorem Ipsum</div>
                    <div class="news__grid-subtitle">Lorem Ipsum</div>
                </a>
                <a class="news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="news__grid-img">
                    <div class="news__grid-title h1">Lorem Ipsum</div>
                    <div class="news__grid-subtitle">Lorem Ipsum</div>
                </a>
                <a class="news__grid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/project.png" alt="" class="news__grid-img">
                    <div class="news__grid-title h1">Lorem Ipsum</div>
                    <div class="news__grid-subtitle p">Lorem Ipsum</div>
                </a>
            </div>
            <a class="news__btn btn">Дивитися ще</a>
        </div>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__title h1">Наші контакти</div>
            <div class="contacts__icons">
                <a href="#" class="contacts__round">
                    <span class="icon icon-facebook contacts__facebook"></span>
                </a>
                <a href="#" class="contacts__round">
                    <span class="icon icon-instagram contacts__instagram"></span>
                </a>
                <a href="#" class="contacts__round">
                    <span class="icon icon-youtube contacts__youtube"></span>
                </a>
            </div>
            <p class="contacts__adress">Киев ул. Товарная 1 <br> БЦ Тринити <br> Офис Ecobud building group</p>
            <a href="#" class="contacts__map">Дивитися на мапі<span class="contacts__map-telephone icon-map"></span></a>
            <div class="contacts__subtitle h3">Приеднуйся до нас</div>
            <p class="contacts__text">Lorem ipsum dolor sit amet consectetur. Nunc adipiscing id sit augue. Tellus ut mi diam et vestibulum euismod.</p>
            <div class="contacts__buttons">
                <p><span data-fancybox data-src="#hidden-content" class="contacts__buttons-btn btn">Як Кліент</span></p>
                <div id="hidden-content" class="contacts__popup_client contacts__popup">
                    <div class="contacts__popup-title h1">Приеднатися як кліент</div>
                    <p class="contacts__popup-text">Lorem ipsum dolor sit amet consectetur. Nunc adipiscing id sit augue. Tellus ut mi diam et vestibulum euismod.</p>
                    <form action="" class="contacts__popup-form">
                        <input type="text" placeholder="Ім’я" class="contacts__popup-input">
                        <input type="text" placeholder="Телефон" class="contacts__popup-input">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Повідомлення" class="contacts__popup-textarea"></textarea>
                        <button class="contacts__popup-btn">Надіслати</button>
                    </form>
                </div>
                <p><span data-fancybox data-src="#hidden-content-1" class="contacts__buttons-btn btn">Як Партнер</span></p>
                <div id="hidden-content-1" class="contacts__popup_partner contacts__popup">
                    <div class="contacts__popup-title h1">Приеднатися як партнер</div>
                    <p class="contacts__popup-text">Lorem ipsum dolor sit amet consectetur. Nunc adipiscing id sit augue. Tellus ut mi diam et vestibulum euismod.</p>
                    <form action="" class="contacts__popup_partner-form">
                        <input type="text" placeholder="Ім’я" class="contacts__popup-input">
                        <input type="text" placeholder="Телефон" class="contacts__popup-input">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Повідомлення" class="contacts__popup-textarea"></textarea>
                        <div class="contacts__popup-components">
                            <button class="contacts__popup-btn">Надіслати</button>
                            <a href="" class="contacts__popup-load">Додати Файл</a>
                            <a href="" class="contacts__popup-staple"><span class="icon icon-staple"></span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>

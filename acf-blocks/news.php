<section class="news" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
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

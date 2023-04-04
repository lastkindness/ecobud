<section class="project" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
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

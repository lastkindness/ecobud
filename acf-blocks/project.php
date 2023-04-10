<section class="project" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <?php if($bg_image = get_sub_field('bg_image')) : ?>
        <img src="<?php echo $bg_image['url'];?>" alt="background image" class="project__img">
    <?php endif ; ?>
    <div class="container">
        <div class="project__wrapper">
            <?php if($title = get_sub_field('title')) : ?>
                <div class="project__title h1"><?php echo $title;?></div>
            <?php endif ; ?>
            <?php $args = array(
                'post_type' => 'project',
                'posts_per_page' => 4
            );
            $query = new WP_Query( $args );
            ?>

            <?php if ( $query->have_posts() ) : ?>
                <div class="project__grid">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php $title = get_the_title();
                        $img = get_the_post_thumbnail_url();
                        $link = get_the_permalink();
                        $subtitle = get_field('subtitle');
                        ?>
                        <a href="<?php echo $link;?>" class="project__grid-item" data-aos="fade-up">
                            <?php if($img) : ?>
                                <img src="<?php echo $img;?>" alt="Project Image" class="project__grid-img">
                            <?php endif;?>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            <?php if($link = get_sub_field('more_link')) : ?>
                <a href="<?php echo $link['url'];?>" class="project__btn btn"><?php echo $link['title'];?></a>
            <?php endif ; ?>
        </div>
    </div>
</section>

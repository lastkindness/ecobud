<section class="news" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <?php if($bg_image = get_sub_field('bg_image')) : ?>
        <img src="<?php echo $bg_image;?>" alt="background image" class="news__img">
    <?php endif ; ?>
    <div class="container">
        <div class="news__wrapper">
            <?php if($title = get_sub_field('title')) : ?>
                <div class="news__title h1"><?php echo $title;?></div>
            <?php endif ; ?>

            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4
            );
            $query = new WP_Query( $args );
            ?>

            <?php if ( $query->have_posts() ) : ?>
                <div class="news__grid">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php $title = get_the_title();
                    $img = get_the_post_thumbnail_url();
                    $link = get_the_permalink();
                    $subtitle = get_field('subtitle');
                    ?>
                    <a href="<?php echo $link;?>" class="news__grid-item" data-aos="fade-up">
                        <?php if($img) : ?>
                            <img src="<?php echo $img;?>" alt="Post Image" class="news__grid-img">
                        <?php endif;?>
                        <div class="news__grid-content">
                            <div class="news__grid-title h1"><?php echo $title;?></div>
                            <?php if($subtitle) : ?>
                                <div class="news__grid-subtitle p"><?php echo $subtitle;?></div>
                            <?php endif;?>
                        </div>
                    </a>
                <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>


            <?php if($link = get_sub_field('link')) : ?>
                <a href="<?php echo $link['url'];?>" class="news__btn btn"><?php echo $link['title'];?></a>
            <?php endif ; ?>
        </div>
    </div>
</section>

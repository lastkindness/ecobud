<?php
/*
 * Template name: Content Page Template
 */

get_header(); ?>
    <section class="content-section">
        <div class="content-section__wrapper">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php the_post();
                the_content();?>
            </div>
        </div>
    </section>
<?php get_footer();

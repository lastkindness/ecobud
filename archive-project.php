<?php
get_header();

?>
<?php if (pll_current_language('slug') != 'en') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="portfolio">
    <div class="container">
        <div class="portfolio__wrapper">
            <h1 class="portfolio__title h1">
                <?php if ($current_lang == 'en') {
                    echo 'Projects';
                } else {
                    echo 'Проекти';
                }?>
            </h1>
            <div class="portfolio__tabs">
                <?php $taxonomies = get_object_taxonomies('project'); ?>
                <div class="tabs">
                    <ul class="tabs__nav">
                        <?php foreach ($taxonomies as $taxonomy) { $terms = get_terms($taxonomy); $i = 0;
                            foreach ($terms as $term) {
                                if($i==0) : echo '<li class="active">';
                                else : echo '<li>';
                                endif;
                                echo $term->name . '</li>';
                                $i++;
                            }
                        }?>
                    </ul>
                    <div class="tabs__grid__wrap">
                        <?php foreach ($taxonomies as $taxonomy) { $terms = get_terms($taxonomy); $i2 = 0;
                            foreach ($terms as $term) {
                                if($i2==0) : echo '<div class="tabs__grid active">';
                                else : echo '<div class="tabs__grid">';
                                endif;
                                $args = array(
                                    'post_type' => 'project',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'group',
                                            'field'     => 'term_id',
                                            'terms' => $term->term_id,
                                        )
                                    ),
                                );
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) {
                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        $title = get_the_title();
                                        $img = get_the_post_thumbnail_url();
                                        $link = get_the_permalink();
                                        $subtitle = get_field('subtitle'); ?>
                                        <a href="<?php echo $link; ?>" class="tabs__grid-item">
                                            <img src="<?php echo $img ?>" alt="<?php echo $title; ?>" class="tabs__grid-img">
                                        </a>
                                    <?php }
                                }
                                wp_reset_postdata();
                                echo '</div>';
                                $i2++;
                            }
                        }?>
                    </div>
                </div>
            </div>
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

?>

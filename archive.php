<?php
get_header();

?>
<?php if (pll_current_language('slug') != 'uk') : $current_lang = pll_current_language('slug'); endif; ?>
<section class="other-news">
    <div class="container">
        <div class="other-news__wrapper">
            <h1 class="other-news__title h1">
                <?php if (pll_current_language('slug') == 'en') {
                    echo 'News';
                } else {
                    echo 'Новини';
                }?>
            </h1>
            <div class="other-news__grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php $title = get_the_title();
                    $img = get_the_post_thumbnail_url();
                    $link = get_the_permalink();
                    $subtitle = get_field('subtitle');
                    ?>
                    <a href="<?php echo $link;?>" data-aos="fade-up" class="other-news__grid-item">
                        <?php if($img) : ?>
                            <img src="<?php echo $img;?>" alt="post image" class="other-news__grid-img">
                        <?php endif;?>
                        <div class="other-news__grid-content">
                            <h3 class="other-news__grid-title h3"><?php echo $title;?></h3>
                            <?php if($subtitle) : ?>
                                <div class="other-news__grid-subtitle"><?php echo $subtitle;?></div>
                            <?php endif;?>
                        </div>
                    </a>
                <?php endwhile;?>
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

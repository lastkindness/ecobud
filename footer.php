<?php $current_lang = pll_current_language('slug'); ?>
</main>
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__content">
                <?php if($footer_content = get_field('footer_content'.$current_lang, 'option')) : ?>
                    <div class="content"><?php echo $footer_content;?></div>
                <?php endif; ?>
                <?php if($socials = get_field('socials', 'option')) : ?>
                    <div class="contacts__icons">
                        <?php foreach ($socials as $item) : ?>
                            <a href="<?php echo $item['link'] ;?>" class="contacts__round">
                                <span class="icon icon-<?php echo $item['network'] ;?> contacts__<?php echo $item['network'] ;?>"></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($copyright = get_field('copyright', 'option')) : ?>
                <div class="footer__text"><?php echo $copyright;?></div>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</div>
</body>
</html>

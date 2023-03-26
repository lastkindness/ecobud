</main>
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__wrapper">
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

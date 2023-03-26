<?php $current_lang = pll_current_language('slug'); ?>
<section data-aos="fade-up" class="contacts" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <div class="container">
        <div class="contacts__wrapper">
            <?php if($title = get_sub_field('title')): ?>
                <div class="contacts__title h1"><?php echo $title;?></div>
            <?php endif ; ?>
            <?php if($socials = get_field('socials', 'option')) : ?>
                <div class="contacts__icons">
                    <?php foreach ($socials as $item) : ?>
                        <a href="<?php echo $item['link'] ;?>" class="contacts__round">
                            <span class="icon icon-<?php echo $item['network'] ;?> contacts__<?php echo $item['network'] ;?>"></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if($address = get_field('address'.$current_lang, 'option')) : ?>
                <p class="contacts__adress"><?php echo $address;?></p>
            <?php endif; ?>
            <?php if($map_link = get_field('map_link', 'option')) : ?>
                <a href="<?php echo $map_link;?>" class="contacts__map">
                    <?php if($subtitle_map = get_sub_field('subtitle_map')): ?>
                        <?php echo $subtitle_map;?>
                    <?php endif ; ?>
                    <span class="contacts__map-telephone icon-map"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

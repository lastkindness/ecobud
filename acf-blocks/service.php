<section class="service" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <?php if($bg_image = get_sub_field('bg_image')) : ?>
        <img src="<?php echo $bg_image['url'];?>" alt="<?php echo $bg_image['alt'];?>" class="service__img-top">
    <?php endif ; ?>
    <?php if($bg_image2 = get_sub_field('bg_image_2')) : ?>
        <img src="<?php echo $bg_image2['url'];?>" alt="<?php echo $bg_image2['alt'];?>" class="service__img-middle">
    <?php endif ; ?>
    <?php if($bg_image3 = get_sub_field('bg_image_3')) : ?>
        <img src="<?php echo $bg_image3['url'];?>" alt="<?php echo $bg_image3['alt'];?>" class="service__img-bottom">
    <?php endif ; ?>
    <div class="container">
        <div class="service__wrapper">
            <?php if($title = get_sub_field('title')) : ?>
                <div class="service__title h1"><?php echo $title;?></div>
            <?php endif ; ?>
            <?php if($text = get_sub_field('text')) : ?>
                <p class="service__descr"><?php echo $text;?></p>
            <?php endif ; ?>
            <?php if($items = get_sub_field('items')): ?>
            <div class="service__type">
                <?php foreach ($items as $item) : ?>
                    <div class="service__type-item">
                        <?php if($icon = $item['icon']) : ?>
                            <div class="service__type-round"><img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" class="service__type-logo"></div>
                        <?php endif ; ?>
                        <?php if($title = $item['title']) : ?>
                            <div class="service__type-title h3"><?php echo $title;?></div>
                        <?php endif ; ?>
                        <?php if($text = $item['text']) : ?>
                            <p class="service__type-text p"><?php echo $text;?></p>
                        <?php endif ; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif ; ?>
            <?php if($title_2 = get_sub_field('title_2')) : ?>
                <div class="service__subtitle h3"><?php echo $title_2;?></div>
            <?php endif ; ?>
            <?php if($text_2 = get_sub_field('text_2')) : ?>
                <p class="service__text"><?php echo $text_2;?></p>
            <?php endif ; ?>
            <?php if($accordions = get_sub_field('accordions')): ?>
                <?php foreach ($accordions as $item) : ?>
                    <div class="service__technique accordion">
                        <?php if($title = $item['title']) : ?>
                            <h3 class="service__technique-title h3 accordion__title">
                                <span class="title"><?php echo $title;?></span>
                                <span class="arrow"></span>
                            </h3>
                        <?php endif ; ?>
                        <?php if($text = $item['text']) : ?>
                            <div class="service__technique-list accordion__list">
                                <p class="service__technique-item"><?php echo $text;?></p>
                            </div>
                        <?php endif ; ?>
                    </div>
                <?php endforeach ; ?>
            <?php endif ; ?>
        </div>
    </div>
</section>

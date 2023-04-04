<section class="principles" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <div class="container">
        <div class="principles__wrapper">
            <?php if($title = get_sub_field('title')) : ?>
                <h2 class="principles__title h2"><?php echo $title;?></h2>
            <?php endif ; ?>
            <?php if($subtitle = get_sub_field('subtitle')) : ?>
                <h3 class="principles__subtitle h3"><?php echo $subtitle;?></h3>
            <?php endif ; ?>
            <?php if($items = get_sub_field('items')): ?>
                <div class="principles__grid">
                    <?php foreach ($items as $item) : ?>
                        <div class="principles__item">
                            <?php if($icon = $item['icon']) : ?>
                                <div class="principles__round">
                                    <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>" class="principles__logo">
                                </div>
                            <?php endif ; ?>
                            <div class="principles__descr">
                                <?php if($title = $item['title']) : ?>
                                    <div class="principles__title h3"><?php echo $title;?></div>
                                <?php endif ; ?>
                                <?php if($text = $item['text']) : ?>
                                    <p class="principles__text"><?php echo $text;?></p>
                                <?php endif ; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif ; ?>
        </div>
    </div>
</section>

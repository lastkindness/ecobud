<section class="about" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <?php if($bg_image = get_sub_field('bg_image')) : ?>
        <img src="<?php echo $bg_image['url'];?>" alt="<?php echo $bg_image['alt'];?>" class="about__img">
    <?php endif ; ?>
    <div class="container">
        <div class="about__wrapper">
            <?php if($title = get_sub_field('title')) : ?>
                <div class="about__title h1"><?php echo $title;?></div>
            <?php endif ; ?>
            <?php if($text = get_sub_field('text')) : ?>
                <p class="about__text"><?php echo $text;?></p>
            <?php endif ; ?>
            <?php if($subtitle = get_sub_field('subtitle')) : ?>
                <div class="about__subtitle h2"><?php echo $subtitle;?></div>
            <?php endif ; ?>
            <?php if($items = get_sub_field('items')): ?>
                <div class="about__photo">
                    <?php foreach ($items as $item) : ?>
                        <div class="about__photo-item">
                            <?php if($photo = $item['photo']) : ?>
                                <img src="<?php echo $photo['url'];?>" alt="<?php echo $photo['alt'];?>" class="about__photo-img">
                            <?php endif ; ?>
                            <?php if($title = $item['title']) : ?>
                                <div class="about__photo-title h4"><?php echo $title;?></div>
                            <?php endif ; ?>
                            <?php if($subtitle = $item['subtitle']) : ?>
                                <p class="about__photo-text"><?php echo $subtitle;?></p>
                            <?php endif ; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif ; ?>
        </div>
    </div>
</section>

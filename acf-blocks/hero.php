<section class="hero" data-aos="fade-up" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <?php if($hero_slider = get_sub_field('slider')): ?>
    <div class="hero__wrapper">
        <div class="hero__slider <?php if (count($hero_slider)>1) : echo ' swiper mySwiper2'; endif ; ?>">
            <div class="hero__slides <?php if (count($hero_slider)>1) : echo ' swiper-wrapper'; endif ; ?>">
                <?php foreach ($hero_slider as $slide) : ?>
                    <div class="hero__slide <?php if (count($hero_slider)>1) : echo ' swiper-slide'; endif ; ?>">
                        <?php if($image = $slide['image']) : ?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="hero__slide-img"/>
                        <?php endif ; ?>
                        <div class="hero__slide-content">
                            <?php if($tag = $slide['tag']) : ?>
                                <p class="hero__slide-tag"><?php echo $tag;?></p>
                            <?php endif ; ?>
                            <?php if($title = $slide['title']) : ?>
                                <h2 class="h2 hero__slide-title"><?php echo $title;?></h2>
                            <?php endif ; ?>
                            <?php if($text = $slide['text']) : ?>
                                <p class="hero__slide-text"><?php echo $text;?></p>
                            <?php endif ; ?>
                            <?php if($link = $slide['link']) : ?>
                                <a href="<?php echo $link['url'];?>" class="hero__slide-btn btn btn_blue"><?php echo $link['title'];?></a>
                            <?php endif ; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (count($hero_slider)>1) : ?>
                <div class="hero__pagination swiper-pagination"></div>
            <?php endif ; ?>
        </div>
        <?php if (count($hero_slider)>1) : ?>
            <div class="hero__gallery swiper mySwiper">
                <div class="hero__thumbs swiper-wrapper">
                    <?php foreach ($hero_slider as $slide) : ?>
                        <div class="hero__thumb swiper-slide">
                            <?php if($image = $slide['image']) : ?>
                                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['url'];?>" class="hero__thumb-img">
                            <?php endif ; ?>
                            <?php if($title = $slide['title']) : ?>
                                <div class="hero__thumb-subtitle"><?php echo $title;?></div>
                            <?php endif ; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="hero__arrows">
                    <div class="swiper-button-prev hero__thumb-arrowl"></div>
                    <div class="swiper-button-next hero__thumb-arrowr"></div>
                </div>
            </div>
        <?php endif ; ?>
    </div>
    <?php endif ; ?>
</section>

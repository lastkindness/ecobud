<section data-aos="fade-up" class="contacts" <?php if($id = get_sub_field('id')): echo 'id="' . $id . '"'; endif;?>>
    <div class="container">
        <div class="contacts__wrapper">
            <?php if($title = get_sub_field('title')): ?>
                <div class="contacts__subtitle h3"><?php echo $title;?></div>
            <?php endif ; ?>
            <?php if($description = get_sub_field('description')): ?>
                <p class="contacts__text"><?php echo $description;?></p>
            <?php endif ; ?>
            <div class="contacts__buttons">
                <?php  if( have_rows('client')): while(have_rows('client')): the_row(); ?>
                    <?php if($title = get_sub_field('title')): ?>
                        <p><span data-fancybox data-src="#hidden-content" class="contacts__buttons-btn btn"><?php echo $title;?></span></p>
                    <?php endif ; ?>
                    <div id="hidden-content" class="contacts__popup_client contacts__popup">
                        <?php if($bgimg = get_sub_field('bgimg')): ?>
                            <img src="<?php echo $bgimg['url'];?>" alt="<?php echo $bgimg['alt'];?>" class="contacts__popup-img">
                        <?php endif ; ?>
                        <?php if($bgimg_bt = get_sub_field('bgimg_bt')): ?>
                            <img src="<?php echo $bgimg_bt['url'];?>" alt="<?php echo $bgimg_bt['alt'];?>" class="contacts__popup-img-bottom">
                        <?php endif ; ?>
                        <?php if($subtitle = get_sub_field('subtitle')): ?>
                            <div class="contacts__popup-title h1"><?php echo $subtitle;?></div>
                        <?php endif ; ?>
                        <?php if($description = get_sub_field('description')): ?>
                            <p class="contacts__popup-text"><?php echo $description;?></p>
                        <?php endif ; ?>
                        <?php if($form_shortcode = get_sub_field('form_shortcode')): ?>
                            <div class="contacts__popup-form">
                                <?php echo do_shortcode($form_shortcode); ?>
                            </div>
                        <?php endif ; ?>
    <!--                    <form action="" class="contacts__popup-form">
                            <input type="text" placeholder="Ім’я" class="contacts__popup-input">
                            <input type="text" placeholder="Телефон" class="contacts__popup-input">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Повідомлення" class="contacts__popup-textarea"></textarea>
                            <button class="contacts__popup-btn">Надіслати</button>
                        </form>-->
                    </div>
                <?php endwhile; endif; ?>
                <?php if(have_rows('partner')): while(have_rows('partner')): the_row(); ?>
                    <?php if($title = get_sub_field('title')): ?>
                        <p><span data-fancybox data-src="#hidden-content-1" class="contacts__buttons-btn btn"><?php echo $title;?></span></p>
                    <?php endif ; ?>
                    <div id="hidden-content-1" class="contacts__popup_partner contacts__popup">
                        <?php if($bgimg = get_sub_field('bgimg')): ?>
                            <img src="<?php echo $bgimg['url'];?>" alt="<?php echo $bgimg['alt'];?>" class="contacts__popup-img">
                        <?php endif ; ?>
                        <?php if($bgimg_bt = get_sub_field('bgimg_bt')): ?>
                            <img src="<?php echo $bgimg_bt['url'];?>" alt="<?php echo $bgimg_bt['alt'];?>" class="contacts__popup-img-bottom">
                        <?php endif ; ?>
                        <?php if($subtitle = get_sub_field('subtitle')): ?>
                            <div class="contacts__popup-title h1"><?php echo $subtitle;?></div>
                        <?php endif ; ?>
                        <?php if($description = get_sub_field('description')): ?>
                            <p class="contacts__popup-text"><?php echo $description;?></p>
                        <?php endif ; ?>
                        <?php if($form_shortcode = get_sub_field('form_shortcode')): ?>
                            <div class="contacts__popup-form">
                                <?php echo do_shortcode($form_shortcode); ?>
                            </div>
                        <?php endif ; ?>
<!--                        <form action="" class="contacts__popup_partner-form">
                            <input type="text" placeholder="Ім’я" class="contacts__popup-input">
                            <input type="text" placeholder="Телефон" class="contacts__popup-input">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Повідомлення" class="contacts__popup-textarea"></textarea>
                            <div class="contacts__popup-components">
                                <button class="contacts__popup-btn">Надіслати</button>
                                <a href="" class="contacts__popup-load">Додати Файл</a>
                                <a href="" class="contacts__popup-staple"><span class="icon icon-staple"></span></a>
                            </div>
                        </form>-->
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
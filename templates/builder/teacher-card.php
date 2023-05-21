<?php
$tch_title = get_sub_field('title');
$tch_description = get_sub_field('description');
$tch_description2 = get_sub_field('description2');
$tch_description_red = get_sub_field('description-red');
$tch_description_red2 = get_sub_field('description-red2');
$tch_img = get_sub_field('img');
$tch_img768 = get_sub_field('img-mini');

pll_register_string(
    'tch_title', 
    $tch_title, 
    'tch'
);
pll_register_string(
    'tch_desc_1', 
    $tch_description, 
    'tch'
);
pll_register_string(
    'tch_desc_2', 
    $tch_description2, 
    'tch'
);
pll_register_string(
    'tch_desc_red_1', 
    $tch_description_red, 
    'tch'
);
pll_register_string(
    'tch_desc_red_2', 
    $tch_description_red2, 
    'tch'
);
?>

<div class="teacher__card">
    <div class="card__text">
        <h2 class="main__title"><?php echo esc_html(pll__($tch_title)); ?></h2>
        <p class="main__subtitle">
            <span class="main__text-red"><?php echo esc_html(pll__($tch_description_red)); ?></span>
            <?php echo esc_html(pll__($tch_description)); ?>
            <span class="main__text-red" style="border-bottom: 3px solid #DC3F31;"><?php echo esc_html(pll__($tch_description_red2)); ?></span>
            <?php echo esc_html(pll__($tch_description2)); ?>
        </p>
    </div>
    <div class="teacher__img">
        <img src="<?php echo wp_get_attachment_image_url($tch_img, 'full'); ?>" alt="">
    </div>
    <div class="teacher__img-mini">
        <img src="<?php echo wp_get_attachment_image_url($tch_img768, 'full'); ?>" alt="">
    </div>
    <div class="elips"></div>
</div>
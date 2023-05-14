<?php
$tch_title = get_sub_field('title');
$tch_description = get_sub_field('description');
$tch_description2 = get_sub_field('description2');
$tch_description_red = get_sub_field('description-red');
$tch_description_red2 = get_sub_field('description-red2');
$tch_img = get_sub_field('img');
$tch_img768 = get_sub_field('img-mini');
?>

<div class="teacher__card">
    <div class="card__text">
        <h2 class="main__title"><?php echo $tch_title ?></h2>
        <p class="main__subtitle">
            <span class="main__text-red"><?php echo $tch_description_red ?></span>
            <?php echo $tch_description ?>
            <span class="main__text-red" style="border-bottom: 3px solid #DC3F31;"><?php echo $tch_description_red2 ?></span>
            <?php echo $tch_description2 ?>
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
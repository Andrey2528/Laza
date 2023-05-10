<?php

$title = get_sub_field('title');
$repeat_video_desc = get_sub_field('repeat');

$description1 = get_sub_field("description1");
$video1 = get_sub_field('video1');

$description2 = get_sub_field("description2");
$video2 = get_sub_field('video2');

$description3 = get_sub_field("description3");
$video3 = get_sub_field('video3');

$description4 = get_sub_field("description4");
$video4 = get_sub_field('video4');

?>

<h2 class="main__title"><?php echo $title ?></h2>

<?php if(get_sub_field('repeat') == '1') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <div class="lesson__video">
        <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video1, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
<?php elseif(get_sub_field('repeat') == '2') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <div class="lesson__video">
        <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video1, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description2 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video2, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
<?php elseif(get_sub_field('repeat') == '3') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video1, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description2 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video2, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description3 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video3, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
<?php elseif(get_sub_field('repeat') == '4') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video1, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description2 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video2, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description3 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video3, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description4 ?></p>
        <div class="lesson__video">
            <div class="video__container">
                <img src="<?php echo wp_get_attachment_image_url($video4, 'full'); ?>" alt="">
            </div>
        </div>
    </div>
<?php endif; ?>

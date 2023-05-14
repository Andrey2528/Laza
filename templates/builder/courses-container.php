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

<h1 class="main__title"><?php echo $title ?></h1>

<?php if(get_sub_field('repeat') == '1') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
    </div>
<?php elseif(get_sub_field('repeat') == '2') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description2 ?></p>
        <p class="singe-lesson__video"><?php echo $video2 ?></p>
    </div>
<?php elseif(get_sub_field('repeat') == '3') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description2 ?></p>
        <p class="singe-lesson__video"><?php echo $video2 ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description3 ?></p>
        <p class="singe-lesson__video"><?php echo $video3 ?></p>
    </div>
<?php elseif(get_sub_field('repeat') == '4') : ?>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description1 ?></p>
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description2 ?></p>
        <p class="singe-lesson__video"><?php echo $video2 ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description3 ?></p>
        <p class="singe-lesson__video"><?php echo $video3 ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="main__desc"><?php echo $description4 ?></p>
        <p class="singe-lesson__video"><?php echo $video4 ?></p>
    </div>
<?php endif; ?>

<?php 
    echo do_shortcode( 
        '[contact-form-7 id="114" title="Form on lesson page"]' 
    ); 
?>
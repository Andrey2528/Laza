<?php
$lessons = get_posts(array(
    'post_type' => 'lesson',
    'posts_per_page' => -1,
    'post_status' => 'publish',
));
$lesson_id = $lesson->ID;

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

pll_register_string(
    'Lesson: ' . $lesson_id, 
    $title, 
    'Lesson'
);
pll_register_string(
    'Lesson: ' . $lesson_id, 
    $description1, 
    'Lesson'
);
pll_register_string(
    'Lesson: ' . $lesson_id, 
    $description2, 
    'Lesson'
);
pll_register_string(
    'Lesson: ' . $lesson_id, 
    $description3, 
    'Lesson'
);
pll_register_string(
    'Lesson: ' . $lesson_id, 
    $description4, 
    'Lesson'
);

    
?>

<h1 class="main__title"><?php echo esc_html(pll__($title)); ?></h1>

<?php if(get_sub_field('repeat') == '1') : ?>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
        <p class="main__desc"><?php echo esc_html(pll__($description1)); ?></p>
    </div>
<?php elseif(get_sub_field('repeat') == '2') : ?>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description1)); ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video2 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description2)); ?></p>
    </div>
<?php elseif(get_sub_field('repeat') == '3') : ?>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description1)); ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video2 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description2)); ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video3 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description3)); ?></p>
    </div>
<?php elseif(get_sub_field('repeat') == '4') : ?>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video1 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description1)); ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video2 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description2)); ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video3 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description3)); ?></p>
    </div>
    <div class="lesson__block-repeat">
        <p class="singe-lesson__video"><?php echo $video4 ?></p>
        <p class="main__desc"><?php echo sc_html(pll__($description4)); ?></p>
    </div>
<?php endif; ?>

<?php 
    if(pll_current_language() == 'ru'){
        echo do_shortcode( 
            '[contact-form-7 id="114" title="Form on lesson page"]' 
        ); 
    } elseif (pll_current_language() == 'en') {
        echo do_shortcode( 
            '[contact-form-7 id="272" title="Form on lesson page en"]' 
        ); 
    } elseif (pll_current_language() == 'de') {
        echo do_shortcode( 
            '[contact-form-7 id="274" title="Form on lesson page de"]' 
        ); 
    } elseif (pll_current_language() == 'ka') {
        echo do_shortcode( 
            '' 
        ); 
    } elseif (pll_current_language() == 'tr') {
        echo do_shortcode( 
            '[contact-form-7 id="275" title="Form on lesson page tr"]' 
        ); 
    } elseif (pll_current_language() == 'pl') {
        echo do_shortcode( 
            '[contact-form-7 id="276" title="Form on lesson page pl"]' 
        ); 
    }
    
?>
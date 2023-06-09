<?php 
$lessons = get_posts(array(
    'post_type' => 'lesson',
    'posts_per_page' => -1,
    'post_status' => 'publish',
));
$lesson_id = $lesson->ID;

$header_fields = get_field('header', $post->ID);
$title = $header_fields['title'];
$sub_title = $header_fields['subtitle'];
$uri = get_post_permalink($post->ID);
$aviable = $header_fields['availability'];

pll_register_string(
    'Lesson: ' . $lesson_id, 
    $title, 
    'Lesson'
);
pll_register_string(
    'Lesson: ' . $lesson_id, 
    $sub_title, 
    'Lesson'
);
?>

<?php if($aviable == 'Available') : ?>
    <li class="archive__item">
        <a href="<?php echo $uri ?>" class="accordion">
            <p class="main__title">
                <?php echo esc_html(pll__($title)); ?>
            </p>
        </a>
        <div class="accordion__item">
            <a href="<?php echo $uri ?>" class="main__subtitle"><?php echo esc_html(pll__($sub_title)); ?></a>
        </div>
    </li>
<?php elseif($aviable == 'Not_available') : ?>
    <li class="archive__item Not_available">
        <p class="main__title">
            <?php echo esc_html(pll__($title)); ?>
        </p>
    </li>
<?php endif; ?>
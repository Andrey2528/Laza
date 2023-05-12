<?php

/**
 * The template for displaying archive pages
 * 
 * Template Name: Archive Lesson
 *
 */

get_header();

$categories = get_lesson_categories();
$lessons = get_lessons_pagination();

?>

<main>
    <section class="archive-lesson">
        <div class="archive-lesson__bgimg1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy1.png" alt="">
        </div>
        <div class="archive-lesson__bgimg2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy2.png" alt="">
        </div>
        <div class="container">
            <h1 class="main__title">Курсы</h1>
            <div id="lesson-list" class="container container__archive-list">
                <ul class="archive__list">
                    <?php echo $lessons['html']; ?>  
                </ul>
            </div>
        </div>
    </section>   
</main>

<?php get_footer(); ?>
<?php
/**
* Template Name: Single Lesson
* Post Type: lesson
*/
get_header();
?>

<main>
    <section class="single-lesson">
        <div class="single-lesson__bgimg1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy1.png" alt="">
        </div>
        <div class="single-lesson__bgimg2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy2.png" alt="">
        </div>
        <div class="container">
            <?php
                if (have_rows('builder')) :
                    while (have_rows('builder')) : the_row();
                        get_template_part('templates/builder/' . get_row_layout());
                    endwhile;
                endif;
            ?>
        </div>
    </section> 
</main>

<?php get_footer(); ?>  
<?php
/**
* Template Name: Single Lesson
* Post Type: lesson
*/
get_header();
?>

<main>
    <section class="single-lesson">
        <header class="page-header">
            <div class="container">
                <div class="page-header__row">
                    <a href="/" class="page-header__logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.png" alt="">
                    </a>
                    <div class="lang">
                        <div class="dropdown">
                            <button class="dropdown-toggle main__desc" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo esc_html(pll__('Язык')); ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <ul>
                                    <?php pll_the_languages();?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
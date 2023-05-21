<?php

/**
 * The template for displaying archive pages
 * 
 * Template Name: Archive Lesson
 *
 */
get_header();
$lessons = get_lessons_pagination();
?>

<main>
    <section class="archive-lesson">
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
        <div class="archive-lesson__bgimg1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy1.png" alt="">
        </div>
        <div class="archive-lesson__bgimg2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy2.png" alt="">
        </div>
        <div class="container">
            <h1 class="main__title"><?php echo esc_html(pll__('Курсы'));?></h1>
            <ul class="archive__list">
                <?php echo $lessons['html']; ?>  
            </ul>
        </div>
    </section>   
</main>

<?php get_footer(); ?>
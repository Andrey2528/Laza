<?php
/**
 *
 * Template Name: teacher page
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Laza
 */
get_header();
?>

    <main>
        <div class="wrapper">
            <section class="teacher-page">
                <header class="page-header">
                    <div class="container">
                        <div class="page-header__row">
                            <a href="/" class="page-header__logo">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.png" alt="">
                            </a>
                            <div class="lang">
                                <div class="dropdown">
                                    <button class="dropdown-toggle main__desc" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Язык
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
                <div class="container">
                    <h1 class="main__title">Преподаватели</h1>
                    <ul class="teacher-page__list">
                        <?php
                            if (have_rows('teacher-page-builder')) :
                                while (have_rows('teacher-page-builder')) : the_row();
                                    get_template_part('templates/builder/' . get_row_layout());
                                endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
            </section>
        </div>
    </main>

<?php get_footer();?>
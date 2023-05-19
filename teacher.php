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
<?php

/** 
*   Template Name: single-lesson-builder 
*   Template Post Type: post 
*   @package Laza
*/

get_header();

?>

<main>
    <section class="lesson">
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
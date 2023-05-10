<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laza
 */

?>

    <footer class="footer">
    <?php wp_footer();?>
        <div class="container">
            <div class="footer__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/miniLogo.svg" alt="">
            </div>
            <p class="main__desc">Powered by Zhukov Andrey</p>
        </div>
    </footer>
    </body>
</html>
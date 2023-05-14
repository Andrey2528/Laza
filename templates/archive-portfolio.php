<?php 
$header_fields = get_field('header', $post->ID);
$title = $header_fields['title'];
$sub_title = $header_fields['subtitle'];
$uri = get_post_permalink($post->ID);
$aviable = $header_fields['availability'];
?>

<?php if($aviable == 'Available') : ?>
    <li class="archive__item">
        <a href="<?php echo $uri ?>" class="accordion">
            <p class="main__title">
                <?php echo $title; ?>
            </p>
        </a>
        <div class="accordion__item">
            <a href="<?php echo $uri ?>" class="main__subtitle"><?php echo $sub_title ?></a>
        </div>
    </li>
<?php elseif($aviable == 'Not_available') : ?>
    <li class="archive__item Not_available">
        <p class="main__title">
            <?php echo $title; ?>
        </p>
    </li>
<?php endif; ?>
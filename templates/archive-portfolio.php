<?php 
$header_fields = get_field('header', $post->ID);
$title = $header_fields['title'];
$sub_title = $header_fields['subtitle'];
$uri = get_post_permalink($post->ID);
$aviable = $header_fields['availability'];
?>

<?php if($aviable == 'Available') : ?>
        <a href="<?php echo $uri ?>" class="main__title"><?php echo $title; ?></a>
        <li class="archive__item">
            <a href="<?php echo $uri ?>" class="main__subtitle"><?php echo $sub_title ?></a>
        </li>
    <?php elseif($aviable == 'Not_available') : ?>
        <div class="item-contaner">
            <a href="<?php echo $uri ?>" class="main__title"><?php echo $title; ?></a>
            <li class="archive__item">
                <a href="<?php echo $uri ?>" class="main__subtitle "><?php echo $sub_title ?></a>
            </li>
        </div>
<?php endif; ?>
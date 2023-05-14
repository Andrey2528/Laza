<?php 
$header_fields = get_field('header', $post->ID);
$title = $header_fields['title'];
$sub_title = $header_fields['subtitle'];
$uri = get_post_permalink($post->ID);
$aviable = $header_fields['availability'];
?>

<?php if($aviable == 'Available') : ?>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header">
                <p class="main__title"><?php echo $title; ?></p>
            </div>
            <div class="accordion-content">
                <a href="<?php echo $uri ?>" class="main__subtitle"><?php echo $sub_title ?></a>
            </div>
        </div>
    </div>
    <?php elseif($aviable == 'Not_available') : ?>
        <div class="item-contaner">
            <div class="accordion-header">
                <p class="main__title"><?php echo $title; ?></p>    
            </div>
            <div class="accordion-content">
                <a href="<?php echo $uri ?>" class="main__subtitle"><?php echo $sub_title ?></a>
            </div>
        </div>
<?php endif; ?>
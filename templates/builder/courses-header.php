<?php
$project_title = get_sub_field('title');
$project_subtitle = get_sub_field('subtitle');
?>



<div class="card">
    <div class="container">
        <div class="card__row">
            <div class="card__item-column card__about">
                <h2 class="main__title"><?php echo $project_title; ?></h2>
                <div>
                    <p class="main__desc">
                        <span>
                            <?php echo $project_subtitle; ?>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusantium suscipit illum aliquid provident temporibus beatae deserunt id modi animi architecto nemo cum cumque, maiores repudiandae error! Eum, assumenda corporis.</p>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

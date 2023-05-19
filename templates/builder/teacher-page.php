<?php
$choose_number_teacher = get_sub_field('choose_number_teacher');
$number_of_text_list_item = get_sub_field('number_of_text_list_item');
$number_of_text_list = get_sub_field('number_of_text_list');
$chose_number_of_style_teacher_desc = get_sub_field('chose_number_of_style_teacher_desc');

$tch_img = get_sub_field('teacher-images');
$insta_link_bool = get_sub_field('insta-link-bool');
$insta_link = get_sub_field('insta-link');
$teacher_name = get_sub_field('teacher-name');

$teacher_description1 = get_sub_field('teacher_description_1');
$teacher_description2 = get_sub_field('teacher_description_2');
$teacher_description3 = get_sub_field('teacher_description_3');
$teacher_description4 = get_sub_field('teacher_description_4');
$teacher_description5 = get_sub_field('teacher_description_5');
$teacher_description6 = get_sub_field('teacher_description_6');
$teacher_description7 = get_sub_field('teacher_description_7');
$teacher_description8 = get_sub_field('teacher_description_8');
$teacher_description9 = get_sub_field('teacher_description_9');
$teacher_description10 = get_sub_field('teacher_description_10');
$teacher_description11 = get_sub_field('teacher_description_11');
$teacher_description12 = get_sub_field('teacher_description_12');
$teacher_description13 = get_sub_field('teacher_description_13');
$teacher_description14 = get_sub_field('teacher_description_14');
$teacher_description15 = get_sub_field('teacher_description_15');

$teacher_description_list_item1 = get_sub_field('teacher_description_list_item_1');
$teacher_description_list_item2 = get_sub_field('teacher_description_list_item_2');
$teacher_description_list_item3 = get_sub_field('teacher_description_list_item_3');
$teacher_description_list_item4 = get_sub_field('teacher_description_list_item_4');
$teacher_description_list_item5 = get_sub_field('teacher_description_list_item_5');
$teacher_description_list_item6 = get_sub_field('teacher_description_list_item_6');
$teacher_description_list_item7 = get_sub_field('teacher_description_list_item_7');
$teacher_description_list_item8 = get_sub_field('teacher_description_list_item_8');
$teacher_description_list_item9 = get_sub_field('teacher_description_list_item_9');
$teacher_description_list_item10 = get_sub_field('teacher_description_list_item_10');
$teacher_description_list_item11 = get_sub_field('teacher_description_list_item_11');
$teacher_description_list_item12 = get_sub_field('teacher_description_list_item_12');
$teacher_description_list_item13 = get_sub_field('teacher_description_list_item_13');
$teacher_description_list_item14 = get_sub_field('teacher_description_list_item_14');
$teacher_description_list_item15 = get_sub_field('teacher_description_list_item_15');
$teacher_description_list_item15 = get_sub_field('teacher_description_list_item_15');

?>

<li class="teacher-page__item">
    <div class="item__row">
        <div class="item__column-half">
            <div class="item__img-card">
            <?php
                switch ($choose_number_teacher) {
                    case '1':
                        $imgClass = 'img1';
                        break;
                    case '2':
                        $imgClass = 'img2';
                        break;
                    case '3':
                        $imgClass = 'img3';
                        break;
                    default:
                        $imgClass = '';
                        break;
                }
            ?>
            <img src="<?php echo wp_get_attachment_image_url($tch_img, 'full'); ?>" alt="img" class="<?php echo $imgClass; ?>">

                <div class="elips"></div>
            </div>
            <?php if ($insta_link_bool == 'yes') { ?>
                <a href="<?php echo $insta_link ?>" class="item__link-inst">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/other/inst.png" alt="">
                    <?php echo $insta_link ?>
                </a>
            <?php } ?>
        </div>
        <div class="item__column-half">
        <?php if ($chose_number_of_style_teacher_desc == '1') { ?>
                <div class="item__text-description">
                    <h2 class="main__subtitle"><?php echo $teacher_name; ?></h2>
                    <p class="main__desc"><span><?php echo $teacher_description1; ?></span></p>
                    <p class="main__desc"><?php echo $teacher_description2; ?></p>
                    <p class="main__desc"><?php echo $teacher_description3; ?></p>
                    <p class="main__desc"><?php echo $teacher_description4; ?></p>
                    <ul class="main__desc-list">
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item1; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item2; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item3; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item4; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item5; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item6; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item7; ?>
                        </li>
                    </ul>
                    <p class="main__desc"><?php echo $teacher_description5; ?></p>
                    <p class="main__desc"><?php echo $teacher_description6; ?><br><?php echo $teacher_description7; ?></p>
                    <p class="main__desc"><?php echo $teacher_description8; ?></p>
                    <p class="main__desc"><?php echo $teacher_description9; ?></p>
                    <p class="main__desc"><?php echo $teacher_description10; ?></p>
                </div>
            <?php } elseif ($chose_number_of_style_teacher_desc == '2') { ?>
                <div class="item__text-description">
                    <h2 class="main__subtitle"><?php echo $teacher_name; ?></h2>
                    <p class="main__desc"><span><?php echo $teacher_description1; ?></span></p>
                    <p class="main__desc"><?php echo $teacher_description2; ?></p>
                    <ul class="main__desc-list">
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item1; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item2; ?>
                        </li>
                    </ul>
                    <p class="main__desc"><?php echo $teacher_description3; ?></p>
                    <ul class="main__desc-list">
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item3; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item4; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item5; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item6; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item7; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item8; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item9; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item10; ?>
                        </li>
                    </ul>
                    <p class="main__desc"><?php echo $teacher_description4; ?></p>
                    <ul class="main__desc-list">
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item11; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item12; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item13; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item14; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item15; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item16; ?>
                        </li>
                    </ul>
                    <p class="main__desc"><?php echo $teacher_description5; ?></p>
                    <p class="main__desc"><?php echo $teacher_description6; ?></p>
                </div>
            <?php } elseif ($chose_number_of_style_teacher_desc == '3') { ?>
                <div class="item__text-description">
                    <h2 class="main__subtitle"><?php echo $teacher_name; ?></h2>
                    <p class="main__desc"><span><?php echo $teacher_description1; ?></span></p>
                    <p class="main__desc"><?php echo $teacher_description2; ?></p>
                    <p class="main__desc"><?php echo $teacher_description3; ?></p>
                    <ul class="main__desc-list">
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item1; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item2; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item3; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item4; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item5; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item6; ?>
                        </li>
                        <li class="main__desc-item">
                            <div class="elips-text"></div>
                            <?php echo $teacher_description_list_item7; ?>
                        </li>
                    </ul>
                    <p class="main__desc"><?php echo $teacher_description4; ?></p>
                    <p class="main__desc"><?php echo $teacher_description5; ?></p>
                    <p class="main__desc"><?php echo $teacher_description6; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</li>
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
        <div class="archive-lesson__bgimg1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy1.png" alt="">
        </div>
        <div class="archive-lesson__bgimg2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy2.png" alt="">
        </div>
        <div class="container">
            <h1 class="main__title">Курсы</h1>

            <section class="form">
                <div class="container">
                    <div class="input__column">
                        <h2 class="main__title">Обратная связь</h2>
                        <input type="text" class="input__text" name="your-name" placeholder="КАК К ВАМ ОБРАЩАТСЯ?">
                        <p class="main__desc">Оставьте ссылку на домашнюю работу:</p>
                        <div class="form__textarea">
                            <textarea name="project-description" id=""></textarea>
                        </div>
                        <div class="form__select">
                            <div class="input__wrapper">
                                <label for="file-input" id="file-label" class="input__file-button main__btn">
                                    <p class="input__file-button-text">Выберите файл</p>
                                </label>
                                <input type="file" id="file-input" accept=".xls,.pdf" style="display: none;">
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="main__btn">Отправить</button>
                        </div>
                    </div>
                </div>
            </section>

            <ul class="archive__list">
                <?php echo $lessons['html']; ?>  
            </ul>
        </div>
    </section>   
</main>

<?php get_footer(); ?>
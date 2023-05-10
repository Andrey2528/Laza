<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * Template Name: main page
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Laza
 */

get_header();
?>

    <header class="header">
        <div class="container">
            <div class="imgBG1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgHead1.png" alt="">
            </div>
            <div class="imgBG2">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgHead2.png" alt="">
            </div>
            <div class="elips"></div>
            <nav class="nav">
                <div class="nav__row">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <h2 class="main__title">26</h2>
                            <div class="nav__text-column">
                                <p class="main__subtitle">марта</p>
                                <p class="main__desc">Старт потока</p>  
                            </div>
                        </li>
                        <li class="nav__item">
                            <a href="/" class="nav__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.png" alt="">
                            </a>
                        </li>
                        <li class="nav__item">
                            <h2 class="main__title">3</h2>
                            <div class="nav__text-column">
                                <p class="main__subtitle">месяца</p>
                                <p class="main__desc">Длительность</p>  
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main> 
        <div class="wrapper">
            <section class="banner">
                <div class="container">
                    <div class="banner__column">
                        <div class="column__half-1">
                            <h1 class="main__title">
                                Бизнес-система<br>  
                                nail-мастера
                            </h1>
                            <a href="#" class="main__btn">ЗАПИСАТЬСЯ НА КУРС</a>
                        </div>
                        <div class="column__half-2">
                            <div class="column__img">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="banner__rect">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgRectangle.svg" alt="">
                </div>
            </section>

            <section class="buy">
                <div class="container">
                    <div class="imgBG1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy1.png" alt="">
                    </div>
                    <div class="imgBG2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy2.png" alt="">
                    </div>
                    <div class="buy__text">
                        <h2 class="main__subtitle">
                            <span class="main__text-red">НЕ</span> ПОКУПАЙ ЭТОТ КУРС, 
                        </h2>
                        <h2 class="main__subtitle">
                            <span class="main__text-red">ЕСЛИ</span>
                        </h2>
                    </div>
                    <div class="buy__card">
                        <ul class="card__list-top">
                            <li class="card__item">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card1.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты не хочешь вырасти <br> в доходе х10
                                </p>
                            </li>
                            <li class="card__item item-top">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card2.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты не хочешь учиться, ведь и так знаешь абсолютно все в индустрии
                                </p>
                            </li>
                            <li class="card__item">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card3.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты всю жизнь собираешься работать в найме
                                </p>
                            </li>
                        </ul>
                        <ul class="card__list-bottom">
                            <li class="card__item item__margin-right">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card4.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты спокойно можешь поднять чек прямо сейчас
                                </p>
                            </li>
                            <li class="card__item">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card5.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты никогда не планируешь делать свой бизнес
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="buy-slider1 main__slider">
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card1.png" alt="">
                            </div>
                            <p class="card__text main__desc">
                                Ты не хочешь вырасти <br> в доходе х10
                            </p>
                        </div>
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card2.png" alt="">
                            </div>
                            <p class="card__text main__desc">
                                Ты не хочешь учиться, ведь и так знаешь абсолютно все в индустрии
                            </p>
                        </div>
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card3.png" alt="">
                            </div>
                            <p class="buy-slider1__text main__desc">
                                Ты всю жизнь собираешься работать в найме
                            </p>
                        </div>
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card4.png" alt="">
                            </div>
                            <p class="card__text main__desc">
                                Ты спокойно можешь поднять чек прямо сейчас
                            </p>
                        </div>
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card5.png" alt="">
                            </div>
                            <p class="card__text main__desc">
                                Ты никогда не планируешь делать свой бизнес
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="buttonBlock">
                <div class="container">
                    <div class="buttonBlock__img-right">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/Vector 4.png" alt="">
                    </div>
                    <a href="$" class="main__btn">ТЕБЕ СЮДА</a>
                    <div class="buttonBlock__img-left">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/Vector 4.png" alt="">
                    </div>
                </div>
            </section>

            <section class="buy">
                <div class="container">
                    <div class="imgBG3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy3.png" alt="">
                    </div>
                    <div class="imgBG4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgBuy4.png" alt="">
                    </div>
                    <div class="buy__text">
                        <h2 class="main__subtitle">
                            <span class="main__text-red">ЕСЛИ</span>
                        </h2>
                    </div>
                    <div class="buy__card">
                        <ul class="card__list-top">
                            <li class="card__item">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card6.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Тебя хвалят клиенты, но денег больше не становится
                                </p>
                            </li>
                            <li class="card__item item-top">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card7.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Тебя хвалят не все клиенты, есть негативные отзывы
                                </p>
                            </li>
                            <li class="card__item">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card8.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты прошла кучу курсов, но все равно чего-то не хватает
                                </p>
                            </li>
                        </ul>
                        <ul class="card__list-bottom">
                            <li class="card__item item__margin-right">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card9.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты прошла кучу курсов, но все равно чего-то не хватает
                                </p>
                            </li>
                            <li class="card__item">
                                <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card10.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты хочешь открыть свою студию, но не знаешь, с чего начать
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="buy-slider1 main__slider">
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card7.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Тебя хвалят не все клиенты, есть негативные отзывы
                                </p>
                        </div>
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card8.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты прошла кучу курсов, но все равно чего-то не хватает
                                </p>
                        </div>
                        <div class="buy-slider1__item">
                            <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card9.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты прошла кучу курсов, но все равно чего-то не хватает
                                </p>
                        </div>
                        <div class="buy-slider1__item">
                           <div class="card__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card10.png" alt="">
                                </div>
                                <p class="card__text main__desc">
                                    Ты хочешь открыть свою студию, но не знаешь, с чего начать
                                </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="because">
                <div class="container">
                    <h2 class="main__subtitle">
                        <span class="main__text-red">
                            Потому что:
                        </span>
                    </h2>
                    <p class="main__desc">
                        Тебе больше <span class="main__text-red">не придётся</span> сливать кучу времени, денег, 
                        сил и энергии на бесконечные обучения, семинары, 
                        повышения квалификации. А также работать в минус, 
                        сомневаясь в себе. Ведь ты получишь у нас в <span class="main__text-red">удобном для тебя формате</span> 
                        онлайн
                    </p>
                    <div class="because__row">
                        <ul class="because__list">
                            <li class="bacause__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Основу ВСЕХ<br> видов маникюра
                                        </p>
                                    </div>    
                                </div>
                            </li>
                            <li class="bacause__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Все виды аппаратного<br> маникюра
                                        </p>
                                    </div>    
                                </div>
                            </li>
                        </ul>
                        <ul class="because__list">
                            <li class="bacause__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Все техники<br> комбинированного<br> маникюра
                                        </p>

                                    </div>    
                                </div>
                            </li>
                            <li class="bacause__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Все наши авторские<br> скоростные техники
                                        </p>

                                    </div>    
                                </div>
                            </li>
                        </ul>
                        <ul class="because__list">
                            <li class="bacause__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Все схемы безопасны<br> для клиента и мастера
                                        </p>
                                    </div>    
                                </div>
                            </li>
                            <li class="bacause__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Коррекции любой<br> сложности
                                        </p>
                                    </div>    
                                </div>
                            </li>
                        </ul>
                        <ul class="because__list">
                            <li class="because__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Все виды материалов,<br> понимание химии<br> материалов
                                        </p>

                                    </div>    
                                </div>
                            </li>
                            <li class="because__item">
                                <div class="item__row">
                                    <div class="because__elips"></div>
                                    <div class="item__column">
                                        <p class="main__desc item__text">
                                            Протезирование<br>
                                        </p>
                                    </div>    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="result">
                <div class="container">
                    <div class="imgBG1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgResult1.png" alt="">
                    </div>
                    <div class="imgBG2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgResult2.png" alt="">
                    </div>
                    <h2 class="main__subtitle"><span class="main__text-red">В РЕЗУЛЬТАТЕ</span></h2>
                    <ul class="result__list">
                        <li class="result__item">
                            <div class="result__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/result1.png" alt="">
                            </div>
                            <p class="result__text main__desc">
                                Ты станешь грамотным специалистом, у которого не будет возникать никаких вопросов и
                                сложностей в работе.
                            </p>
                        </li>
                        <li class="result__item-center">
                            <div class="result__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/result2.png" alt="">
                            </div>
                            <p class="result__text main__desc">
                                Вырастешь в качестве, скорости, в доходе.
                            </p>
                        </li>
                        <li class="result__item">
                            <div class="result__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/result3.png" alt="">
                            </div>
                            <p class="result__text main__desc">
                                У тебя появятся новые профессиональные связи, новые друзья, новое позитивное
                                поддерживающее окружение.
                            </p>
                        </li>
                    </ul>

                    <div class="result__slider main__slider">
                        <div class="result__item">
                            <div class="result__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/result1.png" alt="">
                            </div>
                            <p class="result__text main__desc">
                                Ты станешь грамотным специалистом, у которого не будет возникать никаких вопросов и
                                сложностей в работе.
                            </p>
                        </div>
                        <div class="result__item">
                            <div class="result__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/result2.png" alt="">
                            </div>
                            <p class="result__text main__desc">
                                Вырастешь в качестве, скорости, в доходе.
                            </p>
                        </div>
                        <div class="result__item">
                            <div class="result__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/result3.png" alt="">
                            </div>
                            <p class="result__text main__desc">
                                У тебя появятся новые профессиональные связи, новые друзья, новое позитивное
                                поддерживающее окружение.
                            </p>
                        </div>
                    </div> 
                </div>
            </section>

            <section class="most">
                <div class="container">
                    <div class="imgBG1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgMost1.png" alt="">
                    </div>
                    <div class="imgBG2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgMost2.png" alt="">
                    </div>
                    <h2 class="main__subtitle">
                        <span class="main__text-red">
                            И САМОЕ ГЛАВНОЕ
                        </span>
                    </h2>
                    <ul class="most__list">
                        <li class="most__item">
                            <div class="most__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card11.png" alt="">
                            </div>
                            <p class="most__text main__desc">
                                Ты сможешь делегировать свою работу, 
                                масштабировать свое дело в серьезный бизнес.
                            </p>
                        </li>
                        <li class="most__item">
                            <div class="most__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card12.png" alt="">
                            </div>
                            <p class="most__text main__desc">
                                Выйдешь на новую ступень профессионализма и 
                                сможешь стать инструктором, обучать людей,
                                открыть свою школу.
                            </p>
                        </li>
                        <li class="most__item">
                            <div class="most__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/card13.png" alt="">
                            </div>
                            <p class="most__text main__desc">
                                Это не просто видеокурс, это комплексная система по построению своего бизнеса в нейлиндустрии. Это огромное количество практики под наставничеством крутого преподавателя –
                               <a class="main__text-red" style="text-decoration: underline 2px solid #DC3F31;">Ксении Лукьяновой</a>, обратная связь на протяжении всего курса, обмен опытом с другими
                               мастерами.
                            </p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="why">
                <div class="container">
                    <div class="imgBG1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgWhy1.png" alt="">
                    </div>
                    <div class="imgBG2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgWhy2.png" alt="">
                    </div>
                    <h2 class="main__subtitle">
                        <span class="main__text-red">
                            ПОЧЕМУ МЫ?
                        </span>
                    </h2>
                    <ul class="why__list">
                        <li class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why1.png" alt="">
                            </div>
                            <p class="main__desc">
                                Школы в Дубаи (ОАЭ), Минске (РБ), Батуми (Грузия)
                            </p>
                        </li>
                        <li class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why2.png" alt="">
                            </div>
                            <p class="main__desc">
                                Курсы в Тбилиси (Грузия), г.Клайпеда (Литва)
                            </p>
                        </li>
                    </ul>
                    <ul class="why__list-bottom">
                        <li class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why3.png" alt="">
                            </div>
                            <p class="main__desc">
                                30 инструкторов после обучения у нас открыли свои школы и успешно работают
                            </p>
                        </li>
                        <li class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why4.png" alt="">
                            </div>
                            <p class="main__desc">
                                Более 2000 учеников по всему миру
                            </p>
                        </li>
                    </ul>

                    <div class="why__slider main__slider">
                        <div class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why1.png" alt="">
                            </div>
                            <p class="main__desc">
                                Школы в Дубаи (ОАЭ), Минске (РБ), Батуми (Грузия)
                            </p>
                        </div>
                        <div class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why2.png" alt="">
                            </div>
                            <p class="main__desc">
                                Курсы в Тбилиси (Грузия), г.Клайпеда (Литва)
                            </p>
                        </div>
                        <div class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why3.png" alt="">
                            </div>
                            <p class="main__desc">
                                30 инструкторов после обучения у нас открыли свои школы и успешно работают
                            </p>
                        </div>
                        <div class="why__item">
                            <div class="why__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/why4.png" alt="">
                            </div>
                            <p class="main__desc">
                                Более 2000 учеников по всему миру
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="chempion">
                <div class="container">
                    <div class="imgBG1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgChempion1.png" alt="">
                    </div>
                    <div class="imgBG2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgChempion2.png" alt="">
                    </div>
                    <h2 class="main__title">
                        <span class="main__text-red">
                            Более 50 призовых мест на Чемпионатах
                        </span>
                    </h2>
                    <ul class="chempion__list">
                        <li class="chempion__item">
                            <h3 class="main__subtitle">
                                2020
                            </h3>
                            <p class="main__desc minheinght">
                                Vivo Chempionship
                            </p>
                        </li>
                        <li class="chempion__item last__item">
                            <h3 class="main__subtitle">
                                2021
                            </h3>
                            <p class="main__desc">
                                Vivo
                            </p>
                            <p class="main__desc">
                                Aurora
                            </p>
                            <p class="main__desc">
                                Global Awards
                            </p>
                        </li>
                        <li class="chempion__item ">
                            <h3 class="main__subtitle">
                                2022
                            </h3>
                            <p class="main__desc">
                                Dore
                            </p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="rewiew">
                <div class="container">
                    <h2 class="main__subtitle">
                        ОТЗЫВЫ
                    </h2>
                    <div class="slider multiple-items">
                        <div class="rewiew__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/rewiew1.png" alt="">
                        </div>
                        <div class="rewiew__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/rewiew2.png" alt="">
                        </div>
                        <div class="rewiew__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/rewiew3.png" alt="">
                        </div>
                        <div class="rewiew__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/rewiew1.png" alt="">
                        </div>
                        <div class="rewiew__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/rewiew2.png" alt="">
                        </div>
                        <div class="rewiew__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/rewiew3.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="less">
                <div class="container">
                    <ul class="less__list">
                        <li class="less__item item__abs">
                            <h3 class="main__title main__text-red">
                                3
                            </h3>
                            <p class="main__subtitle">
                                Месяца обучения
                            </p>
                        </li>
                        <li class="less__item">
                            <h3 class="main__title main__text-red">
                                3
                            </h3>
                            <p class="main__subtitle">
                                Урока в неделю
                            </p>
                        </li>
                        <li class="less__item">
                            <h3 class="main__title main__text-red">
                                72
                            </h3>
                            <p class="main__subtitle">
                                Часов практики
                            </p>
                        </li>
                    </ul>
                    <ul class="less__list-bottom">
                        <li class="less__item">
                            <h3 class="main__title main__text-red">
                                6
                            </h3>
                            <p class="main__subtitle">
                                Месяцев доступа
                            </p>
                        </li>
                        <li class="less__item">
                            <h3 class="main__title main__text-red">
                                30
                            </h3>
                            <p class="main__subtitle">
                                Домашних заданий
                            </p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="teacher">
                <div class="container">
                    <div class="slider2">
                        <?php
                            if(have_rows('teacher-cards')) :
                                while (have_rows('teacher-cards')) : the_row();
                                    get_template_part('templates/builder/' . get_row_layout());
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </section>

            <section class="registr">
                <div class="container">
                    <div class="imgBG1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgReg1.png" alt="">
                    </div>
                    <div class="imgBG2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/bgReg2.png" alt="">
                    </div>
                    <div class="imgBG3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/regArrowLeft.png" alt="">
                    </div>
                    <div class="imgBG4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/regArrowRight.png" alt="">
                    </div>
                    <div class="registr__text-block">
                        <h2 class="main__title">
                            <span class="main__text-red">
                                РЕГИСТИРУЙСЯ 
                            </span>
                        </h2>
                        <p class="main__desc">прямо сейчас и забирай курс за 1000€ вместо 4000€</p>
                        <h3 class="main__sutitle">
                            <span class="main__text-red">
                                И это еще не все!
                            </span>
                        </h3>
                        <p class="main__desc">
                            Получи интенсив «Скорость» стоимостью 300€<br> в подарок при регистрации.
                        </p>
                    </div>
                    <a href="#" class="registr__btn1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/main__btn.png" alt=""></a>
                    <div class="registr__text-block">
                        <p class="main__desc">
                            Мы очень хотим тебе понравиться, поэтому 
                            есть еще подарки – <span class="main__text-red">СТО по СТО</span>
                        </p>
                        <p class="main__desc">
                            Только сейчас интенсив «Скорость» можно 
                            приобрести ОТДЕЛЬНО за <span class="main__text-red">100€</span> вместо 300€.
                        </p>
                        <h2 class="main__title">
                            <span class="main__text-red">
                                ВСЕГО 100(!) мест
                            </span>
                        </h2>
                    </div>
                    <a class="registr__btn2">Получить интенсив</a>
                </div>
            </section>

        </div>
    
    </main>

<?php get_footer(); ?>
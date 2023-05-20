<?php
/**
 * laza functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Laza
 */
 define('THEME_DIR', get_template_directory_uri());
 require_once( __DIR__ . '/core/core.php');

function my_scripts_method(){
    /*style */
    wp_enqueue_style( 'slick_style', get_stylesheet_directory_uri().'/src/libs/slick/slick.css');
    wp_enqueue_style( 'slick_min_style', get_stylesheet_directory_uri().'/src/libs/slick/slick-theme.css');
    wp_enqueue_style( 'main_style', get_stylesheet_directory_uri().'/build/style.css');

    /* js */
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_stylesheet_directory_uri().'/src/js/jquery-3.6.0.min.js', array(), NULL, false);
    wp_enqueue_script( 'jquery' );
    wp_localize_script( 'main-js', 'ajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri().'/src/libs/slick/slick.js', array('jquery'), false, false);
    wp_enqueue_script( 'slick-min-js', get_stylesheet_directory_uri().'/src/libs/slick/slick.min.js', array('jquery'), false, false);
    
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri().'/src/js/main.js', array('jquery'), false, false);
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function add_support(){
    add_theme_support( 'menus');
}
add_action( 'after_setup_theme', 'add_support' );

function register_polylang_strings() {
    //header
    pll_register_string(
        'laza_header_month',
        'june',
        'header',
        false
    );
    pll_register_string(
        'laza_header_start',
        'Start course',
        'header',
        false
    );
    pll_register_string(
        'laza_header_month2',
        'month',
        'header',
        false
    );
    pll_register_string(
        'laza_header_duration',
        'Duration',
        'header',
        false
    );

    //banner
    pll_register_string(
        'laza_banner_bussines_1',
        'bussines system',
        'banner',
        false
    );
    pll_register_string(
        'laza_banner_bussines_2',
        ' nail-master',
        'banner',
        false
    );
    
    //buy
    pll_register_string(
        'laza_buy_dont_buy_1',
        'Dont',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_dont_buy_2',
        'buy this course,',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_else',
        'Else',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_1_1',
        'You don`t want to grow ',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_1_2',
        'in income x10',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_2',
        'You don`t want to learn because you already know absolutely everything about the industry',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_3',
        'You are going to work for hire all your life',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_4',
        'You can safely pick up the cheque right now',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_5',
        'You never plan to do your own business',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_6',
        'You get praise from customers, but no more money',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_7',
        'Not all clients praise you, there are negative reviews',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_8',
        'You`ve taken a lot of courses, but you`re still missing something',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_9',
        'You`re a great craftsman, but you`re scared to raise the cost of your services',
        'buy',
        false
    );
    pll_register_string(
        'laza_buy_card_10',
        'You want to open your own studio but don`t know where to start',
        'buy',
        false
    );

    //because
    pll_register_string(
        'laza_because_subtitle',
        'Because',
        'because',
        false
    );
    pll_register_string(
        'laza_because_desc_1',
        'You`ve got more',
        'because',
        false
    );
    pll_register_string(
        'laza_because_desc_2',
        'will not have to',
        'because',
        false
    );
    pll_register_string(
        'laza_because_desc_3',
        'to waste a lot of time, money, and energy on endless trainings, seminars, advanced training. And also working at a disadvantage, doubting yourself. After all, you`ll be getting a',
        'because',
        false
    );
    pll_register_string(
        'laza_because_desc_4',
        'in a format that you are comfortable with',
        'because',
        false
    );
    pll_register_string(
        'laza_because_desc_5',
        'online',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_1_1',
        'Основу ВСЕХ',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_1_2',
        'видов маникюра',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_2_1',
        'Все виды аппаратного',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_2_2',
        'маникюра',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_3_1',
        'Все техники',
        'because',
        false
    );
    
    pll_register_string(
        'laza_because_list_item_3_2',
        'комбинированного',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_3_3',
        'маникюра',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_4_1',
        'Все наши авторские',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_4_2',
        'скоростные техники',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_5_1',
        'Все схемы безопасны',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_5_2',
        'для клиента и мастера',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_6_1',
        'Коррекции любой',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_6_2',
        'сложности',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_7_1',
        'Все виды материалов,',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_7_2',
        'понимание химии',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_7_3',
        'материалов',
        'because',
        false
    );
    pll_register_string(
        'laza_because_list_item_8',
        'Протезирование',
        'because',
        false
    );

    //rezult
    pll_register_string(
        'laza_rezult_title',
        'В РЕЗУЛЬТАТЕ',
        'rezult',
        false
    );
    pll_register_string(
        'laza_rezult_list_item_1',
        'Ты станешь грамотным специалистом, у которого не будет возникать никаких вопросов и сложностей в работе.',
        'rezult',
        false
    );
    pll_register_string(
        'laza_rezult_list_item_2',
        'Вырастешь в качестве, скорости, в доходе.',
        'rezult',
        false
    );
    pll_register_string(
        'laza_rezult_list_item_3',
        'У тебя появятся новые профессиональные связи, новые друзья, новое позитивное поддерживающее окружение.',
        'rezult',
        false
    );

    //most
    pll_register_string(
        'laza_most_title',
        'И САМОЕ ГЛАВНОЕ',
        'most',
        false
    );
    pll_register_string(
        'laza_most_card_desc_1',
        'Ты сможешь делегировать свою работу, масштабировать свое дело в серьезный бизнес. ',
        'most',
        false
    );
    pll_register_string(
        'laza_most_card_desc_2',
        'Выйдешь на новую ступень профессионализма и сможешь стать инструктором, обучать людей,открыть свою школу.',
        'most',
        false
    );
    pll_register_string(
        'laza_most_card_desc_3',
        'Это не просто видеокурс, это комплексная система по построению своего бизнеса в нейлиндустрии. Это огромное количество практики под наставничеством крутого преподавателя –',
        'most',
        false
    );
    pll_register_string(
        'laza_most_card_desc_4',
        'Ксении Лукьяновой',
        'most',
        false
    );
    pll_register_string(
        'laza_most_card_desc_6',
        ', обратная связь на протяжении всего курса, обмен опытом с другими мастерами.',
        'most',
        false
    );

    //why
    pll_register_string(
        'laza_why_title',
        'ПОЧЕМУ МЫ?',
        'why',
        false
    );
    pll_register_string(
        'laza_why_card_item_1',
        'Школы в Дубаи (ОАЭ), Минске (РБ), Батуми (Грузия)',
        'why',
        false
    );
    pll_register_string(
        'laza_why_card_item_2',
        'Курсы в Тбилиси (Грузия), г.Клайпеда (Литва)',
        'why',
        false
    );
    pll_register_string(
        'laza_why_card_item_3',
        '30 инструкторов после обучения у нас открыли свои школы и успешно работают',
        'why',
        false
    );
    pll_register_string(
        'laza_why_card_item_4',
        'Более 2000 учеников по всему миру',
        'why',
        false
    );

    //chempion
    pll_register_string(
        'laza_chempion_title',
        'Более 50 призовых мест на Чемпионатах',
        'chempion',
        false
    );
    pll_register_string(
        'laza_chempion_list_2020',
        'Vivo Chempionship',
        'chempion',
        false
    );
    pll_register_string(
        'laza_chempion_list_2021_1',
        'Vivo',
        'chempion',
        false
    );
    pll_register_string(
        'laza_chempion_list_2021_2',
        'Aurora',
        'chempion',
        false
    );
    pll_register_string(
        'laza_chempion_list_2021_3',
        'Global Awards',
        'chempion',
        false
    );
    pll_register_string(
        'laza_chempion_list_2022',
        'Dore',
        'chempion',
        false
    );

    //rewiew
    pll_register_string(
        'laza_rewiew_title',
        'ОТЗЫВЫ',
        'rewiew',
        false
    );

    //less
    pll_register_string(
        'laza_less_item_1',
        'Месяца обучения',
        'less',
        false
    );
    pll_register_string(
        'laza_less_item_2',
        'Урока в неделю',
        'less',
        false
    );
    pll_register_string(
        'laza_less_item_3',
        'Часов практики',
        'less',
        false
    );
    pll_register_string(
        'laza_less_item_4',
        'Месяцев доступа',
        'less',
        false
    );
    pll_register_string(
        'laza_less_item_5',
        'Домашних заданий',
        'less',
        false
    );

    //teacher
    pll_register_string(
        'laza_teacher_card_title_1',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_desc_1_1',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_1_2',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_1_3',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_1_4',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_2',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_desc_2_1',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_2_2',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_2_3',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_2_4',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_3',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_desc_3_1',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_3_2',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_3_3',
        '',
        'teacher',
        false
    );
    pll_register_string(
        'laza_teacher_card_title_3_4',
        '',
        'teacher',
        false
    );

    //registr
    pll_register_string(
        'laza_registr_title',
        'РЕГИСТИРУЙСЯ',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_1',
        'прямо сейчас и забирай курс за 1000€ вместо 4000€',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_2',
        'И это еще не все!',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_3',
        'Получи интенсив «Скорость» стоимостью 300€ в подарок при регистрации.',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_4',
        'Мы очень хотим тебе понравиться, поэтому есть еще подарки –',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_5',
        'СТО по СТО',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_6',
        'Только сейчас интенсив «Скорость» можно приобрести ОТДЕЛЬНО за',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_7',
        '100€',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_8',
        'вместо 300€.',
        'registr',
        false
    );
    pll_register_string(
        'laza_registr_desc_9',
        'ВСЕГО 100(!) мест',
        'registr',
        false
    );

    //footer

    //post

    //button
    pll_register_string(
        'laza_button',
        'take a course',
        'button',
        false
    );
    pll_register_string(
        'laza_button',
        'You`re going there',
        'button',
        false
    );
}
add_action('init', 'register_polylang_strings');

//show_admin_bar(false);
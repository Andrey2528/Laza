<?php

add_action('wp_ajax_nopriv_get_lessons_ajax', 'get_lessons_ajax');
add_action('wp_ajax_get_lessons_ajax', 'get_lessons_ajax');

function get_lessons_ajax()
{
    $category = $_POST['category'] ?? 'any';
    $page = intval($_POST['page']) ?? 1;
    wp_die(json_encode(get_lessons_pagination($category, $page )));
}

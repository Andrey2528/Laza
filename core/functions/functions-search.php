<?php


function get_lesson_categories()
{
    $args = array(
        'post' => 'lesson',
        'orderby' => 'name',
        'order'   => 'ASC'
    );

    return get_categories($args);
}


function get_lessons($category = 'any', $page = 10, $limit = -1, $order_by = 'ASC')
{
    $args = array(
        'post_type'        => array('lesson'),
        'posts_per_page'   => $limit,
        'order'            => $order_by,
        'post_status'      => array('publish'),
        'paged'            => $page,
    );

    if(!empty($category) && $category !== 'any')
        $args['category_name'] = $category;

    $query = new WP_Query($args);
    return $query;
}

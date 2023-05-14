<?php
function get_lesson_categories()
{
    $args = array(
        'post_type'      => 'lesson',
        'orderby'        => 'name',
        'order'          => 'ASC',
        'hide_empty'     => 0
    );

    return get_categories($args);
}

function get_lessons($category = 'any', $page = 10, $limit = -1, $order_by = 'ASC')
{
    $args = array(
        'post_type'      => 'lesson',
        'posts_per_page' => $limit,
        'order'          => $order_by,
        'post_status'    => 'publish',
        'paged'          => $page,
    );

    if (!empty($category) && $category !== 'any') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $category,
            ),
        );
    }

    $query = new WP_Query($args);
    return $query;
}
?>
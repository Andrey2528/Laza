<?php

function register_lesson_type()
{
    register_post_type(
        'lesson',
        array(
            'labels' => array(
                'name'               => 'Lesson',
                'singular_name'      => 'Lesson',
                'search_items'       => 'Search Lesson',
                'all_items'          => 'All Lesson',
                'view_item'          => 'View Lesson',
                'parent_item'        => 'Parent Lesson',
                'parent_item_colon'  => 'Parent Lesson:',
                'edit_item'          => 'Edit Lesson',
                'update_item'        => 'Update Lesson',
                'add_new_item'       => 'Add New Lesson',
                'new_item_name'      => 'New Lesson Name',
                'menu_name'          => 'Lessons',
                'back_to_items'      => '← Back to Lesson',
            ),
            'public'        => true,
            'has_archive'   => true,
            'hierarchical'  => true,
            'show_in_menu'  => true,
            'menu_position' => 5,
            'supports'      => array('title', 'thumbnail', 'excerpt'),
            'taxonomies'    => array('category', 'post_tag'),
        )
    );
}

add_action('init', 'register_lesson_type');

?>
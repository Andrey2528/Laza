<?php
function my_browser_body_class($classes)
{
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $is_edge;
    if ($is_lynx) $classes[] = 'lynx';
    elseif ($is_edge) $classes[] = 'edge';
    elseif ($is_gecko) $classes[] = 'gecko';
    elseif ($is_opera) $classes[] = 'opera';
    elseif ($is_NS4) $classes[] = 'ns4';
    elseif ($is_safari) $classes[] = 'safari';
    elseif ($is_chrome) $classes[] = 'chrome';
    elseif ($is_IE) {
        $classes[] = 'ie';
        if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
            $classes[] = 'ie' . $browser_version[1];
    } else $classes[] = 'unknown';
    if ($is_iphone) $classes[] = 'iphone';
    if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
        $classes[] = 'osx';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
        $classes[] = 'linux';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
        $classes[] = 'windows';
    }
    return $classes;
}

add_filter('body_class', 'my_browser_body_class');


function remove_weird_characters($content) {
    $content = preg_replace('/\x03/', '', $content);
    return $content;
}

add_filter('the_content', 'remove_weird_characters');
add_filter('the_title', 'remove_weird_characters');


function acf_remove_weird_characters( $value, $post_id = 0, $field=array() ) {
    if (isset($field['type']) && ($field['type'] == 'repeater' || $field['type'] == 'flexible_content')) {
        return $value;
    }
    if (!is_array($value)) {
        $value = preg_replace('/\x03/', '', $value);
        return $value;
    }
    $return = array();
    foreach ($value as $index => $data) {
        $return[$index] = acf_remove_weird_characters ($data);
    }
    return $return;
}

add_filter('acf/update_value', 'acf_remove_weird_characters', 10, 3);

function get_lessons_pagination($category = 'any', $page = 1)
{
    $lessons_query = get_lessons($category, $page);
    ob_start();
    while ($lessons_query->have_posts()) {
        $lessons_query->the_post();
        get_template_part('templates/archive-portfolio');
    }
    wp_reset_postdata();
    $reponse = array(
        'max-page' => $lessons_query->max_num_pages,
        'html' => ob_get_contents()
    );
    ob_end_clean();
    return $reponse;
}


<?php

function register_my_menus() {
  register_nav_menus (
    array(
    'main-nav' => 'Menu Principal',
    )
  );
}

add_action( 'init', 'register_my_menus' );

function comicpress_copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = "&copy; " . $copyright_dates[0]->firstdate;
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= '-' . $copyright_dates[0]->lastdate;
}
$output = $copyright;
}
return $output;
	}

// enable threaded comments
function enable_threaded_comments(){
if (!is_admin()) {
if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
wp_enqueue_script('comment-reply');
}
}
add_action('get_header', 'enable_threaded_comments');



function new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');


add_theme_support( 'post-thumbnails' ); 




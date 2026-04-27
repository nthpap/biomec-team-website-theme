<?php
function mytheme_scripts() {

    // --- CSS ---
    wp_enqueue_style('style', get_stylesheet_uri()); // το style.css που είναι έξω από το φάκελο
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('noscript-css', get_template_directory_uri() . '/css/noscript.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome-allmin.css', array(), '1.0', 'all');

    // --- JS ---
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script('jquery-scrolly', get_template_directory_uri() . '/js/jquery.scrolly.min.js', array('jquery-min'), '1.0', true);
    wp_enqueue_script('jquery-scrollex', get_template_directory_uri() . '/js/jquery.scrollex.min.js', array('jquery-min'), '1.0', true);
    wp_enqueue_script('browser', get_template_directory_uri() . '/js/browser.min.js', array(), '1.0', true);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/js/breakpoints.min.js', array('browser'), '1.0', true);
    wp_enqueue_script('jquery-dropotron', get_template_directory_uri() . '/js/jquery.dropotron.min.js', array('jquery-min'), '1.0', true);
    wp_enqueue_script('util', get_template_directory_uri() . '/js/util.js', array(), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery-min', 'util'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'mytheme_scripts');
?>



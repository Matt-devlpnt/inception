<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-theme-styles', get_template_directory_uri() . '/assets/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>

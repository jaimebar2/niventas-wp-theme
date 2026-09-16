<?php
function niventas_enqueue_styles() {
    wp_enqueue_style('niventas-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'niventas_enqueue_styles');
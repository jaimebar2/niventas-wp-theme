<?php
/**
 * Plugin Name: NI Ventas Landing Component
 * Plugin URI: https://niventas.com
 * Description: Componente para cargar la landing page de NI Ventas maquetada en HTML/CSS.
 * Version: 1.0.0
 * Author: Jaime
 */

if (!defined('ABSPATH')) exit; // Salir si se accede directamente

// 1. Cargar la hoja de estilos CSS
function niventas_cargar_estilos() {
    wp_enqueue_style('niventas-custom-css', plugin_dir_url(__FILE__) . 'style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'niventas_cargar_estilos');

// 2. Registrar el Shortcode [niventas_landing]
function niventas_render_landing() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'niventas-landing.php';
    return ob_get_clean();
}
add_shortcode('niventas_landing', 'niventas_render_landing');
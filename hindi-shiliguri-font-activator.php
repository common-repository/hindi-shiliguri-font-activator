<?php
/**
 * Plugin Name: Hindi Shiliguri Font Activator
 * Description: This plugin sets Hind Siliguri font as the default font for your WordPress website.
 * Version: 1.0
 * Author: Ajbur Rahman
 */

// Add Google Font (Hind Siliguri) to the website's front-end
function hsfa_enqueue_fonts() {
    wp_enqueue_style('hindi-shiliguri-font', 'https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap', false);
}

// Inject custom CSS to apply the font to body and other elements
function hsfa_add_custom_styles() {
    echo "
    <style>
        body, h1, h2, h3, h4, h5, h6, p, a {
            font-family: 'Hind Siliguri', sans-serif !important;
        }
    </style>
    ";
}

// Hook the functions to WordPress
add_action('wp_enqueue_scripts', 'hsfa_enqueue_fonts');
add_action('wp_head', 'hsfa_add_custom_styles');

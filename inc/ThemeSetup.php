<?php
class Customized_Theme {
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function enqueue_styles() {
        wp_enqueue_style('customized-style', get_stylesheet_uri());
    }

    public function setup_theme() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus([
            'main-menu' => __('Main Menu', 'customized-theme')
        ]);
    }
}
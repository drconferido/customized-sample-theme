<?php
class Customized_CPT {
    public function __construct() {
        add_action('init', [$this, 'register_urban_legends']);
    }

    public function register_urban_legends() {
      register_post_type('urban_legend', [
    'label' => 'Urban Legends',
    'public' => true,
    'show_ui' => true, // ✅ Add this line
    'supports' => ['title', 'editor', 'thumbnail'],
    'has_archive' => true,
    'rewrite' => ['slug' => 'urban-legends'],
    'show_in_rest' => true,
]);
    }
}
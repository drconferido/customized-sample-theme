<?php
class Customized_Ajax {
    public function __construct() {
        add_action('wp_ajax_load_legend', [$this, 'load_legend']);
        add_action('wp_ajax_nopriv_load_legend', [$this, 'load_legend']);
    }

    public function load_legend() {
        $post_id = intval($_POST['id']);
        $post = get_post($post_id);

        if ($post) {
            wp_send_json_success([
                'title' => $post->post_title,
                'content' => apply_filters('the_content', $post->post_content)
            ]);
        } else {
            wp_send_json_error('Post not found.');
        }

        wp_die();
    }
}
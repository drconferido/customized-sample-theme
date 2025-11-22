<?php
class Customized_Helpers {
    public static function excerpt_limit($limit = 20) {
        return wp_trim_words(get_the_excerpt(), $limit);
    }

    public static function format_date($date) {
        return date('F j, Y', strtotime($date));
    }
}
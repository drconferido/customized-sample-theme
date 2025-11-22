<?php
require_once get_template_directory() . '/inc/ThemeSetup.php';
require_once get_template_directory() . '/inc/CustomPostTypes.php';
require_once get_template_directory() . '/inc/AjaxHandlers.php';
require_once get_template_directory() . '/inc/Helpers.php';

new Customized_Theme();
new Customized_CPT();
new Customized_Ajax();
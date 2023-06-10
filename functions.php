<?php


add_action('wp_head', 'debug_current_page');

function debug_current_page()
{
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        $roles = (array) $user->roles;
        if (in_array('administrator', $roles)) {
            print_r($roles);

            ini_set(display_startup_errors, 1);
            ini_set('display_errors', true);
            ini_set('html_errors', true);
            error_reporting(E_ALL);
        }
    }
}

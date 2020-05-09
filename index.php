<?php
/*
  Plugin Name: Tanveer - WP Hello
  Plugin URI: https://www.linkedin.com/in/tanveer2030
  description: This is test plugin to print hello inside wp admin
  Version: 1.0
  Author: Tanveer Hussain
  Author URI: https://www.linkedin.com/in/tanveer2030
  License: GPL2
 */

add_action('admin_menu', 'register_admin_menu');

function register_admin_menu() {

    add_menu_page(
            'WP Hello', 'WP Hello', 'manage_options', 'wp-hello', 'tanveer_wp_hello', 'dashicons-schedule', 3
    );
}

function tanveer_wp_hello() {
    ?>

    <h1>
        <?php esc_html_e('WP Hello'); ?>
    </h1>

    <?php
}
?>
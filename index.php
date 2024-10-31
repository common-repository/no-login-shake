<?php
/*
Plugin Name: No Login Shake
Plugin URI: https://github.com/liamstewart23/WordPressNoLoginShake
Description: Removes the Login Shake Effect wp-login.php on incorrect password attempt.
Version: 1.0.0
Author: Liam Stewart
Author URI: https://liamstewart.ca
*/

/**
 * WordPress Version 4.0 or greater
 */
$requiredVersion = "4.0";
if (version_compare(get_bloginfo('version'), $requiredVersion, '<' )) {
    wp_die("<h1>You must update WordPress to use this plugin! </h1><br>
    You are currently running WordPress version <strong>".get_bloginfo('version')."</strong><br> This plugin requires <strong>".$requiredVersion."</strong> or greater");
}

/**
 * Remove the Login Page Shake
 */
function no_login_shake() {
    remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'no_login_shake');
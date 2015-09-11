<?php
/**
 * Created by PhpStorm.
 * User: wissilesogoyou
 * Date: 9/10/15
 * Time: 4:24 PM
 * Plugin Name: Disable Email Notifications
 * Plugin URI: http://www.sogoyou.org
 * Description: Disable Email Notifications
 * Author: Wissile Sogoyou
 * Author URI: http://www.sogoyou.org
 * Version: 1.0
 */

// Disable email notifications when new users are being registered
if ( !function_exists('wp_new_user_notification') ) {
    function wp_new_user_notification( ) {}
}

// Disable email notifications when current users are being updated with password or emails
if ( !function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification() {}
}

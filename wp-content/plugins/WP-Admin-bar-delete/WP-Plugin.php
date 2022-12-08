<?php
/**
 * Plugin Name: Wordpress-test
 * Description: Handle the basics with this plugin.
 */

 //Remove the admin bar from the front end
 add_filter('show_admin_bar', '__return_false' );
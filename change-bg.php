<?php 

/**
 * Plugin Name: Panel to change background color.
 * Plugin URI: https://michalsmietana.pl
 * Description: Panel, Who changing background color.
 * Version: 1.0.0
 * Author: Michal Smietana
 * Author URI: http://michalsmietana.pl
 * */

 // Activation plugin
register_activation_hook( __FILE__, 'changebg_activation' );
function changebg_activation() {

}

// Deactivation plugin
register_deactivation_hook( __FILE__, 'changebg_deactivation' );
function changebg_deactivation() {

}

// Uninstall plugin
register_uninstall_hook( __FILE__, 'changebg_uninstall' );
function changebg_uninstall() {
    if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
        exit;
    }
}




?>
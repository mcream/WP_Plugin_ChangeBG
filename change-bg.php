<?php 
/**
 * @package change-bg
 */
/**
 * Plugin Name: Panel to change background color.
 * Plugin URI: https://michalsmietana.pl
 * Description: Panel, Who changing background color.
 * Version: 1.0.0
 * Author: Michal Smietana
 * Author URI: http://michalsmietana.pl
 * */

defined( 'ABSPATH' ) or die( 'You can not access to this file. Try Again.' );

class ChangeBG
{
    function __construct(){
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }
    function register(){
        add_action( 'admin_enqueue_scripts', array( $this, 'custom_post_type' ) );
    }
    function activate(){

        $this->custom_post_type();
        
        flush_rewrite_rules();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    
    function custom_post_type(){
        register_post_type( 'posty', ['public' => true, 'label' => 'Posty'] );
    }
    function enqueue(){
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/css/style.css' , __FILE__ ) );
    }
}

if ( class_exists( 'ChangeBG' ) ){
    $changeBG = new ChangeBG();
}

//acti
register_activation_hook(__FILE__, array( $changeBG, 'activate' ));
//deacti
register_deactivation_hook(__FILE__, array( $changeBG, 'deactivate' ));

?>
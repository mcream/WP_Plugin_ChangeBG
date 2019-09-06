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
    function activate(){
        echo 'Plugin został poprawnie zainstalowany';
    }
    function deactivate(){
        echo 'Plugin NIE został poprawnie zainstalowany';
    }
    function uninstall(){

    }
    function custom_post_type(){
        register_post_type( 'posty', ['public' => true, 'label' => 'Posty'] );
    }
}
if ( class_exists( 'ChangeBG' ) ){
    $changeBG = new ChangeBG();
}

//acti
register_activation_hook(__FILE__, array( $changeBG, 'activate' ));
//deacti
register_deactivation_hook(__FILE__, array( $changeBG, 'deactivate' ));
//unin

?>
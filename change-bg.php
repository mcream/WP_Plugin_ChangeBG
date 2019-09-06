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

defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

class ChangeBG
{
    function activate(){

    }
    function deactivate(){

    }
    function uninstall(){

    }
}
if ( class_exists( 'ChangeBG' ) ){
    $changeBG = new ChangeBG();
}

?>
<?php
/**
 *  This file is Plugin uninstall
 * @package change-bg
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

$books = get_posts( array('post_type' => 'posts', 'numberposts' => -1 ) );

foreach( $posts as $post ){
    wp_delete_post($post->ID, false);
}

global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book' " );
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
$wpdb->query( "DELETE FROM wp_term_relationship WHERE object_id NOT IN (SELECT id FROM wp_posts)" );





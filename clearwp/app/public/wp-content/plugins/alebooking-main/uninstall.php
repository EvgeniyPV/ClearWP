<?php

if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

//Delete post type from db

//global $wpdb;
//$wpdb->query("DELETE FROM {$wpdb->posts} WHERE post_type IN ('house');");

//remove meta

//remove tax/terms

//remove comments



$houses = get_posts(array('post_type'=>'house','numberposts'=>-1));
foreach($houses as $house){
    wp_delete_post($house->ID,true);
}
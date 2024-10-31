<?php
/*
  Plugin Name: Ridplace RatingStars
  Description: Plugin to obtain stars on your website!!!! just use the shortcode [ridplace_ratingstars]
  Author: Ridplace
  Version: 1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly  

function ridplace_ratingstars_displayratings(){
    $url="https://ridplace.com/ridplace/widget/ridplace_rating.php?pageurl=".get_site_url();
    //$html=file_get_contents($url);
    $html = wp_remote_retrieve_body( wp_remote_get( $url ) );
    return $html;
}
add_shortcode('ridplace_ratingstars', 'ridplace_ratingstars_displayratings');
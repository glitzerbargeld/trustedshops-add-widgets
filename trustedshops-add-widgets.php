<?php

/**
 * Plugin Name: Trusted Shops Widgets
 * Description: Fügt Trusted Shops Widget Scripts in den Header ein.
 */

add_action('wp_enqueue_scripts', 'add_ts_scripts');

 function add_ts_scripts() {
    wp_register_script('ts-reviews-async-defer', 'https://integrations.etrusted.com/applications/widget.js/v2', array('jquery'), '2.0', true);
    wp_enqueue_script('ts-reviews-async-defer');
 }
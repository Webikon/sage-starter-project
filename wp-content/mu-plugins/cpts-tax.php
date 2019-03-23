<?php
/*
Plugin Name: CPTs & Taxonomies
Plugin URI: https://webikon.sk
Description: CPTs & Taxonomies registration.
Version: 1.0
Author: Webikon
Author URI: https://webikon.sk
License: GPLv2
Domain Path: /languages/
Text Domain: hbrtalks-cpts-tax
*/

/**
 * Load plugin textdomain.
 */
add_action('plugins_loaded', function () {
    load_muplugin_textdomain('hbrtalks-cpts-tax', 'languages/');
});

/**
 * Load CPT_Core.
 */
// require_once 'CPT_Core/CPT_Core.php';

/**
 * Load Taxonomy_Core.
 */
// require_once 'Taxonomy_Core/Taxonomy_Core.php';


/**
 * TAXONOMIES
 *
 * Needs to be registered in 'plugins_loaded' hook!
 */
add_action('plugins_loaded', function () {
    // $recipe_difficulty = register_via_taxonomy_core(
    //     array(
    //         __('Náročnosť', 'hbrtalks-cpts-tax'), // Singular
    //         __('Náročnosť', 'hbrtalks-cpts-tax'), // Plural
    //         'recipe_difficulty', // Registered name,
    //     ),
    //     array(
    //         'public' => false,
    //         'hierarchical' => true,
    //         'rewrite' => false,
    //     ),
    //     array('recipe')
    // );
});

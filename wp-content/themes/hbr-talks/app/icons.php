<?php

namespace App;

/**
 * Change default blade-svg icons path
 */
add_filter('bladesvg_image_path', function () {
    return \BladeSvgSage\get_dist_path('images/icons');
});

/**
 * Change default svg class
 */
add_filter('bladesvg_class', function () {
    return 'svg-icon';
});

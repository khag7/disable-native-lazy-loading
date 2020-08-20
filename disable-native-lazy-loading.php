<?php

/*
    DISABLE NATIVE LAZY LOADING FOR WORDPRESS

    Plugin Name:            Disable Native Lazy Loading
    Plugin URI:             https://github.com/demetris/disable-native-lazy-loading
    Description:            Disables native lazy loading of images in WordPress 5.5
    Version:                0.1.0
    Author:                 Demetris Kikizas
    Author URI:             https://kikizas.com/
    Licence:                GPL-2.0
    License URI:            https://opensource.org/licenses/GPL-2.0
    GitHub Plugin URI:      https://github.com/demetris/disable-native-lazy-loading
*/

add_filter('wp_lazy_loading_enabled', '__return_false');

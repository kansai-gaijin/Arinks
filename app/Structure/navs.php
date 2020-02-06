<?php

namespace Arinks\Theme\App\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function Arinks\Theme\App\config;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{
    register_nav_menus([
      'primary' => __('Primary', config('textdomain')),
    ]);
    register_nav_menus([
      'members' => __('Members Only', config('textdomain')),
    ]);
    register_nav_menus([
    'footer' => __('Footer', config('textdomain')),
    ]);
}
add_action('after_setup_theme', 'Arinks\Theme\App\Structure\register_navigation_areas');

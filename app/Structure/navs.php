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
    register_nav_menus([
      'drawer' => __('Drawer', config('textdomain')),
    ]);
    register_nav_menus([
      'drawer-member' => __('Member Drawer', config('textdomain')),
    ]);
}
add_action('after_setup_theme', 'Arinks\Theme\App\Structure\register_navigation_areas');

function add_description_to_menu($item_output, $item, $depth, $args) {
  if (strlen($item->description) > 0 ) {
    $item_output = substr($item_output, 0, -strlen("</a>{$args->after}")) . sprintf('<small class="description">%s</small >', esc_html($item->description)) . "</a>{$args->after}";
  }

  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'Arinks\Theme\App\Structure\add_description_to_menu', 10, 4);
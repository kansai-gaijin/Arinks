<?php

namespace Arinks\Theme\Page;

/*
|------------------------------------------------------------------
| Page Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function Arinks\Theme\App\template;

/**
 * Renders page header
 * 
 * @see resources/templates/partials/page/page-header.tpl.php
 */
function render_page_header(){
  if( !is_front_page() && !is_home() ):
    template('partials/page/page-header',[
      'title' => get_the_title()
    ]);
    elseif( is_archive() ):
      template('partials/page/page-header',[
        'title' => get_the_title(),
      ]);
    elseif( is_home() ):
      template('partials/page/page-header',[
        'title' => get_the_title(),
      ]);
  endif;
}
add_action('theme/page/content_before', 'Arinks\Theme\Page\render_page_header');

/**
 * Renders single page.
 *
 * @see resources/templates/single.tpl.php
 */
template('page');
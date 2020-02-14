<?php

namespace Arinks\Theme\Index;

/*
|------------------------------------------------------------------
| Index Controller
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
  template('partials/page/page-header',[
    'title' => 'ニュース＆トピックス',
  ]);
}
add_action('theme/index/content_before', 'Arinks\Theme\Index\render_page_header');

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('index');

<?php

namespace Arinks\Theme\Header;

/*
|------------------------------------------------------------------
| Header Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's opening markup. Template
| rendered here should include `wp_head()` function call.
|
*/

use function Arinks\Theme\App\template;
use function Arinks\Theme\App\asset_path;

function render_header()
{
  template('partials/header', [
    'title' => get_bloginfo( 'name' ),
    'logo' => asset_path('images/logo-with-text-dark.svg'),
    'site_url' => get_site_url(),
    'desc' => get_bloginfo( 'description' ),
    'login_url' => get_site_url().'/login/',
    'mypage_url' => get_site_url().'/dashboard/',
    'logged_in' => is_user_logged_in(),
    'howto_url' => get_site_url().'/about/',
    'new_user_url' => get_site_url().'/account/',
    'qna_url' => get_site_url().'/qna/'

  ]);
  template('partials/drawer');
}
add_action('theme/head/header', 'Arinks\Theme\Header\render_header');

/**
 * Renders layout's head.
 *
 * @see resources/templates/layout/head.tpl.php
 */
template('layout/head');

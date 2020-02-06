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
    'logo' => asset_path('images/temporary-logo.svg'),
    'site_url' => get_site_url(),
    'desc' => get_bloginfo( 'description' ),
    'login_url' => '#login',
    'mypage_url' => '#mypage',
    'logged_in' => true,
    'howto_url' => '#howtourl',
    'new_user_url' => '#newuser',
    'qna_url' => '#qnaurl'

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

<?php

namespace Arinks\Theme\Footer;

/*
|------------------------------------------------------------------
| Footer Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's closing markup. Template
| rendered here should include `wp_footer()` function call.
|
*/

use function Arinks\Theme\App\template;

function render_footer()
{
  template('partials/footer');
}
add_action('theme/foot/footer', 'Arinks\Theme\Footer\render_footer');

/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
template('layout/footer');

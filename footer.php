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
use function Arinks\Theme\App\asset_path;

function render_footer()
{
  template('partials/footer');
}
add_action('theme/foot/footer', 'Arinks\Theme\Footer\render_footer');

function render_before_footer()
{
  template('partials/before-footer', [
    'logged_in' => is_user_logged_in(),
  ]);
}
add_action('theme/foot/beforefooter', 'Arinks\Theme\Footer\render_before_footer');


/**
 * Renders layout's footer.
 *
 * @see resources/templates/layout/footer.tpl.php
 */
template('layout/footer');

?>

<!--<div id="loader">
  <div class="loader-inner">
    <figure>
      <img src="<?php echo asset_path('images/temporary-logo.svg') ?>" alt="" />
    </figure>
    <p>
      LOADING...
    </p>
  </div>
</div>-->
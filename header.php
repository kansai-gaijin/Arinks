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

/**
 * Renders layout's head.
 *
 * @see resources/templates/layout/head.tpl.php
 */
template('layout/head');

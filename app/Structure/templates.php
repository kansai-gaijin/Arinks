<?php

namespace Arinks\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Templates Actions
|-----------------------------------------------------------
|
| This file purpose is to include your templates rendering
| actions hooks, which allows you to render specific
| partials at specific places of your theme.
|
*/

use function Arinks\Theme\App\template;

/**
 * Renders post thumbnail by its formats.
 *
 * @see resources/templates/index.tpl.php
 */
function render_post_thumbnail()
{
    template(['partials/post/thumbnail', get_post_format()]);
}
add_action('theme/index/post/thumbnail', 'Arinks\Theme\App\Structure\render_post_thumbnail');

/**
 * Renders empty post content where there is no posts.
 *
 * @see resources/templates/index.tpl.php
 */
function render_empty_content()
{
    template(['partials/index/content', 'none']);
}
add_action('theme/index/content/none', 'Arinks\Theme\App\Structure\render_empty_content');

/**
 * Renders post contents by its formats.
 *
 * @see resources/templates/single.tpl.php
 */
function render_post_content()
{
    template(['partials/post/content', get_post_format()]);
}
add_action('theme/single/content', 'Arinks\Theme\App\Structure\render_post_content');


/**
 * Renders post contents by its formats.
 *
 * @see resources/templates/page.tpl.php
 */
function render_page_content()
{
    template(['partials/page/content']);
}
add_action('theme/page/content', 'Arinks\Theme\App\Structure\render_page_content');

/**
 * Renders sidebar content.
 *
 * @uses resources/templates/partials/sidebar.tpl.php
 * @see resources/templates/index.tpl.php
 * @see resources/templates/single.tpl.php
 */
function render_sidebar()
{
    get_sidebar();
}
add_action('theme/index/sidebar', 'Arinks\Theme\App\Structure\render_sidebar');
add_action('theme/single/sidebar', 'Arinks\Theme\App\Structure\render_sidebar');

/**
 * Renders [button] shortcode after homepage content.
 *
 * @uses resources/templates/shortcodes/button.tpl.php
 * @see resources/templates/partials/header.tpl.php
 */
function render_documentation_button()
{
    echo do_shortcode("[button href='https://github.com/tonik/tonik']Checkout documentation →[/button]");
}
add_action('theme/header/end', 'Arinks\Theme\App\Structure\render_documentation_button');

/**
 * Renders post thumbnail by its formats.
 *
 * @see resources/templates/index.tpl.php
 */
function render_teacher_block()
{
    template(['partials/teacher/article']);
}
add_action('theme/index/teacher/article', 'Arinks\Theme\App\Structure\render_teacher_block');

/**
 * Renders post contents by its formats.
 *
 * @see resources/templates/page.tpl.php
 */
function render_teacher_content()
{
    template(['partials/teacher/content']);
}
add_action('theme/teacher/content', 'Arinks\Theme\App\Structure\render_teacher_content');
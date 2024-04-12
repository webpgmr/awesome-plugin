<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `wp_get_nav_menus()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_get_nav_menus/
 * @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 */
class wp_get_nav_menus extends WP_Term_Query {}

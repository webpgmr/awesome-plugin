<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `get_categories()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/get_categories/
 * @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 */
class get_categories extends WP_Term_Query {}

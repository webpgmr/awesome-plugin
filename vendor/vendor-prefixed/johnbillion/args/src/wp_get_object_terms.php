<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `wp_get_object_terms()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_get_object_terms/
 * @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 */
class wp_get_object_terms extends WP_Term_Query {}

<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `get_terms()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/get_terms/
 * @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
 */
class get_terms extends WP_Term_Query {}

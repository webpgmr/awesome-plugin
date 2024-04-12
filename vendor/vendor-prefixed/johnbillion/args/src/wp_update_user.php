<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `wp_update_user()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_update_user/
 * @link https://developer.wordpress.org/reference/functions/wp_insert_user/
 */
class wp_update_user extends wp_insert_user {}

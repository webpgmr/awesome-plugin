<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `get_users()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/get_users/
 * @link https://developer.wordpress.org/reference/classes/wp_user_query/prepare_query/
 */
class get_users extends WP_User_Query {}

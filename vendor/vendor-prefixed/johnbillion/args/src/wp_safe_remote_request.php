<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `wp_safe_remote_request()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_safe_remote_request/
 * @link https://developer.wordpress.org/reference/classes/wp_http/request/
 */
class wp_safe_remote_request extends WP_Http {}

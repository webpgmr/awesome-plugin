<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args;

/**
 * Arguments for the `$args` parameter of the `wp_insert_term()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_insert_term/
 */
class wp_insert_term extends Shared\Base {
	/**
	 * Slug of the term to make this term an alias of. Accepts a term slug.
	 *
	 * Default empty string.
	 */
	public string $alias_of;

	/**
	 * The term description.
	 *
	 * Default empty string.
	 */
	public string $description;

	/**
	 * The id of the parent term.
	 *
	 * Default 0.
	 */
	public int $parent;

	/**
	 * The term slug to use.
	 *
	 * Default empty string.
	 */
	public string $slug;
}

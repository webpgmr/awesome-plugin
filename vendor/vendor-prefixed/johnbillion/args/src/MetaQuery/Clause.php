<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\MetaQuery;

use Awesome_Plugin\Dependencies\Args\Arrayable\Arrayable;

/**
 * Arguments for a clause within a meta query, for example those within a `$meta_query` argument.
 */
final class Clause implements Arrayable, Values {
	use \Awesome_Plugin\Dependencies\Args\Arrayable\ProvidesFromArray;
	use \Awesome_Plugin\Dependencies\Args\Arrayable\ProvidesToArray;

	/**
	 * Meta key or keys to filter by.
	 *
	 * @var string|array<int,string>
	 */
	public $key;

	/**
	 * Meta value or values to filter by.
	 *
	 * @var string|array<int,string>
	 */
	public $value;

	/**
	 * MySQL operator used for comparing the meta value.
	 *
	 * Default is 'IN' when `value` is an array, '=' otherwise.
	 *
	 * @phpstan-var Values::META_COMPARE_VALUE_*
	 */
	public string $compare;

	/**
	 * MySQL operator used for comparing the meta key.
	 *
	 * Default is 'IN' when `key` is an array, '=' otherwise.
	 *
	 * @phpstan-var Values::META_COMPARE_KEY_*
	 */
	public string $compare_key;

	/**
	 * MySQL data type that the `meta_value` column will be CAST to for comparisons.
	 *
	 * @phpstan-var Values::META_TYPE_VALUE_*
	 */
	public string $type;

	/**
	 * MySQL data type that the `meta_key` column will be CAST to for comparisons.
	 *
	 * @phpstan-var Values::META_TYPE_KEY_*
	 */
	public string $type_key;

}

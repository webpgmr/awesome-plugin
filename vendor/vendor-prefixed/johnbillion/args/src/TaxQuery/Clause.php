<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\TaxQuery;

use Awesome_Plugin\Dependencies\Args\Arrayable\Arrayable;

/**
 * Arguments for a clause within a taxonomy query, for example those within a `$tax_query` argument.
 */
final class Clause implements Arrayable, Values {
	use \Awesome_Plugin\Dependencies\Args\Arrayable\ProvidesFromArray;
	use \Awesome_Plugin\Dependencies\Args\Arrayable\ProvidesToArray;

	/**
	 * Taxonomy being queried. Optional when field=term_taxonomy_id.
	 */
	public string $taxonomy;

	/**
	 * Term or terms to filter by.
	 *
	 * @var string|int|array<int,string>|array<int,int>
	 */
	public $terms;

	/**
	 * Field to match `$terms` against. Accepts:
	 *
	 *   - 'term_id'
	 *   - 'slug'
	 *   - 'name'
	 *   - 'term_taxonomy_id'
	 *
	 * Default: 'term_id'.
	 *
	 * @phpstan-var 'term_id'|'slug'|'name'|'term_taxonomy_id'
	 */
	public string $field;

	/**
	 * MySQL operator to be used with $terms in the WHERE clause.
	 *
	 * Accepts:
	 *
	 *   - 'AND'
	 *   - 'IN'
	 *   - 'NOT IN'
	 *   - 'EXISTS'
	 *   - 'NOT EXISTS'
	 *
	 * Default: 'IN'.
	 *
	 * @phpstan-var Values::TAX_QUERY_OPERATOR_*
	 */
	public string $operator;

	/**
	 * Whether to include child terms. Requires a `$taxonomy`.
	 *
	 * Default: true.
	 */
	public bool $children;
}

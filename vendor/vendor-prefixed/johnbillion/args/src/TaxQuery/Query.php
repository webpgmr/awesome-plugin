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
 * Structure for a `tax_query` argument.
 */
final class Query implements Arrayable, Values {
	/**
	 * The MySQL keyword used to join the clauses of the query. Accepts 'AND' or 'OR'.
	 *
	 * Default 'AND'.
	 *
	 * @phpstan-var Values::TAX_QUERY_RELATION_*
	 */
	public string $relation;

	/**
	 * @var array<int, Clause>
	 */
	public array $clauses;

	/**
	 * @param mixed[] $clauses
	 * @return static
	 */
	final public static function fromArray( array $clauses ) : self {
		$class = new static();

		foreach ( $clauses as $key => $value ) {
			if ( 'relation' === $key ) {
				$class->relation = $value;
			} else {
				$class->addClause( Clause::fromArray( $value ) );
			}
		}

		return $class;
	}

	final public function addClause( Clause $clause ) : void {
		$this->clauses[] = $clause;
	}

	/**
	 * @return ?array<string|int,mixed>
	 */
	final public function toArray() :? array {
		if ( ! isset( $this->clauses ) || count( $this->clauses ) === 0 ) {
			return null;
		}

		$vars = [];

		if ( isset( $this->relation ) ) {
			$vars['relation'] = $this->relation;
		}

		foreach ( $this->clauses as $key => $value ) {
			$vars[ $key ] = $value->toArray();
		}

		return $vars;
	}

}

<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\TaxQuery;

/**
 * Arguments for any query class that supports taxonomy queries.
 */
trait ProvidesArgs {
	/**
	 * A `Query` object representing the `WP_Tax_Query` constructor argument.
	 */
	public Query $tax_query;

	public function setTaxQuery( Query $tax_query ) : void {
		$this->tax_query = $tax_query;
	}
}

<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\DateQuery;

/**
 * Arguments for any query class that supports date queries.
 */
trait ProvidesArgs {
	/**
	 * A `Query` object representing the `WP_Date_Query` constructor argument.
	 */
	public Query $date_query;

	public function setDateQuery( Query $date_query ) : void {
		$this->date_query = $date_query;
	}
}

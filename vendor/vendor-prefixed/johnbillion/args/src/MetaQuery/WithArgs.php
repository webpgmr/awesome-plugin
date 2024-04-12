<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\MetaQuery;

/**
 * Methods for any query class that supports meta queries.
 */
interface WithArgs {
	public function setMetaQuery( Query $meta_query ) : void;
}

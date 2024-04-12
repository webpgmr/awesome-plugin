<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\TaxQuery;

/**
 * Argument values for any query class that supports taxonomy queries.
 */
interface Values {
	public const TAX_QUERY_RELATION_AND = 'AND';
	public const TAX_QUERY_RELATION_OR = 'OR';

	public const TAX_QUERY_OPERATOR_AND = 'AND';
	public const TAX_QUERY_OPERATOR_IN = 'IN';
	public const TAX_QUERY_OPERATOR_NOT_IN = 'NOT IN';
	public const TAX_QUERY_OPERATOR_EXISTS = 'EXISTS';
	public const TAX_QUERY_OPERATOR_NOT_EXISTS = 'NOT EXISTS';
}

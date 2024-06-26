<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\DateQuery;

/**
 * Argument values for any query class that supports date queries.
 */
interface Values {
	public const DATE_QUERY_RELATION_AND = 'AND';
	public const DATE_QUERY_RELATION_OR = 'OR';

	public const DATE_QUERY_COMPARE_EQUALS = '=';
	public const DATE_QUERY_COMPARE_NOT_EQUALS = '!=';
	public const DATE_QUERY_COMPARE_GREATER_THAN = '>';
	public const DATE_QUERY_COMPARE_GREATER_THAN_OR_EQUALS = '>=';
	public const DATE_QUERY_COMPARE_LESS_THAN = '<';
	public const DATE_QUERY_COMPARE_LESS_THAN_OR_EQUALS = '<=';
	public const DATE_QUERY_COMPARE_IN = 'IN';
	public const DATE_QUERY_COMPARE_NOT_IN = 'NOT IN';
	public const DATE_QUERY_COMPARE_BETWEEN = 'BETWEEN';
	public const DATE_QUERY_COMPARE_NOT_BETWEEN = 'NOT BETWEEN';
}

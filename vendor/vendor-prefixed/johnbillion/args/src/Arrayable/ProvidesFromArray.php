<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\Arrayable;

/**
 * An arguments object which provides a vanilla `fromArray()` method.
 */
trait ProvidesFromArray {
	/**
	 * @param array<string, mixed> $args
	 * @return static
	 */
	final public static function fromArray( array $args ) : self {
		$class = new static();

		foreach ( $args as $key => $value ) {
			$class->$key = $value;
		}

		return $class;
	}

}

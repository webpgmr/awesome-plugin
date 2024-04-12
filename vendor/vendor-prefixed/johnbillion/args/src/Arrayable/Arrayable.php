<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\Arrayable;

/**
 * Arguments object that can be converted to an array.
 */
interface Arrayable {
	/**
	 * @return ?array<string|int,mixed>
	 */
	public function toArray() :? array;
}

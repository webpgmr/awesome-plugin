<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by Justin Vogt on 12-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace Awesome_Plugin\Dependencies\Args\Shared;

use Awesome_Plugin\Dependencies\Args\Arrayable\Arrayable;

/**
 * @implements \ArrayAccess<string, mixed>
 * @implements \IteratorAggregate<string, mixed>
 */
abstract class Base implements \ArrayAccess, \Countable, \IteratorAggregate, Arrayable {
	public const ORDER_ASC = 'ASC';
	public const ORDER_DESC = 'DESC';

	use \Awesome_Plugin\Dependencies\Args\Arrayable\ProvidesFromArray;
	use \Awesome_Plugin\Dependencies\Args\Arrayable\ProvidesToArray;

	final public function __construct() {
		if ( $this instanceof \Awesome_Plugin\Dependencies\Args\DateQuery\WithArgs ) {
			$this->setDateQuery( new \Awesome_Plugin\Dependencies\Args\DateQuery\Query );
		}
		if ( $this instanceof \Awesome_Plugin\Dependencies\Args\MetaQuery\WithArgs ) {
			$this->setMetaQuery( new \Awesome_Plugin\Dependencies\Args\MetaQuery\Query );
		}
		if ( $this instanceof \Awesome_Plugin\Dependencies\Args\TaxQuery\WithArgs ) {
			$this->setTaxQuery( new \Awesome_Plugin\Dependencies\Args\TaxQuery\Query );
		}
	}

	/**
	 * @param mixed $offset
	 */
	#[\ReturnTypeWillChange]
	final public function offsetExists( $offset ) : bool {
		if ( ! is_string( $offset ) ) {
			return false;
		}

		return array_key_exists( $offset, get_object_vars( $this ) );
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	#[\ReturnTypeWillChange]
	final public function offsetGet( $offset ) {
		if ( ! is_string( $offset ) ) {
			return null;
		}

		if ( ! array_key_exists( $offset, get_object_vars( $this ) ) ) {
			return null;
		}

		return $this->$offset;
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	#[\ReturnTypeWillChange]
	final public function offsetSet( $offset, $value ) : void {
		$this->$offset = $value;
	}

	/**
	 * @param mixed $offset
	 */
	#[\ReturnTypeWillChange]
	final public function offsetUnset( $offset ) : void {
		unset( $this->$offset );
	}

	final public function count() : int {
		return count( $this->toArray() );
	}

	final public function getIterator() : \Traversable {
		return new \ArrayIterator( $this->toArray() );
	}
}

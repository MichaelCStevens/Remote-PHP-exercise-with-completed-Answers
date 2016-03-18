<?php

class Math
{
	/**
	 * A root number to perform math on.
	 *
	 * @var mixed
	 */
	protected $root;

	/**
	 * Create a new Math instance.
	 *
	 * @param  mixed  $root
	 */
	public function __construct($root)
	{
		$this->setRoot($root);
	}

	/**
	 * Gets the root number.
	 *
	 * @return  mixed
	 */
	public function getRoot()
	{
		return $this->root;
	}

	/**
	 * Sets the root number.
	 *
	 * @param  mixed  $root
	 *
	 * @return self
	 */
	public function setRoot($root)
	{
		if ( ! is_numeric($root))
		{
			throw new InvalidArgumentException('Root number must be numeric. Unrecognized number "'.$root.'"');
		}

		$this->root = $root;

		return $this;
	}

	/**
	 * Add $x to root.
	 *
	 * @param  mixed  $x
	 * @return mixed
	 */
	public function add($x)
	{
		return $this->root + $x;
	}

	/**
	 * Subtract $x from root.
	 *
	 * @param  mixed  $x
	 * @return mixed
	 */
	public function subtract($x)
	{
		return $this->root - $x;
	}

	/**
	 * Multiply root by $x.
	 *
	 * @param  mixed  $x
	 * @return mixed
	 */
	public function multiply($x)
	{
		return $this->root * $x;
	}

	/**
	 * Divide root by $x.
	 *
	 * @param  mixed  $x
	 * @return mixed
	 */
	public function divide($x)
	{
		return $this->root / $x;
	}

	/**
	 * Get double of the root value.
	 *
	 * @return mixed
	 */
	public function getDouble()
	{
		return $this->multiply(2);
	}

	/**
	 * Get half of the root value.
	 *
	 * @return mixed
	 */
	public function getHalf()
	{
		return $this->divide(2);
	}
}
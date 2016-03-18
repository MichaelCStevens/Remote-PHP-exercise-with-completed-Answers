<?php
namespace Swarming;
use Acme\Foo as Af;
class Fizz
{
	public function buzz()
	{
		$foo = new Af;

		return $foo->bar();
	}
}
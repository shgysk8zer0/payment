<?php
namespace shgysk8zer0\Payment\Interfaces;

use \JsonSerializable;
interface BasicCardNetworkInterface extends JsonSerializable
{
	public function getValue(): string;

	public static function validate(string $ccnum): bool;
}

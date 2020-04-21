<?php
namespace shgysk8zer0\Payment\CardNetwork;
use \shgysk8zer0\Payment\Abstracts\{AbstractBasicCardNetwork};

final class MIR extends AbstractBasicCardNetwork
{
	public const NETWORK = self::MIT;

	public static function validate(string $ccnum): bool
	{
		return true;
	}
}

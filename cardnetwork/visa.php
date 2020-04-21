<?php
namespace shgysk8zer0\Payment\CardNetwork;
use \shgysk8zer0\Payment\Abstracts\{AbstractBasicCardNetwork};

final class Visa extends AbstractBasicCardNetwork
{
	public const NETWORK = self::VISA;

	public static function validate(string $ccnum): bool
	{
		return true;
	}
}

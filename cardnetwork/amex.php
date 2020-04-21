<?php
namespace shgysk8zer0\Payment\CardNetwork;
use \shgysk8zer0\Payment\Abstracts\{AbstractBasicCardNetwork};

final class Amex extends AbstractBasicCardNetwork
{
	public const NETWORK = self::AMEX;

	public static function validate(): bool
	{
		return true;
	}
}

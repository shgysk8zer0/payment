<?php
namespace shgysk8zer0\Payment\CardNetwork;
use \shgysk8zer0\Payment\Abstracts\{AbstractBasicCardNetwork};

final class Diners extends AbstractBasicCardNetwork
{
	public const NETWORK = self::DINERS;

	public static function validate(): bool
	{
		return true;
	}
}

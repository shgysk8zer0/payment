<?php
namespace shgysk8zer0\Payment\CardNetwork;
use \shgysk8zer0\Payment\Abstracts\{AbstractBasicCardNetwork};

final class UnionPay extends AbstractBasicCardNetwork
{
	public const NETWORK = self::UNIIONPAY;

	public static function validate(string $ccnum): bool
	{
		return true;
	}
}

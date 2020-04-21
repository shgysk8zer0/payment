<?php
namespace shgysk8zer0\Payment\CardNetwork;
use \shgysk8zer0\Payment\Abstracts\{AbstractBasicCardNetwork};

final class Discover extends AbstractBasicCardNetwork
{
	public const NETWORK = self::DISCOVER;

	public static function validate(): bool
	{
		return true;
	}
}

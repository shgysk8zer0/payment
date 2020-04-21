<?php
namespace shgysk8zer0\Payment\Abstracts;
use \shgysk8zer0\Payment\Interfaces\{BasicCardNetworkInterface};

abstract class AbstractBasicCardNetwork implements BasicCardNetworkInterface
{
	public const AMEX          = 'amex';
	public const CARTEBANCAIRE = 'cartebancaire';
	public const DINERS        = 'diners';
	public const DISCOVER      = 'discover';
	public const JCB           = 'jcb';
	public const MASTERCARD    = 'mastercard';
	public const MIR           = 'mir';
	public const UNIONPAY      = 'unionpay';
	public const VISA          = 'visa';

	final public function getValue(): string
	{
		return $this::NETWORK;
	}

	final public function jsonSerialize(): string
	{
		return $this->getValue();
	}

	abstract public static function validate(string $ccnum): bool;
}

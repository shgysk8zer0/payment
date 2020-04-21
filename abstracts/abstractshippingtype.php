<?php
namespace shgysk8zer0\Payment\Abstracts;
use \shgysk8zer0\Payment\Interfaces\{ShippingTypeInterface};

abstract class AbstractShippingType implements ShippingTypeInterface
{
	// have to prefix with all "TYPE_" so that `NULL_TYPE` can be valid
	public const TYPE_SHIPPING = 'shipping';

	public const TYPE_DELIVERY = 'delivery';

	public const TYPE_PICKUP   = 'pickup';

	public const TYPE_NULL     = null;

	public const TYPE          = self::TYPE_NULL;

	final public function getValue():? string
	{
		return $this::TYPE;
	}
}

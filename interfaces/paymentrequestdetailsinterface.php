<?php
namespace shgysk8zer0\Payment\Interfaces;

use \JsonSerializable;

interface PaymentRequestDetailsInterface extends JsonSerializable
{
	public function getTotal(): DisplayItemInterface;

	public function getDisplayItems(): iterable;

	public function addDisplayItem(DisplayItemInterface $val): void;

	public function setDisplayItems(DisplayItemInterface ...$vals): void;

	public function getShippingOptions(): interable;

	public function addShippingOption(ShippingOptionInterface $val): void;

	public function setShippingOptions(ShippingOptionInterface ...$vals): void;

	public function getSelectedShippingOption():? ShippingOptionInterface;

	public function setSelectedShippingOption(string $val): void;
}

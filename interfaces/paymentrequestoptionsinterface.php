<?php
namespace shgysk8zer0\Payment\Interfaces;
use \JsonSerializable;
interface PaymentRequestOptionsInterface extends JsonSerializable
{
	public function getRequestPayerEmail(): bool;

	public function setRequestPayerEmail(bool $val): void;

	public function getRequestPayerName(): bool;

	public function setRequestPayerName(bool $val): void;

	public function getRequestPayerPhone(): bool;

	public function setRequestPayerPhone(bool $val): void;

	public function getShippingType():? ShippingTypeInterface;

	public function setShippingType(?ShippingTypeInterface $val): void;
}

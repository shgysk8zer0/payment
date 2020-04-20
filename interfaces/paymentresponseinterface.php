<?php

namespace shgysk8zer0\Payment\Interfaces;
use \JsonSerializable;
interface PaymentResponseInterface extends JsonSerializable
{
	public function getDetails(): PaymentResponseDetailsInterface;

	public function setDetails(PaymentResponseDetailsInterface $val): void;

	public function getMethodName(): string;

	public function setMethodName(string $val): void;

	public function getPayerEmail():? string;

	public function setPayerEmail(?string $val): void;

	public function getPayerPhone():? string;

	public function setPayerPhone(?string $val): void;

	public function getRequestId():? string;

	public function setRequestId(?string $val): void;

	public function getShippingAddress():? PaymentAddressInterface;

	public function setShippingAddress(?PaymentAddressInterface $val): void;

	public function getShippingOption():? string;

	public function setShippingOption(?string $val): void;
}

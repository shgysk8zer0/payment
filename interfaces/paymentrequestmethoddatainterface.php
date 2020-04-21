<?php
namespace shgysk8zer0\Payment\Interfaces;

interface PaymentRequestMethodDataInterface
{
	public function getSupportedMethods(): iterable;

	public function getSupportedMethodsAsString(): string;

	public function setSupportedMethods(PaymentMethodInterface ...$vals): void;
}

<?php
namespace shgysk8zer0\Payment\Interfaces;

use \JsonSerializable;

interface PaymentInstrumentInterface extends JsonSerializable
{
	public function getSupportedMethods(): string;

	public function getData(): PaymentRequestDataInterface;
}

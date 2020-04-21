<?php
namespace shgysk8zer0\Payment\Interfaces;

interface BasicCardRequestInterface extends PaymentRequestDataInterface
{
	public function getSupportedNetworks(): iterable;

	public function setSupportedMethods(BasicCardNetworkInterface... $vals): void;
}

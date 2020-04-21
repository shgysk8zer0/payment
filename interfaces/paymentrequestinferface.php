<?php
namespace shgysk8zer0\Payment\Interfaces;
use \JsonSerializable;
interface PaymentRequestInterface extends JsonSerializable
{
	public function getId(): string;

	public function setId(string $val): void;
}

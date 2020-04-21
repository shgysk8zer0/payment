<?php
namespace shgysk8zer0\Payment\Interfaces;
use \JsonSerializable;

interface AmountInterface extends JsonSerializable
{
	public function getCurrency(): string;

	public function setCurrency(string $val): void;

	public function getValue(): float;

	public function setValue(float $val): void;
}

<?php
namespace shgysk8zer0\Payment\Interfaces;

use \JsonSerializable;

interface DisplayItemInterface extends JsonSerializable
{
	public function getLabel(): string;

	public function setLabel(string $val): void;

	public function getAmount(): AmountInterface;

	public function setAmount(AmountInterface $val): void;
}

<?php
namespace shgysk8zer0\Payment\Interfaces;

interface ShippingOptionInterface extends DisplayItemInterface
{
	public function getid(): string;

	public function setId(string $val): void;

	public function getSelected(): bool;

	public function setSelected(bool $val): void;
}

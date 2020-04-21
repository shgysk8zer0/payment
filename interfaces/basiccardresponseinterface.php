<?php
namespace shgysk8zer0\Payment\Interfaces;
/**
 * @see https://developer.mozilla.org/en-US/docs/Web/API/BasicCardResponse
 */
use \DateTimeInterface;

interface BasicCardResponseInterface extends PaymentResponseDetailsInterface
{
	public function getCardNumber(): string;

	public function setCardNumber(string $val): void;

	public function getCardholderName(): string;

	public function setCardholderName(string $val): void;

	public function getCardSecurityCode(): string;

	public function setCardSecurityCode(string $val): void;

	public function getExpiryMonth(): int;

	public function setExpiryMonth(int $val): void;

	public function getExpiryYear(): int;

	public function setExpiryYear(int $val): void;

	public function getBillingAddress():? PaymentAddressInterface;

	public function setBillingAddress(?PaymentAddressInterface $val): void;

	public function getExpiry(): DateTimeInterface;

	public function getExpired(): bool;
}

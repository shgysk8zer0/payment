<?php
namespace shgysk8zer0\Payment\Interfaces;

interface PaymentGatewayInterface
{
	public function setPaymentRequest(PaymentRequestInterface $val): void;

	public function setPaymentResponse(PaymentResponseInterface $val): void;
}

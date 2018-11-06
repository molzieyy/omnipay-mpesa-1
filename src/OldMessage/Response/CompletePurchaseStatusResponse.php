<?php

namespace Omnipay\Mpesa\Message\Response;

/**
 * @see https://docs.mollie.com/reference/v2/payments-api/get-payment
 */
class CompletePurchaseStatusResponse extends TransactionStatusResponse
{
    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return parent::isSuccessful() && $this->isPaid();
    }
}

<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\TransactionStatusResponse;

class TransactionStatusRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|TransactionStatusResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->transactionStatus($data);

        return $this->response = new TransactionStatusResponse($this, $response);
    }
}

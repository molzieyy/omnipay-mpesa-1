<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Mpesa\Message\Response\AccountBalanceResponse;

class AccountBalanceRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|AccountBalanceResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->accountBalance($data);

        return $this->response = new AccountBalanceResponse($this, $response);
    }
}

<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\ReversalResponse;

class ReversalRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|ReversalResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->reversal($data);

        return $this->response = new ReversalResponse($this, $response);
    }
}

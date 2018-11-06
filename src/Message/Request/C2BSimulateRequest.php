<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\C2BSimulateResponse;

class C2BSimulateRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|C2BSimulateResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->C2BSimulate($data);

        return $this->response = new C2BSimulateResponse($this, $response);
    }
}

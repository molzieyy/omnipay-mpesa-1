<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\C2BRegisterResponse;

class C2BRegisterRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|C2BRegisterResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->C2BRegister($data);

        return $this->response = new C2BRegisterResponse($this, $response);
    }
}

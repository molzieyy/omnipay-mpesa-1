<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\B2CResponse;

class B2CRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|B2CResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->B2C($data);

        return $this->response = new B2CResponse($this, $response);
    }
}

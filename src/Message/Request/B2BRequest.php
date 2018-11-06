<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\B2BResponse;

class B2BRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|B2BResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->B2B($data);

        return $this->response = new B2BResponse($this, $response);
    }
}

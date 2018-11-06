<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\STKPushResponse;

class STKPushRequest extends AbstractMpesaRequest
{
    /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|STKPushResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->STKPush($data);

        return $this->response = new STKPushResponse($this, $response);
    }
}

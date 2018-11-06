<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Message\Response\STKStatusResponse;

class STKStatusRequest extends AbstractMpesaRequest
{
   /**
     * @param mixed $data
     * @return \Omnipay\Common\Message\ResponseInterface|STKStatusResponse
     */
    public function sendData($data)
    {
        $response = $this->getMpesa()->STKStatus($data);

        return $this->response = new STKStatusResponse($this, $response);
    }
}

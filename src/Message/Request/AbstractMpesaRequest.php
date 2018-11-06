<?php

namespace Omnipay\Mpesa\Message\Request;

use Omnipay\Common\Message\AbstractRequest;
use Kabangi\Mpesa\Init as Mpesa;

/**
 * This class holds all the common things for all of Mpesa requests.
 *
 * @see https://developer.safaricom.co.ke/docs
 */
abstract class AbstractMpesaRequest extends AbstractRequest
{
    /**
     * @return string
     */
    public function getCallbackMethod()
    {
        return $this->getParameter('callback_method');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCallbackMethod($value)
    {
        return $this->setParameter('callback_method', $value);
    }

    /**
     * @return string
     */
    public function getCacheLocation()
    {
        return $this->getParameter('cache_location');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCacheLocation($value)
    {
        return $this->setParameter('cache_location', $value);
    }

    /**
     * @return string
     */
    public function getApps()
    {
        return $this->getParameter('apps');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setApps($value)
    {
        return $this->setParameter('apps', $value);
    }

    /**
     * @return string
     */
    public function getIsSandbox()
    {
        return $this->getParameter('is_sandbox');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIsSandbox($value)
    {
        return $this->setParameter('is_sandbox', $value);
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->getParameter('apiUrl');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setApiUrl($value)
    {
        return $this->setParameter('apiUrl', $value);
    }

    /**
     * @return array|mixed
     */
    public function getData()
    {
        //the mpesa package takes care of validating request fields
        //we do nothing here
        return [];
    }

    /**
     * @return Mpesa
     */
    public function getMpesa()
    {
        return $mpesa = new Mpesa($this->getParameters());
    }
}

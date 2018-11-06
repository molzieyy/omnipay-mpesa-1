<?php

namespace Omnipay\Mpesa;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\Mpesa\Message\Request\CompletePurchaseRequest;
use Omnipay\Mpesa\Message\Request\CreateCustomerMandateRequest;
use Omnipay\Mpesa\Message\Request\CreateCustomerRequest;
use Omnipay\Mpesa\Message\Request\FetchCustomerMandatesRequest;
use Omnipay\Mpesa\Message\Request\FetchCustomerRequest;
use Omnipay\Mpesa\Message\Request\FetchIssuersRequest;
use Omnipay\Mpesa\Message\Request\FetchPaymentMethodsRequest;
use Omnipay\Mpesa\Message\Request\FetchTransactionRequest;
use Omnipay\Mpesa\Message\Request\PurchaseRequest;
use Omnipay\Mpesa\Message\Request\RefundRequest;
use Omnipay\Mpesa\Message\Request\RevokeCustomerMandateRequest;
use Omnipay\Mpesa\Message\Request\UpdateCustomerRequest;

/**
 * Mpesa Gateway provides a wrapper for Mpesa API.
 * Please have a look at link below to have a high-level overview and see the API specification
 *
 * @see http://developer.safaricom.co.ke/
 *
 * @method RequestInterface authorize(array $options = array())
 * @method RequestInterface completeAuthorize(array $options = array())
 * @method RequestInterface capture(array $options = array())
 * @method RequestInterface void(array $options = array())
 * @method RequestInterface createCard(array $options = array())
 * @method RequestInterface updateCard(array $options = array())
 * @method RequestInterface deleteCard(array $options = array())
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Mpesa';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'apiKey' => '',
        );
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->getParameter('apiKey');
    }

    /**
     * @param  string $value
     * @return $this
     */
    public function setApiKey($value)
    {
        return $this->setParameter('apiKey', $value);
    }

    /**
     * @param  array $parameters
     * @return FetchIssuersRequest
     */
    public function STKStatus(array $parameters = [])
    {
        /** @var FetchIssuersRequest $request */
        $request = $this->createRequest(FetchIssuersRequest::class, $parameters);

        return $request;
    }
}

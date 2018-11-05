<?php

namespace Omnipay\Mpesa\Test;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mpesa\Gateway;
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
use Omnipay\Tests\GatewayTestCase;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class GatewayTest extends GatewayTestCase
{
    /**
     * @var Gateway
     */
    protected $gateway;

    public function setUp()
    {
        $this->gateway = new Gateway();
        parent::setUp();
    }
}

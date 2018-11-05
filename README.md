# Omnipay: Mpesa

**Mpesa driver for the Omnipay PHP payment processing library**

[![Build Status](https://travis-ci.org/thephpleague/omnipay-mpesa.png?branch=master)](https://travis-ci.org/thephpleague/omnipay-mpesa)
[![Latest Stable Version](https://poser.pugx.org/omnipay/mpesa/version.png)](https://packagist.org/packages/omnipay/mpesa)
[![Total Downloads](https://poser.pugx.org/omnipay/mpesa/d/total.png)](https://packagist.org/packages/omnipay/mpesa)

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP. This package implements Mpesa support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply require `league/omnipay` and `omnipay/mpesa` with Composer:

```
composer require league/omnipay omnipay/mpesa
```

## Basic Usage

The following gateways are provided by this package:

* Mpesa

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

### Basic purchase example

```php
$gateway = \Omnipay\Omnipay::create('Mpesa');  
$gateway->setApiKey('test_dHar4XY7LxsDOtmnkVtjNVWXLSlXsM');

$response = $gateway->purchase(
    [
        "amount" => "10.00",
        "currency" => "EUR",
        "description" => "My first Payment",
        "returnUrl" => "https://webshop.example.org/mpesa-return.php"
    ]
)->send();

// Process response
if ($response->isSuccessful()) {

    // Payment was successful
    print_r($response);

} elseif ($response->isRedirect()) {

    // Redirect to offsite payment gateway
    $response->redirect();

} else {

    // Payment failed
    echo $response->getMessage();
}
```


## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/thephpleague/omnipay-mpesa/issues),
or better yet, fork the library and submit a pull request.

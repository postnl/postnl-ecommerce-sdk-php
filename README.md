
# Getting Started with Postnl-Ecommerce

## Introduction

<div><p><b>PostNL Ecommerce APIs</b></p><p>Explore our technical documentation, test your integration and go live with PostNL service.</p><p><b>Start using PostNL APIs for e-commerce processes</b></p><p>To get to know the PostNL APIs better, read all about it in our <a href='https://developer.postnl.nl/api-overview/'>API overview</a>. Learn everything you need to about our API's before embarking on integration with PostNL.</p><p>To connect to PostNL, you can request an API key via <a href='https://mijn.postnl.nl/c/BP2_Mod_Login.app?inresponseto=&RelayState=&startURL=%2F'>Mijn PostNL</a> portal. Choose your APIs and build your integration. Explore our guides, examples, and resources to guide you through each phase of integration and start testing. Ensure that you can make successful test calls towards all endpoints used in the solution.</p><p>Contact our integrations team to have your test calls reviewed and gain access to our API production environment. Once everything is configured and validated, you'll be ready to go live and start using the PostNL service.</p><p>For help contact us via our support form: <a href='https://developer.postnl.nl/support/form/'>Need help? Submit a case | PostNL</a>.</p></div>


## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "postnl/postnl-ecommerce-sdk:1.0.5"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "postnl/postnl-ecommerce-sdk": "1.0.5"
}
```

You can also view the package at:
https://packagist.org/packages/postnl/postnl-ecommerce-sdk#1.0.5

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION_SERVER`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `3` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `customHeaderAuthenticationCredentials` | [`CustomHeaderAuthenticationCredentials`](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
$client = PostnlEcommerceClientBuilder::init()
    ->customHeaderAuthenticationCredentials(
        CustomHeaderAuthenticationCredentialsBuilder::init(
            'apikey'
        )
    )
    ->environment(Environment::PRODUCTION_SERVER)
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| Production server | **Default** Production server |
| Non-Production server | Sandbox environment for testing |

## Authorization

This API uses the following authentication schemes.

* [`APIKeyHeader (Custom Header Signature)`](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/auth/custom-header-signature.md)

## List of APIs

* [Postalcodecheck](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/postalcodecheck.md)
* [Barcode](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/barcode.md)
* [Checkout](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/checkout.md)
* [Confirming](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/confirming.md)
* [Deliverydate](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/deliverydate.md)
* [Labelling](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/labelling.md)
* [Locations](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/locations.md)
* [Shipment](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/shipment.md)
* [Shipping Status](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/shipping-status.md)
* [Timeframes](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/controllers/timeframes.md)

## Classes Documentation

* [ApiException](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/api-exception.md)
* [ApiResponse](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/api-response.md)
* [HttpRequest](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/http-request.md)
* [HttpResponse](https://www.github.com/postnl/postnl-ecommerce-sdk-php/tree/1.0.5/doc/http-response.md)


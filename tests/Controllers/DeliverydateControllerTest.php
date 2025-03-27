<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use PostnlEcommerceLib\Controllers\DeliverydateController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class DeliverydateControllerTest extends BaseTestController
{
    /**
     * @var DeliverydateController DeliverydateController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getDeliverydateController();
    }

    public function testCalculateShippingDate()
    {
        // Parameters for the API call
        $deliveryDate = '30-05-2022';
        $shippingDuration =
            1;
        $postalCode = '2132WT';
        $countryCode = Models\CountrycodeEnum::NL;
        $originCountryCode =
            Models\OriginCountryCodeEnum::NL;
        $city = 'Hoofddorp';
        $street = 'Siriusdreef';
        $houseNumber = 42;
        $houseNrExt = 'A';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->calculateShippingDate(
                $deliveryDate,
                $shippingDuration,
                $postalCode,
                $countryCode,
                $originCountryCode,
                $city,
                $street,
                $houseNumber,
                $houseNrExt
            )->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object('{"SentDate":"29-06-2022"}')))
            ->assert();
    }
}

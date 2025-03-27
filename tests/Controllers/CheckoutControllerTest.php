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
use PostnlEcommerceLib\Controllers\CheckoutController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class CheckoutControllerTest extends BaseTestController
{
    /**
     * @var CheckoutController CheckoutController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getCheckoutController();
    }

    public function testCheckout()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"OrderDate":"24-02-2021 12:00:00","ShippingDuration":1,"CutOffTimes":[{"Day":"00"' .
            ',"Available":true,"Type":"Regular","Time":"20:00:00"},{"Day":"00","Available":true,' .
            '"Type":"Today","Time":"12:00:00"}],"HolidaySorting":true,"Options":["Daytime","Even' .
            'ing","Today","Sunday","Pickup"],"Locations":2,"Days":3,"Addresses":[{"AddressType":' .
            '"01","Street":"Molengraaffplantsoen","HouseNr":74,"Zipcode":"3571ZZ","City":"Utrech' .
            't","Countrycode":"NL"}]}',
            Models\CheckoutRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->checkout($body)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"DeliveryOptions":[{"DeliveryDate":"09-07-2019","Timeframe":[{"From":"18:00:0' .
                '0","To":"22:30:00","Options":["Daytime"],"ShippingDate":"08-07-2019","Sustainab' .
                'ility":{"Code":"02","Description":"Sustainable option"}}]}],"PickupOptions":[{"' .
                'PickupDate":"09-07-2019","ShippingDate":"08-07-2019","Option":"Pickup","Locatio' .
                'ns":[{"Address":{"Street":"Siriusdreef","Zipcode":"2132WT","HouseNr":42,"HouseN' .
                'rExt":"-60","Countrycode":"NL","CompanyName":"Pickup company BV"},"PickupTime":' .
                '"15:00","OpeningHours":{"Monday":{"From":"08:30:00","To":"22:30:00"},"Tuesday":' .
                '{"From":"08:30:00","To":"22:30:00"},"Wednesday":{"From":"08:30:00","To":"22:30:' .
                '00"},"Thursday":{"From":"08:30:00","To":"22:30:00"},"Friday":{"From":"08:30:00"' .
                ',"To":"22:30:00"},"Saturday":{"From":"08:30:00","To":"22:30:00"},"Sunday":{"Fro' .
                'm":"08:30:00","To":"22:30:00"}},"Distance":234,"LocationCode":"8101163043","Par' .
                'tnerID":"PNPNL-01","Sustainability":{"Code":"02","Description":"Sustainable opt' .
                'ion"}}]}],"Warnings":[{"DeliveryDate":"07-07-2019","Code":"5034","Description":' .
                '"No delivery option found on date","Options":"Daytime"}]}'
            )))
            ->assert();
    }
}

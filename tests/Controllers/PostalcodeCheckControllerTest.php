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
use PostnlEcommerceLib\Controllers\PostalcodeCheckController;
use PostnlEcommerceLib\Exceptions;

class PostalcodeCheckControllerTest extends BaseTestController
{
    /**
     * @var PostalcodeCheckController PostalcodeCheckController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getPostalcodeCheckController();
    }

    public function testCheckoutPostalcodeCheck()
    {
        // Parameters for the API call
        $postalcode = '3571ZZ';
        $housenumber = '74';
        $housenumberaddition =
            'bis';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->checkoutPostalcodeCheck($postalcode, $housenumber, $housenumberaddition)
                ->getResult();
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
                '[{"city":"UTRECHT","postalCode":"3571ZZ","streetName":"Molengraaffplantsoen","' .
                'houseNumber":74,"houseNumberAddition":"bis","formattedAddress":["Molengraaffpla' .
                'ntsoen 74 bis","3571ZZ UTRECHT"]}]'
            )))
            ->assert();
    }
}

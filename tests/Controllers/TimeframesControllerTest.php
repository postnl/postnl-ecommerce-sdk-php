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
use PostnlEcommerceLib\Controllers\TimeframesController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class TimeframesControllerTest extends BaseTestController
{
    /**
     * @var TimeframesController TimeframesController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getTimeframesController();
    }

    public function testRetrieveDeliveryTimeframes()
    {
        // Parameters for the API call
        $allowSundaySorting =
            false;
        $startDate = '30-06-2022';
        $endDate = '02-07-2022';
        $countryCode = Models\CountrycodeEnum::NL;
        $postalCode = '2132WT';
        $houseNumber = 42;
        $options = TestParam::object('["Daytime","Evening","Sunday"]');
        $houseNrExt = 'A';
        $city = 'Hoofddorp';
        $street = 'Siriusdreef';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveDeliveryTimeframes(
                $allowSundaySorting,
                $startDate,
                $endDate,
                $countryCode,
                $postalCode,
                $houseNumber,
                $options,
                $houseNrExt,
                $city,
                $street
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
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"Timeframes":{"Timeframe":[{"Date":"02-07-2022","Timeframes":{"TimeframeTimef' .
                'rame":[{"From":"12:30:00","Options":{"string":"Daytime"},"To":"14:30:00","Susta' .
                'inability":{"Code":"02","Description":"Sustainable option"}}]}}]},"ReasonNoTime' .
                'frames":{"ReasonNoTimeframe":[{"Code":"1","Date":"02-07-2022","Description":"De' .
                'livery date not allowed","Options":{"string":"Evening"},"Sustainability":{"Code' .
                '":"02","Description":"Sustainable option"}}]}}'
            )))
            ->assert();
    }
}

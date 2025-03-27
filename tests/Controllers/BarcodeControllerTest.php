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
use PostnlEcommerceLib\Controllers\BarcodeController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class BarcodeControllerTest extends BaseTestController
{
    /**
     * @var BarcodeController BarcodeController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getBarcodeController();
    }

    public function testGenerateBarcode()
    {
        // Parameters for the API call
        $customerCode = 'DEVC';
        $customerNumber = '11223344';
        $type = Models\TypeEnum::ENUM_3S;
        $serie = '100000000';
        $range = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->generateBarcode($customerCode, $customerNumber, $type, $serie, $range)
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
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object('{"Barcode":"3SDEVC903942795"}')))
            ->assert();
    }
}

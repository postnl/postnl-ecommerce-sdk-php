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
use PostnlEcommerceLib\Controllers\ConfirmingController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class ConfirmingControllerTest extends BaseTestController
{
    /**
     * @var ConfirmingController ConfirmingController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getConfirmingController();
    }

    public function testConfirmShipment()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"Customer":{"Address":{"AddressType":"02","City":"Den Haag","CompanyName":"PostNL' .
            '","Countrycode":"NL","HouseNr":"3","Street":"Waldorpstraat","Zipcode":"2521CA"},"Co' .
            'llectionLocation":"123456","ContactPerson":"Janssen","CustomerCode":"DEVC","Custome' .
            'rNumber":"11223344","Email":"email@company.com","Name":"Janssen"},"Message":{"Messa' .
            'geID":"1","MessageTimeStamp":"08-09-2022 12:00:00"},"Shipments":[{"Addresses":[{"Ad' .
            'dressType":"01","City":"Utrecht","Countrycode":"NL","FirstName":"Peter","HouseNr":"' .
            '9","HouseNrExt":"a bis","Name":"de Ruiter","Street":"Bilderdijkstraat","Zipcode":"3' .
            '532VA"}],"Barcode":"3SDEVC748859096","Contacts":[{"ContactType":"01","Email":"recei' .
            'ver@email.com","SMSNr":"+31612345678","TelNr":"+31301234567"}],"Dimension":{"Weight' .
            '":2000},"ProductCodeDelivery":"3085"}]}',
            Models\ConfirmingRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->confirmShipment($body)->getResult();
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
                '{"ResponseShipments":[{"Errors":[],"Warnings":[{"Code":"1280103","Description"' .
                ':"Address is unknown"}],"Barcode":"3SDEVC281677095"}]}'
            )))
            ->assert();
    }
}

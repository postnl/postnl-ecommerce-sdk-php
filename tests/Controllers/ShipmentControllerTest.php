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
use PostnlEcommerceLib\Controllers\ShipmentController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class ShipmentControllerTest extends BaseTestController
{
    /**
     * @var ShipmentController ShipmentController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getShipmentController();
    }

    public function testGenerateShipmentLabel()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"Customer":{"Address":{"AddressType":"02","City":"Den Haag","CompanyName":"PostNL' .
            '","Countrycode":"NL","HouseNr":"3","Street":"Waldorpstraat","Zipcode":"2521CA"},"Co' .
            'llectionLocation":"123456","ContactPerson":"Janssen","CustomerCode":"DEVC","Custome' .
            'rNumber":"11223344","Email":"email@company.com","Name":"Janssen"},"Message":{"Messa' .
            'geID":"1","MessageTimeStamp":"08-09-2022 12:00:00","Printertype":"GraphicFile|PDF"}' .
            ',"Shipments":[{"Addresses":[{"AddressType":"01","City":"Utrecht","Countrycode":"NL"' .
            ',"FirstName":"Peter","HouseNr":"9","HouseNrExt":"a bis","Name":"de Ruiter","Street"' .
            ':"Bilderdijkstraat","Zipcode":"3532VA"}],"Barcode":"3SDEVC748859096","Contacts":[{"' .
            'ContactType":"01","Email":"receiver@email.com","SMSNr":"+31612345678","TelNr":"+313' .
            '01234567"}],"Dimension":{"Weight":2000},"ProductCodeDelivery":"3085"}]}',
            Models\LabellingRequest::class
        );
        $confirm = true;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->generateShipmentLabel($body, $confirm)->getResult();
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
                '{"MergedLabels":[],"ResponseShipments":[{"Barcode":"3SDEVC272730803","Errors":' .
                '[],"Warnings":[],"Labels":[{"Content":"JVBERi0xLjMKJeLjz9MKNSAwIG9iago8PAovQ29u' .
                'dGVudHMg[TRUNCATED]","Labeltype":"Label","OutputType":"PDF"}],"ProductCodeDeliv' .
                'ery":"3085"}]}'
            )))
            ->assert();
    }
}

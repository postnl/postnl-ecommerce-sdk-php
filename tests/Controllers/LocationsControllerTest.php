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
use PostnlEcommerceLib\Controllers\LocationsController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class LocationsControllerTest extends BaseTestController
{
    /**
     * @var LocationsController LocationsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getLocationsController();
    }

    public function testGetPickupLocationsByAddress()
    {
        // Parameters for the API call
        $countryCode = Models\CountrycodeEnum::NL;
        $postalCode = '2132WT';
        $city = 'Hoofddorp';
        $street = 'Siriusdreef';
        $houseNumber = 42;
        $houseNumberExtension =
            '-60';
        $deliveryDate = '24-12-2022';
        $openingTime = '09:00:00';
        $deliveryOptions =
            null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getPickupLocationsByAddress(
                $countryCode,
                $postalCode,
                $city,
                $street,
                $houseNumber,
                $houseNumberExtension,
                $deliveryDate,
                $openingTime,
                $deliveryOptions
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
                '{"GetLocationsResult":{"ResponseLocation":[{"Address":{"City":"City6","Country' .
                'code":"Countrycode2","HouseNr":136,"HouseNrExt":"HouseNrExt4","Remark":"Remark8' .
                '"},"DeliveryOptions":{"string":["string6","string7"]},"Distance":244,"Latitude"' .
                ':103.5,"LocationCode":102}]}}'
            )))
            ->assert();
    }

    public function testGetPickupLocationsByCoordinates()
    {
        // Parameters for the API call
        $latitude = 52.2864669620795;
        $longitude = 4.68239055845954;
        $countryCode = Models\CountrycodeEnum::NL;
        $deliveryDate = '24-12-2022';
        $openingTime = '09:00:00';
        $deliveryOptions =
            null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getPickupLocationsByCoordinates(
                $latitude,
                $longitude,
                $countryCode,
                $deliveryDate,
                $openingTime,
                $deliveryOptions
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
                '{"GetLocationsResult":{"ResponseLocation":[{"Address":{"City":"City6","Country' .
                'code":"Countrycode2","HouseNr":136,"HouseNrExt":"HouseNrExt4","Remark":"Remark8' .
                '"},"DeliveryOptions":{"string":["string6","string7"]},"Distance":244,"Latitude"' .
                ':103.5,"LocationCode":102}]}}'
            )))
            ->assert();
    }

    public function testGetPickupLocationsWithinArea()
    {
        // Parameters for the API call
        $latitudeNorth = 52.156439;
        $longitudeWest = 5.015643;
        $latitudeSouth = 52.017473;
        $longitudeEast = 5.065254;
        $countryCode = Models\CountrycodeEnum::NL;
        $deliveryDate = '24-12-2023';
        $openingTime = '09:00:00';
        $deliveryOptions =
            null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getPickupLocationsWithinArea(
                $latitudeNorth,
                $longitudeWest,
                $latitudeSouth,
                $longitudeEast,
                $countryCode,
                $deliveryDate,
                $openingTime,
                $deliveryOptions
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
                '{"GetLocationsResult":{"ResponseLocation":[{"Address":{"City":"City6","Country' .
                'code":"Countrycode2","HouseNr":136,"HouseNrExt":"HouseNrExt4","Remark":"Remark8' .
                '"},"DeliveryOptions":{"string":["string6","string7"]},"Distance":244,"Latitude"' .
                ':103.5,"LocationCode":102}]}}'
            )))
            ->assert();
    }

    public function testGetPickupLocation()
    {
        // Parameters for the API call
        $locationCode = '216877';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getPickupLocation($locationCode)->getResult();
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
                '{"GetLocationsResult":{"ResponseLocation":{"Address":{"City":"City6","Countryc' .
                'ode":"Countrycode2","HouseNr":136,"HouseNrExt":"HouseNrExt4","Remark":"Remark8"' .
                '},"DeliveryOptions":{"string":["string6","string7"]},"Distance":244,"Latitude":' .
                '103.5,"LocationCode":102}}}'
            )))
            ->assert();
    }
}
